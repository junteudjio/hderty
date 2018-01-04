<?php

/* InnovGroupBundle:Group:formulaireRechercheGroupe.html.twig */
class __TwigTemplate_27e6b4cd7073c1fa8fb346ea1a9899ee265feec19c4e33c2dc35c8044ed8e3e4 extends Twig_Template
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
        echo "<form style=\"display:none;\" id=\"form_search_group\" action=\"";
        echo $this->env->getExtension('routing')->getPath("InnovGroup_solrSearchGroupe");
        echo "\" method=\"POST\" >
         ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query"), 'widget', array("attr" => array("class" => "form-control  input_search_group", "id" => "input_search_group")));
        echo "
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:formulaireRechercheGroupe.html.twig";
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
