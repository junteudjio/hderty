<?php

/* InnovGroupBundle:Group:renderGroupes.html.twig */
class __TwigTemplate_45567122d923a08387a3049a1528f05340d3fee38f7ee50a32f8d284b1eedf19 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 2
            echo "<aside class=\"profile-nav alt green-border\">
                          <section class=\"panel\">
                             <div class=\"user-heading alt green-bg\">                                 
                                  <h1>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "nom"), "html", null, true);
            echo "</h1>
                                  <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"), 0, array(), "array"), "html", null, true);
            echo "</p>
                                  <span><a style=\"border:none;position:absolute;right:20px;font-weight:bold;\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_demandeRejoindreGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.vouloirRejoindreGroupe"), "html", null, true);
            echo " </a></span>
                              </div>

                              <ul class=\"nav nav-pills nav-stacked\">
                                  <li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_voirMembres", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo " \"> <i class=\"icon-time\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.voirMembresGroupe"), "html", null, true);
            echo "  <span class=\"label label-primary pull-right r-activity\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.content.nombreDeMembres", twig_length_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"))), "html", null, true);
            echo "</span></a></li>
                                   ";
            // line 12
            $context["nbre_docs"] = twig_length_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "examCollections"));
            // line 13
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "examCollections"));
            foreach ($context['_seq'] as $context["_key"] => $context["examCo"]) {
                // line 14
                echo "                                        ";
                $context["nbre_docs"] = ((isset($context["nbre_docs"]) ? $context["nbre_docs"] : $this->getContext($context, "nbre_docs")) + twig_length_filter($this->env, $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "essaisCollections")));
                // line 15
                echo "                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examCo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("innovGroup_consulterDocGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\"> <i class=\"icon-calendar\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.voirDocumentsGroupe"), "html", null, true);
            echo " <span class=\"label label-info pull-right r-activity\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.content.nombreDeDocumentsPartages", (isset($context["nbre_docs"]) ? $context["nbre_docs"] : $this->getContext($context, "nbre_docs"))), "html", null, true);
            echo "</span></a></li>
                                  
                              </ul>

                          </section>
                      </aside>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "


       ";
        // line 34
        echo "                                  ";
        // line 35
        echo "                    ";
        // line 75
        echo "               ";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:renderGroupes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 75,  95 => 35,  93 => 34,  88 => 23,  70 => 16,  64 => 15,  61 => 14,  56 => 13,  54 => 12,  46 => 11,  37 => 7,  33 => 6,  29 => 5,  24 => 2,  19 => 1,  44 => 14,  42 => 13,  36 => 10,  31 => 7,  28 => 6,);
    }
}
