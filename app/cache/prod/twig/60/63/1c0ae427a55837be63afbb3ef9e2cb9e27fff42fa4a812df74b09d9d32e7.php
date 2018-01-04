<?php

/* InnovGroupBundle:Group:erreurServeur.html.twig */
class __TwigTemplate_60631c0ae427a55837be63afbb3ef9e2cb9e27fff42fa4a812df74b09d9d32e7 extends Twig_Template
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
        echo " <h1> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.welcome"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "prenom"), "html", null, true);
        echo "</h1>
   <p> ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.erreur_serveur.label"), "html", null, true);
        echo " </p>
 <p> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.erreur_serveur.excuse"), "html", null, true);
        echo " </p>";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:erreurServeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  19 => 1,);
    }
}
