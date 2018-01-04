<?php

/* InnovGroupBundle:Group:formulaireRejoindreGroupe.html.twig */
class __TwigTemplate_2862df89470553f8380e1839fedbeddedd9492318e6f0c11704cacaef7f88f16 extends Twig_Template
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
    <form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_vouloirRejoindreGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formVouloirRejoindre"]) ? $context["formVouloirRejoindre"] : $this->getContext($context, "formVouloirRejoindre")), 'widget');
        echo "
            <button type=\"submit\">Ok </button>
    </form>
   
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:formulaireRejoindreGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,  68 => 19,  63 => 17,  59 => 15,  50 => 13,  46 => 12,  41 => 10,  37 => 8,  34 => 7,  29 => 4,);
    }
}
