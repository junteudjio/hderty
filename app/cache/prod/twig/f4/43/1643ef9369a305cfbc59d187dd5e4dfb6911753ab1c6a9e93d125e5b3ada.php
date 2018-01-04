<?php

/* InnovGroupBundle:Group:EspacePerso.html.twig */
class __TwigTemplate_f4431643ef9369a305cfbc59d187dd5e4dfb6911753ab1c6a9e93d125e5b3ada extends Twig_Template
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
        echo "<div id=\"tree_1\" class=\"tree-demo\">
        <ul test=\"test\">
                 ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "dossierPerso"), "sousDossiersPerso"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sousDossier"]) {
            // line 4
            echo "
                        <li  id=\"";
            // line 5
            echo twig_escape_filter($this->env, ("sousD_" . $this->getAttribute((isset($context["sousDossier"]) ? $context["sousDossier"] : $this->getContext($context, "sousDossier")), "id")), "html", null, true);
            echo "\" data-jstree='{ \"type\" : \"racine\" }'>
                               ";
            // line 7
            echo "                               ";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1) || ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 2))) {
                echo " 
                                    ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["sousDossier"]) ? $context["sousDossier"] : $this->getContext($context, "sousDossier")), "nom")), "html", null, true);
                echo "
                                ";
            } else {
                // line 10
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousDossier"]) ? $context["sousDossier"] : $this->getContext($context, "sousDossier")), "nom"), "html", null, true);
                echo "
                                ";
            }
            // line 12
            echo "                                <ul>
                                    ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sousDossier"]) ? $context["sousDossier"] : $this->getContext($context, "sousDossier")), "document"));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 14
                echo "                                        <li id=\" ";
                echo twig_escape_filter($this->env, ("doc_" . $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id")), "html", null, true);
                echo "\" class=\"pushpush\" data-jstree='{ \"type\" : \"file\" }'>
                                            ";
                // line 15
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "titre")) < 49)) {
                    // line 16
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "titre"), "html", null, true);
                    echo "

                                            ";
                } else {
                    // line 19
                    echo "                                                ";
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "titre"), 0, 49) . " ..."), "html", null, true);
                    echo "
                                            ";
                }
                // line 21
                echo "                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "

                                </ul>\t
                        </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousDossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </ul>
\t\t\t\t\t\t\t\t
</div>

<br><br>
<p> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.espace_perso.helper_text"), "html", null, true);
        echo " </p>


";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:EspacePerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  115 => 28,  97 => 23,  90 => 21,  84 => 19,  77 => 16,  75 => 15,  70 => 14,  66 => 13,  63 => 12,  57 => 10,  52 => 8,  47 => 7,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
