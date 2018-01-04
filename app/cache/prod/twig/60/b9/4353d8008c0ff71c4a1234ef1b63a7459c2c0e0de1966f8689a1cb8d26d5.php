<?php

/* InnovGroupBundle:Group:membres.html.twig */
class __TwigTemplate_60b94353d8008c0ff71c4a1234ef1b63a7459c2c0e0de1966f8689a1cb8d26d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovGroupBundle::layout.html.twig");

        $this->blocks = array(
            'infoGroupe' => array($this, 'block_infoGroupe'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InnovGroupBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_infoGroupe($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        if (((isset($context["user_is_member"]) ? $context["user_is_member"] : $this->getContext($context, "user_is_member")) == true)) {
            // line 7
            echo "            <div class=\"row\">               
    <div class=\"col-lg-7\" style=\"padding-right:0;\">
        <section class=\"panel\">
            <div class=\"panel-body\" style=\"padding:6px;\">
                <ul class=\"summary-list\" style=\"\">
                    <li>
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\">
                            <i class=\" icon-globe text-primary\"></i>
                                                  ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "nom"), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_voirMembres", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\" >
                            <i class=\"icon-group text-primary\"></i>
                                               ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.voir_membres", twig_length_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"))), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li>
                          
                            <a data-fancybox-type=\"iframe\" id=\"fancyAjout\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_ajoutMembre", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\" >
                              <i class=\" icon-user text-primary\"></i>
                              ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.form_ajout_membre_label"), "html", null, true);
            echo " </a>
                    </li>
                  </ul>
                    
            
            </div>
        </section>
          
            
                
    </div>
</div>
        ";
        }
        // line 41
        echo "   ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        echo "  



<br/><br/>
<div class=\"col-lg-7\" style=\"padding-right:0;\">
<div class=\"panel\">
                          <div class=\"panel-body\">
                              ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 53
            echo "                                <a   href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_voirProfil", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"))), "html", null, true);
            echo " \">
                                                <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photo"), "url"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photo"), "alt"), "html", null, true);
            echo "\" height=\"29\" width=\"29\">
                                                     <span class=\"username\">";
            // line 55
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom") . " ") . $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom")), "html", null, true);
            echo "</span>
                                                
                                </a>
                              <br><hr>
                              
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                          </div>
                      </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:membres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 61,  120 => 55,  114 => 54,  109 => 53,  105 => 52,  93 => 44,  89 => 41,  73 => 28,  68 => 26,  60 => 21,  55 => 19,  48 => 15,  43 => 13,  35 => 7,  32 => 6,  29 => 5,);
    }
}
