<?php

/* InnovUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_b20149b32fbbeb834ab45670ba400c8090e5e84cd3e02c9c60e884f23db70a93 extends Twig_Template
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
        <section class=\"panel\">
            <header class=\"panel-heading\">
                Modifier Votre Mot de Passe
            </header>
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"panel-body\">
                <form role=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Mot de passe Actuel</label>
                             ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Nouveau Mot De passe</label>
                                      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                   <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Veillez confirmez le nouveau mot de Passe</label>
                                      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                        
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <button type=\"submit\" class=\"btn btn-info\">Submit</button>
                </form>

            </div>
        </section>
    </div>";
    }

    public function getTemplateName()
    {
        return "InnovUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  57 => 24,  50 => 20,  43 => 16,  35 => 13,  30 => 11,  19 => 2,  31 => 4,  28 => 3,);
    }
}
