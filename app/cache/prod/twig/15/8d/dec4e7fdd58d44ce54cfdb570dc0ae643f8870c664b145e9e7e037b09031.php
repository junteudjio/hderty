<?php

/* InnovGroupBundle:Group:entrerGroupe.html.twig */
class __TwigTemplate_158ddec4e7fdd58d44ce54cfdb570dc0ae643f8870c664b145e9e7e037b09031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovGroupBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_content($context, array $blocks = array())
    {
        echo "    
                       
                   <!-- Upload exam -->     
                   <div class=\"row\" >
                   
                       <div class='col-lg-7' style=\"padding-right:0;\">
                    <section class=\"panel\">
                          <header class=\"panel-heading\">
                              <p align=\"center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.partager_ennonce"), "html", null, true);
        echo "</p>
                          </header>
                          <div id=\"nouveauExam\" class=\"panel-body\" style=\"padding:7px;\">
                              <div class=\"enonceShow\" style=\"float:left;padding:0;\">
                                  
                               <a  style=\"padding:0;margin-left:110px;margin-right:210px;\" data-fancybox-type=\"iframe\" class=\"btn green tooltip1 yellow-tooltip\" id=\"fancy-upload2\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_test2", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"))), "html", null, true);
        echo "\">
                                   <i class=\" icon-camera text-primary\" style=\"font-size:33px;\"></i>
                                   <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.ajout_doc_upload"), "html", null, true);
        echo "</span>
                                      
                                </a>
                                  
                              </div>
                                  <p id=\"nodeTemp\" align=\"center\" style=\"display:none\"></p> 
                                  <p id=\"enonceCache\" align=\"center\" style=\"display:none\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.partager_clic"), "html", null, true);
        echo "</p>
                              <div class=\"enonceShow\" style=\"display:inline-block;padding:0;\">
                               <a  class=\"btn green tooltip1 yellow-tooltip\" style=\"padding:0;\" >
                                  <i class=\" icon-home text-default\" style=\"font-size:36px;\" id=\"open_perso\"></i>
                                  <span>";
        // line 29
        echo $this->env->getExtension('translator')->trans("innov.groupe.ajout_doc_espace_perso");
        echo "</span>
                                </a> 
                                   
                              </div>                              

                          </div>
                      </section>   
                    </div>
                       <div id=\"fleche\" class=\"col-lg-3\" style=\"margin-top:20px;padding-left:0;display:none;\">
                           <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fleche.png"), "html", null, true);
        echo "\" width=\"150\" height=\"60\" style=\"-moz-transform: rotate(-10deg) ;-webkit-transform: rotate(-10deg) ;\"/>
                   </div>
                   
                    
                       
                   </div>
                   <!-- End upload document -->
                       
                        <br/>
                        
                        <div class=\"row\" id=\"examCollection\">
                            
                       
                          
                            <!-- Hidden form -->
                            
                            <!-- end hidden form -->
                            
                             ";
        // line 56
        $this->env->loadTemplate("InnovGroupBundle:Group:listeExamCollection.html.twig")->display($context);
        echo " 

                        </div>
                        
                        ";
        // line 60
        $context["nbre_examCo_total"] = twig_length_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "examCollections"));
        // line 61
        echo "                       
                    ";
        // line 62
        if (((isset($context["nbre_examCo_total"]) ? $context["nbre_examCo_total"] : $this->getContext($context, "nbre_examCo_total")) > 10)) {
            // line 63
            echo "                       ";
            $context["nbre_pages"] = ((isset($context["nbre_examCo_total"]) ? $context["nbre_examCo_total"] : $this->getContext($context, "nbre_examCo_total")) / 10);
            // line 64
            echo "                       ";
            $context["nbre_pages"] = twig_round((isset($context["nbre_pages"]) ? $context["nbre_pages"] : $this->getContext($context, "nbre_pages")), 0, "ceil");
            // line 65
            echo "                        
                        <div class=\"col-lg-7\" style=\"padding-right:0;\">
                       <section>
                               <div>
                                          <ul class=\"pagination pagination-sm\">
                                             ";
            // line 70
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
                // line 71
                echo "                                                ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 72
                    echo "                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe2", array("id_groupe" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "offset" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                    echo "\">«</a></li>
                                                ";
                } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 1) && (!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")))) {
                    // line 74
                    echo "                                                     <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe2", array("id_groupe" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "offset" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                    echo "</a></li>
                                                ";
                } else {
                    // line 76
                    echo "                                                     <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_entrerGroupe2", array("id_groupe" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "offset" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                    echo "\">»</a></li>
                                                ";
                }
                // line 78
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
            // line 80
            echo "                                          </ul>
                                </div>
                       </section>
                        </div>
                     ";
        }
        // line 85
        echo "                                ";
    }

    // line 87
    public function block_javascript($context, array $blocks = array())
    {
        // line 88
        echo "                        <style>
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
        // line 157
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
         \$(function() {
         var id_groupe = ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "html", null, true);
        echo "; 
         
    
     });   
      
</script>

";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:entrerGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 160,  270 => 157,  199 => 88,  196 => 87,  192 => 85,  185 => 80,  170 => 78,  164 => 76,  156 => 74,  150 => 72,  147 => 71,  130 => 70,  123 => 65,  120 => 64,  117 => 63,  115 => 62,  112 => 61,  110 => 60,  103 => 56,  82 => 38,  70 => 29,  63 => 25,  54 => 19,  49 => 17,  41 => 12,  29 => 4,);
    }
}
