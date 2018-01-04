<?php

/* InnovGroupBundle:Group:listeEssaiCollection.html.twig */
class __TwigTemplate_3a9accc7dec5ccff5cb28d7b049697232696062651b6a1dbee81823144b7a26f extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "essaisCollections")));
        foreach ($context['_seq'] as $context["_key"] => $context["essaiCo"]) {
            // line 2
            echo "
<tr>
    <td>
        <a   href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_voirProfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "id"))), "html", null, true);
            echo " \" class=\"task-thumb\">
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "photo"), "url"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "photo"), "alt"), "html", null, true);
            echo "\" height=\"29\" width=\"29\"/>         
            <span style=\"font-size:10px\"> ";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "nom") . "  ") . $this->getAttribute($this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "auteurEssaiCollection"), "prenom")), "html", null, true);
            echo "        </span>                                            </a>
    </td>
    <td><a style=\"cursor:pointer;\"  id=\"";
            // line 9
            echo twig_escape_filter($this->env, ("visionEssaiCo_" . $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "id")), "html", null, true);
            echo "\" class=\"visionEssaiCo\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "titre"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\"/></a></td>
    
       
        <td>
            <a  title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_voir_doc", $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "nbreVue")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.nbre_vue", $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "nbreVue")), "html", null, true);
            echo " </a>&nbsp;&nbsp;
        </td>
        <td>
            <a  title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_commenter_doc", twig_length_filter($this->env, $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "commentaires"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "commentaires")), "html", null, true);
            echo "<i class=\"icon-comments\" style=\"font-size:15px;\"></i></a>
         </td>
        <td>
            <a  style=\"cursor:pointer;\"  id=\"";
            // line 19
            echo twig_escape_filter($this->env, ("favorisEssaiCo_" . $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "id")), "html", null, true);
            echo "\" class=\"favoris\" > <i class=\"icon-star text-warning\" style=\"font-size:15px;\" ></i></a>

        </td>
        <td>
        ";
            // line 23
            if ($this->env->getExtension('security')->isGranted("DELETE", (isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")))) {
                // line 24
                echo "                    <a class=\"poubelleGroupe\" href=\"javascript:;\" id=\"";
                echo twig_escape_filter($this->env, ("deleteEssaiCo_" . $this->getAttribute((isset($context["essaiCo"]) ? $context["essaiCo"] : $this->getContext($context, "essaiCo")), "id")), "html", null, true);
                echo " \"> <i class=\"icon-trash\" style=\"font-size:15px;\"></i></a>
             ";
            }
            // line 26
            echo "        </td>
    </tr>

                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['essaiCo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  
   ";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:listeEssaiCollection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  79 => 24,  77 => 23,  62 => 16,  43 => 9,  38 => 7,  32 => 6,  28 => 5,  23 => 2,  267 => 109,  249 => 104,  240 => 102,  236 => 101,  222 => 90,  211 => 82,  202 => 76,  193 => 70,  188 => 68,  179 => 62,  175 => 61,  165 => 54,  161 => 53,  154 => 51,  146 => 48,  140 => 47,  134 => 46,  119 => 33,  109 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 29,  86 => 26,  80 => 22,  73 => 19,  71 => 18,  67 => 17,  61 => 14,  55 => 13,  24 => 3,  21 => 2,  19 => 1,  100 => 50,  97 => 49,  92 => 46,  89 => 45,  58 => 21,  51 => 12,  46 => 15,  36 => 7,  33 => 6,  30 => 5,  275 => 159,  269 => 156,  198 => 87,  195 => 86,  191 => 84,  184 => 79,  170 => 78,  164 => 76,  156 => 74,  150 => 72,  147 => 71,  130 => 70,  123 => 65,  120 => 64,  117 => 63,  115 => 62,  112 => 61,  110 => 60,  103 => 56,  82 => 38,  70 => 19,  63 => 23,  54 => 13,  49 => 17,  41 => 4,  29 => 4,);
    }
}
