<?php

/* InnovUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_48c84aa9ccbf0f527ff3ca789ff1a73ddf1499535820c57d6997c941ddd98185 extends Twig_Template
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

<div class=\"col-lg-6\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Modifier Profile
                          </header>
                          <div class=\"panel-body\">
                              <form role=\"form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                                  <div class=\"form-group\">
                                      <label for=\"exampleInputEmail1\">prenom </label>
                                      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                 <div class=\"form-group\">
                                      <label for=\"exampleInputEmail1\">nom </label>
                                      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                  <div class=\"form-group\">
                                      <label for=\"exampleInputEmail1\">Email </label>
                                      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                  
                                  <div class=\"form-group\">
                                      <label for=\"exampleInputEmail1\">votre ecole </label>
                                      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecole"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                 
                                  <div class=\"form-group\">
                                      <label for=\"exampleInputFile\">Photo</label>
                                      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo"), 'widget');
        echo "
                                      <p class=\"help-block\"> pour que vos camarades puissent vous reconnaître aisement</p>
                                  </div>
                                  
                                   <div class=\"form-group\">
                                      <label for=\"exampleInputEmail1\"> veillez entrer votre mot de passe actuel </label>
                                      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                      
                                  <button type=\"submit\" class=\"btn btn-info\">Submit</button>
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                              </form>
                                  

                          </div>
                      </section>
                  </div>";
    }

    public function getTemplateName()
    {
        return "InnovUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  76 => 36,  67 => 30,  59 => 25,  51 => 20,  44 => 16,  37 => 12,  29 => 9,  19 => 1,  31 => 4,  28 => 3,);
    }
}
