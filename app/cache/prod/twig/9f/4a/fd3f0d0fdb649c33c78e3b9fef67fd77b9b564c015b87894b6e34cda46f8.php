<?php

/* InnovGroupBundle:Group:resultatRecherche.html.twig */
class __TwigTemplate_9f4afd3f0d0fdb649c33c78e3b9fef67fd77b9b564c015b87894b6e34cda46f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'searchForm' => array($this, 'block_searchForm'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_searchForm($context, array $blocks = array())
    {
        // line 5
        echo "    <form id=\"search_form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch", array("query" => "_a_a_a_a_"));
        echo "\" method=\"POST\" >
         ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query"), 'widget', array("attr" => array("id" => "nom", "style" => "color:black", "class" => "form-control input-sm", "title" => $this->env->getExtension('translator')->trans("innov.navbar.title_search_bar"), "placeholder" => $this->env->getExtension('translator')->trans("innov.navbar.search_placeholder"))));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"col-lg-7\">
    
                          <header class=\"panel-heading\">
                              ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.resultat_recherche"), "html", null, true);
        echo " : \" ";
        echo twig_escape_filter($this->env, (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "html", null, true);
        echo " \"
                              
                              ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar"), "html", null, true);
        echo " :<br><br>
                       <div class=\"row\">       
                     <div class=\"btn-group\"style=\"margin-left:20%;\" >
                                     
                                 
                              <a class=\"btn btn-white\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch4", array("query" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "sort_mode" => "pertinence", "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
        echo "\">  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar_pertinence"), "html", null, true);
        echo "</a> 
                              <a class=\"btn btn-white\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch4", array("query" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "sort_mode" => "plus_recent", "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar_plus_recent"), "html", null, true);
        echo "</a>
                              <a class=\"btn btn-white\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch4", array("query" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "sort_mode" => "populaire", "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar_populaire"), "html", null, true);
        echo "</a>
                    </div>
                       </div>
                          
                              
                          </header>
                          <ul class=\"list-group\">
                              ";
        // line 31
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
            // line 32
            echo "                                  <li class=\"list-group-item\" style=\"padding:0;\">
                                     <div class=\"panel-body\">
                                        <div>
                                            ";
            // line 35
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                // line 36
                echo "                                            <span style=\"font-size:10px;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.poster_dans"), "html", null, true);
                echo "</span><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe", array("id" => $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "groupe"), "id"))), "html", null, true);
                echo "\" style=\"font-size:11px;font-weight:bold;\">
                                                            ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "groupe"), "nom"), "html", null, true);
                echo "
                                            </a>
                                            
                                            ";
            }
            // line 41
            echo "                                        </div>
                                        <br>
                                            <div class=\"task-thumb-details\" style=\"margin-left:50px;\">
                                            <h1 style=\"float:left;\">
                                           ";
            // line 45
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "     
                                                        ";
                // line 46
                $context["url"] = (("visionPublicExCo__" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")) . "*");
                echo "   
                                                      ";
                // line 47
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["similaires"]) ? $context["similaires"] : $this->getContext($context, "similaires")), $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 48
                    echo "                                                                
                                                                  ";
                    // line 49
                    $context["url"] = (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr")) . "*");
                    // line 50
                    echo "                                                              
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                                                <a id=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" class=\"visionPublic tooltip1\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titre"), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\">
                                                ";
                // line 53
                $this->env->loadTemplate("InnovGroupBundle:Group:renderSpanDocument.html.twig")->display($context);
                echo "  
                                                </a>
                                            ";
            }
            // line 56
            echo "                                                    
                                                    
                                           ";
            // line 58
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "document"))) {
                echo "   
                                                    
                                                 ";
                // line 60
                $context["url"] = (("visionPublicDoc__" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")) . "*");
                echo " 
                                                    
                                                      ";
                // line 62
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["similaires"]) ? $context["similaires"] : $this->getContext($context, "similaires")), $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 63
                    echo "                                                    
                                                        
                                                                  ";
                    // line 65
                    $context["url"] = (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr")) . "*");
                    // line 66
                    echo "                                                           
                                                                
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                                  
                                                <a id=\"";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" class=\"visionPublic tooltip1\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titre"), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\">
                                                   ";
                // line 71
                $this->env->loadTemplate("InnovGroupBundle:Group:renderSpanDocument.html.twig")->display($context);
                echo " 

                                                </a>
                                           ";
            }
            // line 75
            echo "                                            
                                            
                                             </h1>
                                            
                                            
                                            </div> 
                                        
                                            <br><br><br>
                                       <div>
                                       ";
            // line 84
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                // line 85
                echo "                                          <a title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_commenter_doc", twig_length_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "commentaires"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "commentaires")), "html", null, true);
                echo " <i class=\"icon-comments\"></i></a>&nbsp;&nbsp;
                                        
                                        ";
            }
            // line 87
            echo "  
                                        ";
            // line 88
            echo "&nbsp;&nbsp;
                                            <a  title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_voir_doc", $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "nbreVue")), "html", null, true);
            echo "\" style=\"margin-right:90px;\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.nbre_vue", $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "nbreVue")), "html", null, true);
            echo " </a>&nbsp;&nbsp;
                                                                                
                                           
                                         ";
            // line 92
            echo "&nbsp;&nbsp;
                                           ";
            // line 93
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "document"))) {
                // line 94
                echo "                                                <a href=\"javascript:;\" id=\"";
                echo twig_escape_filter($this->env, ("favorisDoc_" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")), "html", null, true);
                echo "\" class=\"favoris tooltip1\" style=\"cursor:pointer;position:absolute;right:18px;\"> <i class=\"icon-star  text-warning\" style=\"font-size:17px;\"></i>
                                                <span>Ajouter Ce document a votre espace perso</span>
                                                </a>
                                           ";
            }
            // line 98
            echo "                                           ";
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "                                                
                                                <a href=\"javascript:;\" id=\"";
                // line 99
                echo twig_escape_filter($this->env, ("favorisExamCo_" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")), "html", null, true);
                echo "\" class=\"favoris tooltip1\" style=\"cursor:pointer;position:absolute;right:18px;\"> <i class=\"icon-star  text-warning\" style=\"font-size:17px;\"></i>
                                                <span>Ajouter Ce document a votre espace perso</span>
                                                </a>
                                           ";
            }
            // line 102
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
        // line 109
        echo "                              
                                  
                              
                              
                                 
                          </ul>
        
    </div>
 <div class=\"col-lg-7\">

  ";
        // line 119
        if (((isset($context["nbre_docs"]) ? $context["nbre_docs"] : $this->getContext($context, "nbre_docs")) > 10)) {
            // line 120
            echo "                              ";
            $context["nbre_pages"] = ((isset($context["nbre_docs"]) ? $context["nbre_docs"] : $this->getContext($context, "nbre_docs")) / 10);
            // line 121
            echo "                              ";
            $context["nbre_pages"] = twig_round((isset($context["nbre_pages"]) ? $context["nbre_pages"] : $this->getContext($context, "nbre_pages")), 0, "ceil");
            // line 122
            echo "                              <ul class=\"pagination pagination-sm\">
                                 ";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbre_pages"]) ? $context["nbre_pages"] : $this->getContext($context, "nbre_pages"))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 124
                echo "                                    ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 125
                    echo "                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch4", array("query" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "sort_mode" => "default", "offset" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                    echo "\">«</a></li>
                                    ";
                } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 1) && (!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")))) {
                    // line 127
                    echo "                                         <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch4", array("query" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "sort_mode" => "default", "offset" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                    echo "</a></li>
                                    ";
                } else {
                    // line 129
                    echo "                                         <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch4", array("query" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "sort_mode" => "default", "offset" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                    echo "\">»</a></li>
                                    ";
                }
                // line 131
                echo "                                    
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                              </ul>
                         ";
        }
        // line 135
        echo "            </div>
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
</style>  
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:resultatRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 135,  387 => 133,  372 => 131,  366 => 129,  358 => 127,  352 => 125,  349 => 124,  332 => 123,  329 => 122,  326 => 121,  323 => 120,  321 => 119,  309 => 109,  289 => 102,  282 => 99,  277 => 98,  269 => 94,  267 => 93,  264 => 92,  256 => 89,  253 => 88,  250 => 87,  241 => 85,  239 => 84,  228 => 75,  221 => 71,  213 => 70,  210 => 69,  202 => 66,  200 => 65,  196 => 63,  192 => 62,  187 => 60,  182 => 58,  178 => 56,  172 => 53,  163 => 52,  156 => 50,  154 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  133 => 41,  126 => 37,  119 => 36,  117 => 35,  112 => 32,  95 => 31,  83 => 24,  77 => 23,  71 => 22,  63 => 17,  56 => 15,  51 => 12,  48 => 11,  41 => 7,  37 => 6,  32 => 5,  29 => 4,);
    }
}
