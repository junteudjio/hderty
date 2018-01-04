<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_640ecc771a2ba218b48338b5db165e9c562162486073fe5c32a2ee45ef8d8e3d extends Twig_Template
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
        // line 2
        echo "
    <div class=\"col-lg-6\">
                              <!--widget start-->
                              <section class=\"panel\">
                                  <div class=\"twt-feed blue-bg\">
                                      <h1>";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom") . "  ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom")), "html", null, true);
        echo "</h1>
                                      <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
                                      <a href=\"#\">
                                          <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo"), "url"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo"), "alt"), "html", null, true);
        echo "\" height=\"29\" width=\"29\">
                                      </a>
                                  </div>
                                  <div class=\"weather-category twt-category\">
                                      <ul>
                                          <li class=\"active\">
                                              <h5>";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mesGroupes")), "html", null, true);
        echo "</h5>
                                              Groupes
                                          </li>
                                          
                                          ";
        // line 20
        $context["nbre_doc_partages"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mesExamCollections")) + twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mesEssaisCollections")));
        // line 22
        echo "                                          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dossierPerso"), "sousDossiersPerso"));
        foreach ($context['_seq'] as $context["_key"] => $context["sousDossierPerso"]) {
            // line 23
            echo "                                                ";
            $context["nbre_doc_partages"] = ((isset($context["nbre_doc_partages"]) ? $context["nbre_doc_partages"] : $this->getContext($context, "nbre_doc_partages")) + twig_length_filter($this->env, $this->getAttribute((isset($context["sousDossierPerso"]) ? $context["sousDossierPerso"] : $this->getContext($context, "sousDossierPerso")), "document")));
            // line 24
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousDossierPerso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                                          <li>
                                              <h5>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbre_doc_partages"]) ? $context["nbre_doc_partages"] : $this->getContext($context, "nbre_doc_partages")), "html", null, true);
        echo "</h5>
                                              Documents Partages
                                          </li>
                                          
                                          
                                          <li>
                                              <h5>";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "notifsRecus")), "html", null, true);
        echo "</h5>
                                              Notifications
                                          </li>
                                      </ul>
                                  </div>
                                
                                
                                 <div class=\"twt-write col-sm-12\">
                                     <p>  Etudie à  
                                      ";
        // line 41
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ecole")) {
            // line 42
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ecole"), "nom"), "html", null, true);
            echo "
                                      ";
        } else {
            // line 44
            echo "                                            ... pas  mentionne ...
                                      ";
        }
        // line 46
        echo "                                         </p>
                                  </div>
                                 
                                      
                                 ";
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
            // line 51
            echo "                                      &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                      <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">  <button  class=\"btn btn-space btn-info\" type=\"button\">
                                          
                                          modifier
                                      </button>
                                     </a>
                                  
                               
                                     ";
        }
        // line 59
        echo "                                
                              </section>
                              <!--widget end-->
                          </div>
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  116 => 52,  113 => 51,  111 => 50,  105 => 46,  101 => 44,  95 => 42,  93 => 41,  81 => 32,  72 => 26,  69 => 25,  63 => 24,  60 => 23,  55 => 22,  46 => 16,  35 => 10,  26 => 7,  19 => 2,  64 => 27,  53 => 20,  48 => 18,  44 => 17,  41 => 14,  33 => 6,  30 => 8,  31 => 4,  28 => 3,);
    }
}
