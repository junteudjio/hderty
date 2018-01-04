<?php

/* InnovGroupBundle:Group:recommandations.html.twig */
class __TwigTemplate_ab0f30f264c8444a9d5f87f3ba541a6cb90c823be699690cc8d7c648ba726464 extends Twig_Template
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
        echo "<div class=\"col-lg-7\">
   
        <header class=\"panel-heading\">
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.recommandations"), "html", null, true);
        echo ":

        </header>
        <ul class=\"list-group\">
                               ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 9
            echo "                                  <li class=\"list-group-item\" style=\"padding:0;\">
                                     <div class=\"panel-body\">
                                        <div>
                                            ";
            // line 12
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                // line 13
                echo "                                            <span style=\"font-size:10px;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.poster_dans"), "html", null, true);
                echo " </span><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe", array("id" => $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "groupe"), "id"))), "html", null, true);
                echo "\" style=\"font-size:11px;font-weight:bold;\">
                                                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "groupe"), "nom"), "html", null, true);
                echo "
                                            </a>
                                            
                                            ";
            }
            // line 18
            echo "                                        </div>
                                        <br>
                                            <div class=\"task-thumb-details\" style=\"margin-left:50px;\">
                                            <h1 style=\"float:left;\">
                                           ";
            // line 22
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "     
                                                        ";
                // line 23
                $context["url"] = (("visionPublicExCo__" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")) . "*");
                echo "   
                                                      ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["similaires"]) ? $context["similaires"] : $this->getContext($context, "similaires")), $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 25
                    echo "                                                                
                                                                  ";
                    // line 26
                    $context["url"] = (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr")) . "*");
                    // line 27
                    echo "                                                              
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                                                <a id=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" class=\"visionPublic tooltip1\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titre"), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\">
                                                ";
                // line 30
                $this->env->loadTemplate("InnovGroupBundle:Group:renderSpanDocument.html.twig")->display($context);
                // line 31
                echo "                                                </a>
                                            ";
            }
            // line 33
            echo "                                                    
                                                    
                                           ";
            // line 35
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "document"))) {
                echo "   
                                                    
                                                 ";
                // line 37
                $context["url"] = (("visionPublicDoc__" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")) . "*");
                echo " 
                                                    
                                                      ";
                // line 39
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["similaires"]) ? $context["similaires"] : $this->getContext($context, "similaires")), $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 40
                    echo "                                                    
                                                        
                                                                  ";
                    // line 42
                    $context["url"] = (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr")) . "*");
                    // line 43
                    echo "                                                           
                                                                
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                                                  
                                                <a id=\"";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" class=\"visionPublic tooltip1\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titre"), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\">
                                                    ";
                // line 48
                $this->env->loadTemplate("InnovGroupBundle:Group:renderSpanDocument.html.twig")->display($context);
                echo " 
 
                                                </a>
                                           ";
            }
            // line 52
            echo "                                            
                                            
                                             </h1>
                                            
                                            
                                            </div> 
                                        
                                            <br><br><br>
                                       <div>
                                       ";
            // line 61
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                // line 62
                echo "                                          <a title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_commenter_doc", twig_length_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "commentaires"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "commentaires")), "html", null, true);
                echo " <i class=\"icon-comments\"></i></a>&nbsp;&nbsp;
                                       ";
            }
            // line 63
            echo "    
                                          ";
            // line 64
            echo "&nbsp;&nbsp;
                                            <a  title=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_voir_doc", $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "nbreVue")), "html", null, true);
            echo "\" style=\"margin-right:90px;\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.nbre_vue", $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "nbreVue")), "html", null, true);
            echo " </a>&nbsp;&nbsp;
                                                                                
                                           
                                         ";
            // line 68
            echo "&nbsp;&nbsp;
                                           ";
            // line 69
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "document"))) {
                // line 70
                echo "                                                <a href=\"javascript:;\" id=\"";
                echo twig_escape_filter($this->env, ("favorisDoc_" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")), "html", null, true);
                echo "\" class=\"favoris tooltip1\" style=\"cursor:pointer;position:absolute;right:18px;\"> <i class=\"icon-star  text-warning\" style=\"font-size:17px;\"></i>
                                                <span>Ajouter Ce document a votre espace perso</span>
                                                </a>
                                           ";
            }
            // line 74
            echo "                                           ";
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "                                                
                                                <a href=\"javascript:;\" id=\"";
                // line 75
                echo twig_escape_filter($this->env, ("favorisExamCo_" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")), "html", null, true);
                echo "\" class=\"favoris tooltip1\" style=\"cursor:pointer;position:absolute;right:18px;\"> <i class=\"icon-star  text-warning\" style=\"font-size:17px;\"></i>
                                                <span>Ajouter Ce document a votre espace perso</span>
                                                </a>
                                           ";
            }
            // line 78
            echo "     
                                                <!-- Tags here -->
                                        </div>    
                                    </div>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "



                        </ul>
                   
                </div>

<style>
 .tooltip1
{
  position: relative;
 
  
  display: inline-block;
  text-decoration: none;
  
  outline: none;
}

.tooltip1 span
{
  visibility: hidden;
  position: absolute;
  bottom: 40px;
  left: 50%;
  z-index: 999;
  width: 230px;
  margin-left: -127px;
  padding: 10px;
  border: 2px solid #ccc;
  opacity: .9;
  background-color: #ddd;
  background-image: -webkit-linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,0));
  background-image: -moz-linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,0));
  background-image: -ms-linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,0));
  background-image: -o-linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,0));
  background-image: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,0));
  -moz-border-radius: 4px;
  border-radius: 4px;
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,.4), 0 1px 0 rgba(255,255,255,.5) inset;
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.4), 0 1px 0 rgba(255,255,255,.5) inset;
  box-shadow: 0 1px 2px rgba(0,0,0,.4), 0 1px 0 rgba(255,255,255,.5) inset;
  text-shadow: 0 1px 0 rgba(255,255,255,.4);
}

.tooltip1:hover
{
  border: 0; /* IE6 fix */
}

.tooltip1:hover span
{
  visibility: visible;
}

.tooltip1 span:before,
.tooltip1 span:after
{
  content: \"\";
  position: absolute;
  z-index: 1000;
  bottom: -7px;
  left: 50%;
  margin-left: -8px;
  border-top: 8px solid #ddd;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-bottom: 0;
}

.tooltip1 span:before
{
  border-top-color: #ccc;
  bottom: -8px;
}
</style>  ";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:recommandations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 85,  224 => 78,  217 => 75,  212 => 74,  204 => 70,  202 => 69,  199 => 68,  191 => 65,  188 => 64,  185 => 63,  177 => 62,  175 => 61,  164 => 52,  157 => 48,  149 => 47,  146 => 46,  138 => 43,  136 => 42,  132 => 40,  128 => 39,  123 => 37,  118 => 35,  114 => 33,  110 => 31,  108 => 30,  99 => 29,  92 => 27,  90 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  69 => 18,  62 => 14,  55 => 13,  53 => 12,  48 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
