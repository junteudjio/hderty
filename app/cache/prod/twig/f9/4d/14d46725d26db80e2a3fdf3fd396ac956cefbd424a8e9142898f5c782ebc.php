<?php

/* InnovGroupBundle:Group:consulterDocGroupe.html.twig */
class __TwigTemplate_f94d14d46725d26db80e2a3fdf3fd396ac956cefbd424a8e9142898f5c782ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'infoGroupe' => array($this, 'block_infoGroupe'),
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

    // line 7
    public function block_infoGroupe($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (((isset($context["user_is_member"]) ? $context["user_is_member"] : $this->getContext($context, "user_is_member")) == true)) {
            // line 9
            echo "            <div class=\"row\">               
    <div class=\"col-lg-7\" style=\"padding-right:0;\">
        <section class=\"panel\">
            <div class=\"panel-body\" style=\"padding:6px;\">
                <ul class=\"summary-list\" style=\"\">
                    <li>
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\">
                            <i class=\" icon-globe text-primary\"></i>
                                                  ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "nom"), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_voirMembres", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\" >
                            <i class=\"icon-group text-primary\"></i>
                                               ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.voir_membres", twig_length_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "membres"))), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-type=\"iframe\" id=\"fancyAjout\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_ajoutMembre", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
            echo "\" >
                              <i class=\" icon-user text-primary\"></i></i>
                              ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.form_ajout_membre_label"), "html", null, true);
            echo " </a>
                    </li>
                  </ul>
                    
            
            </div>
        </section>
          
            
                
    </div>
</div>
        ";
        }
        // line 42
        echo "   ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"col-lg-7\">
    <section class=\"panel\">
                          <header class=\"panel-heading\">
                              ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "nom"), "html", null, true);
        echo "
                              
                              ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar"), "html", null, true);
        echo " :<br>
                              <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("innovGroup_consulterDocGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "sort_mode" => "pertinence")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar_pertinence"), "html", null, true);
        echo " </a><br> 
                              <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("innovGroup_consulterDocGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "sort_mode" => "plus_recent")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar_plus_recent"), "html", null, true);
        echo " </a><br> 
                              <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("innovGroup_consulterDocGroupe", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "sort_mode" => "populaire")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.consulterDocGroupe_classerPar_populaire"), "html", null, true);
        echo " </a><br> 
                                
                              
                          </header>
                          <ul class=\"list-group\">
                              ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 59
            echo "                                  <li class=\"list-group-item\">
                                     <div class=\"panel-body\">
                                        <div>
                                            <i class=\"icon-file\"></i>
                                        </div>
                                        <br>
                                            <div class=\"task-thumb-details\" style=\"margin-left:50px;\">
                                            <h1 style=\"float:left;\">
                                           ";
            // line 67
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "     
                                                        ";
                // line 68
                $context["url"] = (("visionPublicExCo__" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")) . "*");
                echo "   
                                                      ";
                // line 69
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["similaires"]) ? $context["similaires"] : $this->getContext($context, "similaires")), $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 70
                    echo "                                                                
                                                                  ";
                    // line 71
                    $context["url"] = (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr")) . "*");
                    // line 72
                    echo "                                                              
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                                                <a id=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" class=\"visionPublic\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titre"), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\"></a>
                                            ";
            }
            // line 76
            echo "                                                    
                                                    
                                           ";
            // line 78
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "document"))) {
                echo "   
                                                    
                                                 ";
                // line 80
                $context["url"] = (("visionPublicDoc__" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")) . "*");
                echo " 
                                                    
                                                      ";
                // line 82
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["similaires"]) ? $context["similaires"] : $this->getContext($context, "similaires")), $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 83
                    echo "                                                    
                                                        
                                                                  ";
                    // line 85
                    $context["url"] = (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "idSolr")) . "*");
                    // line 86
                    echo "                                                           
                                                                
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                                  
                                                <a id=\"";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" class=\"visionPublic\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titre"), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\"></a>
                                           ";
            }
            // line 92
            echo "                                            
                                            
                                             </h1>
                                            
                                            
                                            </div> 
                                        
                                            <br><br><br>
                                       <div>
                                           <a href=\"#\">";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.jaime"), "html", null, true);
            echo "</a>&nbsp;.&nbsp;
                                           <a href=\"#\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.commenter"), "html", null, true);
            echo "</a>&nbsp;.&nbsp;
                                           <a href=\"#\" style=\"margin-right:160px;\">
                                            
                                            <i class=\"icon-thumbs-up btn-xs text-info\"></i>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "nbreJaime"), "html", null, true);
            echo "
                                           
                                       ";
            // line 107
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "   
                                            <i class=\"icon-comments btn-xs text-info\"></i>";
                // line 108
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "commentaires")), "html", null, true);
                echo "
                                       ";
            }
            // line 110
            echo "                                           </a>
                                           ";
            // line 111
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "document"))) {
                // line 112
                echo "                                                <a href=\"javascript:;\" id=\"";
                echo twig_escape_filter($this->env, ("favorisDoc_" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")), "html", null, true);
                echo "\" class=\"favoris\"> <i class=\"icon-star  text-warning\"></i></a>
                                           ";
            }
            // line 114
            echo "                                           ";
            if ((0 === strpos($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "toString"), "examCo"))) {
                echo "                                                
                                                <a href=\"javascript:;\" id=\"";
                // line 115
                echo twig_escape_filter($this->env, ("favorisExamCo_" . $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id")), "html", null, true);
                echo "\" class=\"favoris\"> <i class=\"icon-star  text-warning\"></i></a>
                                           ";
            }
            // line 116
            echo "     
                                                <!-- Tags here -->
                                        </div>    
                                    </div>

                                  </li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                          
                                 
                          </ul>
  </section>
            </div>
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:consulterDocGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 123,  281 => 116,  276 => 115,  271 => 114,  265 => 112,  263 => 111,  260 => 110,  255 => 108,  251 => 107,  246 => 105,  240 => 102,  236 => 101,  225 => 92,  216 => 90,  213 => 89,  205 => 86,  203 => 85,  199 => 83,  195 => 82,  190 => 80,  185 => 78,  181 => 76,  171 => 74,  164 => 72,  162 => 71,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  137 => 59,  133 => 58,  123 => 53,  117 => 52,  111 => 51,  107 => 50,  100 => 48,  95 => 45,  92 => 44,  88 => 42,  72 => 29,  67 => 27,  60 => 23,  55 => 21,  48 => 17,  43 => 15,  35 => 9,  32 => 8,  29 => 7,);
    }
}
