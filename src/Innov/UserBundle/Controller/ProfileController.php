<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Innov\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Innov\UserBundle\Entity\Photo;


/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends ContainerAware
{
    /**
     * Show the user
     */
    public function showAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->container->get('templating')->renderResponse('InnovUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'), array('user' => $user));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
                $userManager = $this->container->get('fos_user.user_manager');

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
                
                $new_photo = $user->getPhoto();
                
                $photo_default = false;
                
                // on teste si la photo du user est encore la photo par defaut
                // si oui il y' aura d'autres traitements à faire
                if($new_photo->getId() == 1) $photo_default = true;
                $new_photo->setId($user->getId()+1);
                $new_photo->setUploadDir('uploads/user/photos');
                $this->container->get('doctrine')->getManager()->flush($new_photo);
                $userManager->updateUser($user);
                
                if($photo_default) 
                {
                    $stmt = $this->container->get('doctrine')->getManager()
                                ->getConnection()
                                ->prepare('INSERT INTO Photo VALUES(:id, :url , :alt, :uploadDir)');

                        $stmt->bindValue('id',$user->getId()+1 );
                        $stmt->bindValue('url',$new_photo->getUrl() );
                        $stmt->bindValue('alt',$new_photo->getAlt() );
                        $stmt->bindValue('uploadDir','uploads/user/photos' );                       
                        $stmt->execute();
                        
                     $stmt = $this->container->get('doctrine')->getManager()
                                ->getConnection()
                                ->prepare('UPDATE Photo SET url = :url , alt = :alt , uploadDir = :uploadDir where id = 1');

                        $stmt->bindValue('url', 'jpeg' );
                        $stmt->bindValue('alt', 'user.jpeg' );
                        $stmt->bindValue('uploadDir','uploads/user/defaultPhotos' );                       
                        $stmt->execute();
                        
                      $stmt = $this->container->get('doctrine')->getManager()
                                ->getConnection()
                                ->prepare('UPDATE fos_user SET photo_id = :photo_id where id = :id');

                        $stmt->bindValue('photo_id', $user->getId() + 1);
                        $stmt->bindValue('id', $user->getId() );
                        $stmt->execute();
                        
                    
                }
                
                

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('InnovGroup_index');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse(
            'InnovUserBundle:Profile:edit.html.'.$this->container->getParameter('fos_user.template.engine'),
            array('form' => $form->createView())
        );
    }
}
