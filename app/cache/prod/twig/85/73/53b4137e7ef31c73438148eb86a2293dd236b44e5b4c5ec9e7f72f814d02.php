<?php

/* InnovGroupBundle:Group:renderSpanDocument.html.twig */
class __TwigTemplate_857353b4137e7ef31c73438148eb86a2293dd236b44e5b4c5ec9e7f72f814d02 extends Twig_Template
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
        echo " ";
        $context["nbre_cliches"] = twig_length_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "cliches"));
        echo " 
                                                 ";
        // line 2
        $context["ancien_nbre_cliches"] = (isset($context["nbre_cliches"]) ? $context["nbre_cliches"] : $this->getContext($context, "nbre_cliches"));
        // line 3
        echo "                                                  ";
        if (((isset($context["nbre_cliches"]) ? $context["nbre_cliches"] : $this->getContext($context, "nbre_cliches")) < 6)) {
            echo "  
                                                    <span style=\"width:";
            // line 4
            echo twig_escape_filter($this->env, ((isset($context["nbre_cliches"]) ? $context["nbre_cliches"] : $this->getContext($context, "nbre_cliches")) * 120), "html", null, true);
            echo "px;\">
                                                  ";
        } else {
            // line 6
            echo "                                                    <span style=\"width:";
            echo twig_escape_filter($this->env, (6 * 120), "html", null, true);
            echo "px;\">
                                                   
                                                    ";
            // line 8
            $context["nbre_cliches"] = 5;
            // line 9
            echo "                                                    
                                                  ";
        }
        // line 11
        echo "
                                                        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbre_cliches"]) ? $context["nbre_cliches"] : $this->getContext($context, "nbre_cliches"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                                                          ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= 5)) {
                // line 14
                echo "                                                              ";
                $context["cliche"] = $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "cliches"), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array");
                // line 15
                echo "                                                              <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute((isset($context["cliche"]) ? $context["cliche"] : $this->getContext($context, "cliche")), "uploadDir") . "/") . $this->getAttribute((isset($context["cliche"]) ? $context["cliche"] : $this->getContext($context, "cliche")), "id")) . ".") . $this->getAttribute((isset($context["cliche"]) ? $context["cliche"] : $this->getContext($context, "cliche")), "url"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliche"]) ? $context["cliche"] : $this->getContext($context, "cliche")), "alt"), "html", null, true);
                echo "\" height=\"100\" width=\"100\"/>
                                                          ";
            }
            // line 17
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                                                          ";
        if (((isset($context["ancien_nbre_cliches"]) ? $context["ancien_nbre_cliches"] : $this->getContext($context, "ancien_nbre_cliches")) >= 6)) {
            // line 19
            echo "                                                           ";
            $context["reste"] = ((isset($context["ancien_nbre_cliches"]) ? $context["ancien_nbre_cliches"] : $this->getContext($context, "ancien_nbre_cliches")) - (isset($context["nbre_cliches"]) ? $context["nbre_cliches"] : $this->getContext($context, "nbre_cliches")));
            echo " 
                                                            ";
            // line 20
            echo twig_escape_filter($this->env, ("    + " . (isset($context["reste"]) ? $context["reste"] : $this->getContext($context, "reste"))), "html", null, true);
            echo "
                                                          ";
        }
        // line 22
        echo "                                                       
                                                    </span>     ";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:renderSpanDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  83 => 20,  78 => 19,  75 => 18,  69 => 17,  61 => 15,  58 => 14,  55 => 13,  51 => 12,  48 => 11,  44 => 9,  42 => 8,  36 => 6,  31 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
