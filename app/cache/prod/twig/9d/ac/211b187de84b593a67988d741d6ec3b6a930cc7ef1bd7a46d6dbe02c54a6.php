<?php

/* InnovGroupBundle:Group:formulaireRecherche.html.twig */
class __TwigTemplate_9dac211b187de84b593a67988d741d6ec3b6a930cc7ef1bd7a46d6dbe02c54a6 extends Twig_Template
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
        echo "<form id=\"search_form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch", array("query" => "_a_a_a_a_"));
        echo "\" method=\"POST\" >
         ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query"), 'widget', array("attr" => array("id" => "nom", "style" => "color:#000000", "class" => "form-control input-sm", "title" => $this->env->getExtension('translator')->trans("innov.navbar.title_search_bar"), "placeholder" => $this->env->getExtension('translator')->trans("innov.navbar.search_placeholder"))));
        echo "
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:formulaireRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }
}
