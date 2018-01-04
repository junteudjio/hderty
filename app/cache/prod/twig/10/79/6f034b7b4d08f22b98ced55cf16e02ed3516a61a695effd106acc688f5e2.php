<?php

/* InnovGroupBundle:Group:resultatRechercheGroupe.html.twig */
class __TwigTemplate_10796f034b7b4d08f22b98ced55cf16e02ed3516a61a695effd106acc688f5e2 extends Twig_Template
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
        echo "    <div class=\"col-lg-7\">
    
                          <header class=\"panel-heading\">
                              ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.resultat_recherche"), "html", null, true);
        echo "  : \" ";
        echo twig_escape_filter($this->env, (isset($context["searchTextGroupe"]) ? $context["searchTextGroupe"] : $this->getContext($context, "searchTextGroupe")), "html", null, true);
        echo " \"
                        
                          </header>
                        ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes"))) > 0)) {
            // line 14
            echo "                           ";
            $this->env->loadTemplate("InnovGroupBundle:Group:renderGroupes.html.twig")->display($context);
            echo " 
            
                         ";
        } else {
            // line 17
            echo "                            <h1>    \"";
            echo twig_escape_filter($this->env, (isset($context["searchTextGroupe"]) ? $context["searchTextGroupe"] : $this->getContext($context, "searchTextGroupe")), "html", null, true);
            echo "\"  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.groupe_non_trouve"), "html", null, true);
            echo " </h1>
                            <h2>  ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.verif_orthographe_ou"), "html", null, true);
            echo "<a  href=\"";
            echo $this->env->getExtension('routing')->getPath("InnovGroup_allGroups");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulter_liste_groupe"), "html", null, true);
            echo "</a></h2>
                          ";
        }
        // line 20
        echo "                                
                         

            </div>
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:resultatRechercheGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  60 => 18,  53 => 17,  46 => 14,  44 => 13,  36 => 10,  31 => 7,  28 => 6,);
    }
}
