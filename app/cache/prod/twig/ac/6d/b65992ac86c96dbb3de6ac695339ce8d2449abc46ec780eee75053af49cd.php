<?php

/* InnovGroupBundle:Group:allGroups.html.twig */
class __TwigTemplate_ac6db65992ac86c96dbb3de6ac695339ce8d2449abc46ec780eee75053af49cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"col-lg-7\">
    
                          <header class=\"panel-heading\">
                              ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.content.listesDesGroupesTitre"), "html", null, true);
        echo "
                        
                          </header>
                          ";
        // line 13
        $context["groupes"] = (isset($context["allGroups"]) ? $context["allGroups"] : $this->getContext($context, "allGroups"));
        // line 14
        echo "                        ";
        $this->env->loadTemplate("InnovGroupBundle:Group:renderGroupes.html.twig")->display($context);
        echo " 
            
                                
                         

            </div>
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:allGroups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  42 => 13,  36 => 10,  31 => 7,  28 => 6,);
    }
}
