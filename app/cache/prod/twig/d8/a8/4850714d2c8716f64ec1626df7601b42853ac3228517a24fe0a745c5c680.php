<?php

/* InnovGroupBundle:Group:vouloirRejoindreGroupe.html.twig */
class __TwigTemplate_d8a84850714d2c8716f64ec1626df7601b42853ac3228517a24fe0a745c5c680 extends Twig_Template
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

    // line 4
    public function block_infoGroupe($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
   
    <h3> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "nom"), "html", null, true);
        echo " </h3>
    <h4> membres </h4>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 13
            echo "       ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom") . " ") . $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom")), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    
    
    <h4> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.vouloirRejoindreGroupe2"), "html", null, true);
        echo " </h4>
  
     ";
        // line 19
        $this->env->loadTemplate("InnovGroupBundle:Group:formulaireRejoindreGroupe.html.twig")->display($context);
        echo " 

   
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:vouloirRejoindreGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  63 => 17,  59 => 15,  50 => 13,  46 => 12,  41 => 10,  37 => 8,  34 => 7,  29 => 4,);
    }
}
