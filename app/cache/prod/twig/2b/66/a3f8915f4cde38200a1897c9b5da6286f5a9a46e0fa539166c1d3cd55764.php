<?php

/* InnovGroupBundle:Group:mesNotifs.html.twig */
class __TwigTemplate_2b66a3f8915f4cde38200a1897c9b5da6286f5a9a46e0fa539166c1d3cd55764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "   
<div class=\"col-lg-8\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.notification.label"), "html", null, true);
        echo "
                              
                          </header>
                          <div class=\"panel-body profile-activity\">
                              ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["mesNotifs"]) ? $context["mesNotifs"] : $this->getContext($context, "mesNotifs"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 16
            echo "                              
                                  ";
            // line 17
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") % 2) == 0)) {
                // line 18
                echo "                               <div class=\"activity terques\">
                                   ";
            } else {
                // line 20
                echo "                                <div class=\"activity alt green\"> 
                                    ";
            }
            // line 22
            echo "                                  <span>
                                     <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "url"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "photo"), "alt"), "html", null, true);
            echo "\" height=\"29\" width=\"29\">                            
                                  </span>
                                  <div class=\"activity-desk\">
                                      <div class=\"panel\">
                                          <div class=\"panel-body\">
                                              <div class=\"arrow\"></div>
                                              <i class=\" icon-time\"></i>
                                              <h4>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "dateNotif"), "d/m/Y - H:i:s"), "html", null, true);
            echo "</h4>
                                              <p>
                                                     ";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "prenom") . " ") . $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "nom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "contenu")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "groupeNotif"), "nom"), "html", null, true);
            echo "
                                                      ";
            // line 33
            if (($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "typeNotif") == 1)) {
                // line 34
                echo "                                                      <br><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_accepterDemandeGroupe", array("user_id" => $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "auteurNotif"), "id"), "groupe_id" => $this->getAttribute($this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "groupeNotif"), "id"))), "html", null, true);
                echo "\">
                                                          ";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.notification.accepter_demande"), "html", null, true);
                echo "
                                                      </a><i class=\"icon-long-arrow-right\"></i>
                                                      ";
            }
            // line 38
            echo "                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              
                              
                              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                              
                             

                          </div>
                      </section>
                  </div>
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:mesNotifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  115 => 38,  109 => 35,  104 => 34,  102 => 33,  94 => 32,  89 => 30,  77 => 23,  74 => 22,  70 => 20,  66 => 18,  64 => 17,  61 => 16,  44 => 15,  37 => 11,  31 => 7,  28 => 6,);
    }
}
