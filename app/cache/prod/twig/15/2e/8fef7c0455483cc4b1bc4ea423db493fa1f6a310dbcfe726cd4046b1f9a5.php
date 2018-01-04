<?php

/* InnovGroupBundle:Group:userHelper.html.twig */
class __TwigTemplate_152e8fef7c0455483cc4b1bc4ea423db493fa1f6a310dbcfe726cd4046b1f9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        
        <img id=\"espaceperso\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/espacePerso.PNG"), "html", null, true);
        echo "\" />
        <img id=\"recherche\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/recherche.PNG"), "html", null, true);
        echo "\" />
        <img id=\"creergroupe\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/creerGroupe.PNG"), "html", null, true);
        echo "\" />
        <style>
            #espaceperso{
                position:fixed;
                top:40%;
                right:18%;
            }
            
             #recherche{
                position:fixed;
                top:6%;
                right:30%;
            }
            
            #creergroupe{
                position:fixed;
                top:25%;
                left:20%;
            }
            
        </style>";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:userHelper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
