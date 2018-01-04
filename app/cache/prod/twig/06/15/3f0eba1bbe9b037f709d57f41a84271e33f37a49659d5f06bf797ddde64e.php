<?php

/* InnovGroupBundle::layout.html.twig */
class __TwigTemplate_06153f0eba1bbe9b037f709d57f41a84271e33f37a49659d5f06bf797ddde64e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'infoGroupe' => array($this, 'block_infoGroupe'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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

    // line 5
    public function block_infoGroupe($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        echo "                    
         
<div class=\"row\">               
    <div class=\"col-lg-7\" style=\"padding-right:0;\">
        <section class=\"panel\">
            <div class=\"panel-body\" style=\"padding:6px;\">
                <ul class=\"summary-list\" style=\"\">
                    <li style=\"width:28%;\">
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
                    <li style=\"width:28%;\">
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
                    <li style=\"margin-left:28px;width:28%;\">
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

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "
";
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  100 => 49,  95 => 46,  92 => 45,  75 => 29,  70 => 27,  63 => 23,  58 => 21,  51 => 17,  46 => 15,  36 => 7,  33 => 6,  30 => 5,);
    }
}
