<?php

/* InnovGroupBundle:Group:listeExamCollection.html.twig */
class __TwigTemplate_f2a4f88050f482459506db3a1088caa1c19cadaba5eb40e0aaee44592aaa6ad6 extends Twig_Template
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

  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["examCollections"]) ? $context["examCollections"] : $this->getContext($context, "examCollections"))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["examCo"]) {
            // line 4
            echo "
                            
                            <div class=\"col-lg-7\" style=\"padding-right:0;\">
                                <!--user info table start-->
                              
                                <section class=\"panel\" >
                                    <div class=\"panel-body\">
                                        <div>
                                        <a style=\"cursor:pointer;\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_voirProfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "id"))), "html", null, true);
            echo " \"  class=\"task-thumb\">
                                                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "photo"), "url"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "photo"), "alt"), "html", null, true);
            echo "\" height=\"29\" width=\"29\"/>         
                                                 ";
            // line 14
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "nom") . "  ") . $this->getAttribute($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "auteurExamCollection"), "prenom")), "html", null, true);
            echo "
                                        </a>
                                            <span  style=\"position:absolute;right:15px;\">
                                                 ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "dateCreation"), "d/m/Y - H:i:s"), "html", null, true);
            echo "
                                             ";
            // line 18
            if ($this->env->getExtension('security')->isGranted("DELETE", (isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")))) {
                // line 19
                echo "                                                <a class=\"poubelleGroupe tooltip1\" href=\"javascript:;\" id=\"";
                echo twig_escape_filter($this->env, ("deleteExamCo_" . $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id")), "html", null, true);
                echo " \" style=\"margin-left:13px;cursor:pointer;\"> <i class=\"icon-trash\"></i>
                                                    <span>Supprimer Ce post</span></a>
                                            ";
            }
            // line 22
            echo "                                            </span> 
                                        </div>
                                        <br/>
                                            <div class=\"task-thumb-details\" style=\"margin-left:50px;\">
                                            <h1 style=\"float:left;\"><a style=\"cursor:pointer;\" id=\"";
            // line 26
            echo twig_escape_filter($this->env, ("visionExCo_" . $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id")), "html", null, true);
            echo "\" class=\"visionExCo tooltip1\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "titre"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/voir.png"), "html", null, true);
            echo "\" width=\"18\" height=\"18\" id=\"loupe\"/>
                                                ";
            // line 27
            $context["doc"] = (isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo"));
            // line 28
            echo "                                               ";
            $this->env->loadTemplate("InnovGroupBundle:Group:renderSpanDocument.html.twig")->display($context);
            echo " 

                                                </a></h1>
                                            
                                            
                                            </div> 
                                        
                                            <br/><br/><br/>
                                           
                                           
                                           
                                       <div>
                                                                                                                                                                                                                 
                                           <a title=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_commenter_doc", twig_length_filter($this->env, $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "commentaires"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "commentaires")), "html", null, true);
            echo " <i class=\"icon-comments\"></i></a>&nbsp;&nbsp;
                                           ";
            // line 42
            echo "&nbsp;&nbsp;
                                            <a  title=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.title_voir_doc", $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "nbreVue")), "html", null, true);
            echo "\" style=\"margin-right:90px;\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("innov.groupe.nbre_vue", $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "nbreVue")), "html", null, true);
            echo " </a>&nbsp;&nbsp;
                                                                                
                                           
                                         ";
            // line 46
            echo "&nbsp;&nbsp;
                                           
                                           <a   style=\"cursor:pointer;position:absolute;right:18px;\" id=\"";
            // line 48
            echo twig_escape_filter($this->env, ("favorisExamCo_" . $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id")), "html", null, true);
            echo "\" class=\"favoris tooltip1\" > <i class=\"icon-star  text-warning\" style=\"font-size:17px;\" ></i>
                                               <span>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.title_favoris_doc"), "html", null, true);
            echo "</span>
                                           </a>

                                           <!-- Tags here -->
                                        </div>    
                                    </div>
                                    <table class=\"table table-hover personal-task\">
                                        <tbody id=\"";
            // line 56
            echo twig_escape_filter($this->env, ("essaiCollection_" . $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id")), "html", null, true);
            echo "\">
                                             ";
            // line 57
            $this->env->loadTemplate("InnovGroupBundle:Group:listeEssaiCollection.html.twig")->display($context);
            echo " 
                                            
                                        </tbody>
                                    </table>
                                    <hr style=\"margin:0;\">
                                    
      <div class=\"nouvelleCorrection\" id=\"";
            // line 63
            echo twig_escape_filter($this->env, ("col_" . $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id")), "html", null, true);
            echo "\" style=\"padding:13px;\">
        <span class=\"affiche\" style=\"position:absolute;left:130px;\">
            <a  style=\"padding:0;\" data-fancybox-type=\"iframe\" class=\"btn green\" id=\"fancy-upload2\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_test3", array("id" => $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id"))), "html", null, true);
            echo "\">
                <i class=\"icon-camera text-primary\" style=\"font-size:22px;\"></i>

            </a>
            
        </span>
          <span class=\"affiche\" style=\"position:absolute;left:190px;\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.partager_essai"), "html", null, true);
            echo "</span>
        
        
        <span class=\"affiche\" style=\"position:relative;left:350px;\">
            <a   style=\"padding:0;\" class=\"btn green\" >

                <i class=\"icon-home text-default open_perso2\" style=\"font-size:22px;\" id=\" ";
            // line 77
            echo twig_escape_filter($this->env, ("open_" . $this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "id")), "html", null, true);
            echo "\"></i>   

            </a> 

        </span>
          <p align=\"center\" class=\"nomDocument\" style=\"display:none\"></p>
       
        <span class=\"nodeTemp2\" style=\"display:none;position:relative;left:240px;\"></span> 
        <span class=\"message\" style=\"display:none;position:relative;left:100px;\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.partager_clic"), "html", null, true);
            echo "</span> 
        
        

    </div> 
                                    
                                </section>
                             
                            </div>
                            <div class=\"col-lg-3\" style=\"padding-left:0;\">
                                            <ul class=\"tags\">
                                                 ";
            // line 96
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["examCo"]) ? $context["examCo"] : $this->getContext($context, "examCo")), "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 97
                echo "                                                         <li><a  class=\"tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "text"), "html", null, true);
                echo "</a></li>    
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                                             </ul>
                                        </div>
                            

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examCo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "<style>
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
        return "InnovGroupBundle:Group:listeExamCollection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 104,  221 => 99,  212 => 97,  208 => 96,  194 => 85,  183 => 77,  174 => 71,  165 => 65,  160 => 63,  151 => 57,  147 => 56,  137 => 49,  133 => 48,  129 => 46,  121 => 43,  118 => 42,  112 => 41,  95 => 28,  93 => 27,  85 => 26,  79 => 22,  72 => 19,  70 => 18,  66 => 17,  60 => 14,  54 => 13,  50 => 12,  40 => 4,  23 => 3,  19 => 1,);
    }
}
