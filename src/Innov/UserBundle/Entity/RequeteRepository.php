<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * RequeteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RequeteRepository extends EntityRepository
{
    public function mes5dernieresRequetes($histoUser)
	{
		$qb = $this->createQueryBuilder('r');
		$qb->where('r.historiqueRequete = :histoUser ')
                   ->andWhere('r.groupSearch = false')
		->setParameter('histoUser', $histoUser)
                ->orderBy('r.dateRequete', 'desc')
                ->setMaxResults(5);
		return $qb->getQuery()->getResult();
	}
}
