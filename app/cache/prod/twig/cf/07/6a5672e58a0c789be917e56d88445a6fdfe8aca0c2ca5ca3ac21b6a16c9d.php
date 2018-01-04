<?php

/* InnovGroupBundle:Group:demandeRejoindreGroupe.html.twig */
class __TwigTemplate_cf076a5672e58a0c789be917e56d88445a6fdfe8aca0c2ca5ca3ac21b6a16c9d extends Twig_Template
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

    // line 3
    public function block_infoGroupe($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
   
    <h3> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "nom"), "html", null, true);
        echo " </h3>
    <h4> liste des membres </h4>
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 12
            echo "       ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom") . " ") . $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom")), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
  ";
        // line 15
        if (((isset($context["booleen"]) ? $context["booleen"] : $this->getContext($context, "booleen")) == false)) {
            // line 16
            echo "   <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_demandeRejoindreGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.demande_rejoindre"), "html", null, true);
            echo " </a>

  ";
        } else {
            // line 19
            echo "   <p> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.deja_membre"), "html", null, true);
            echo " </p>
   
   <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("InnovGroup_accueil");
            echo "\" ><button class=\"btn-primary\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.aller_a_laccueil"), "html", null, true);
            echo "</button> </a>
   ";
        }
        // line 23
        echo "   
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:demandeRejoindreGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  79 => 21,  73 => 19,  64 => 16,  62 => 15,  59 => 14,  50 => 12,  46 => 11,  41 => 9,  37 => 7,  34 => 6,  29 => 3,);
    }
}
