<?php

/* InnovUserBundle:Registration:register.html.twig */
class __TwigTemplate_efd3fc0fd5dfe5e501a70c210e71478d48f70005b84ea552149a0a9d5210a1ea extends Twig_Template
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
        echo "<!DOCTYPE html> 
<html lang=\"en\">
   <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\">
      <meta name=\"language\" content=\"en-US\">
      <meta name=\"description\" content=\"Enregistrement Hderty\">
      <meta name=\"viewport\" content=\"maximum-scale=1.0,width=device-width,initial-scale=1.0\">
      <title>H-Derty</title>
      <link rel=\"stylesheet\" href=\"https://d2k1ftgv7pobq7.cloudfront.net/css/039c30122fea58e277c9ac89c3d91ba8/core.css\">
      
     
   </head>
   <body class=\"account-page\">
   
      <div id=\"surface\" style=\"max-width:400px;\">
         <div class=\"account-header\"> <img alt=\"Hderty logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\"> </div>
         <div class=\"account-content clearfix\">
            <form style=\"margin:auto;float:none;\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\" class=\"primary-col clearfix js-emailpassword\" novalidate ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
               <h2 align=\"center\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.label"), "html", null, true);
        echo "</h2>
               <br>
               <label for=\"display-name-create\"> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.prenom"), "html", null, true);
        echo " </label>
               ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("type" => "text", "id" => "display-name-create", "tabindex" => "1", "placeholder" => $this->env->getExtension('translator')->trans("innov.register_and_login.prenom_place_h"))));
        echo "
               <p class=\"hide error js-email-as-name\" style=\"padding-bottom: 16px;\">  ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'errors');
        echo " </p>

               <label for=\"display-name-create\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.nom"), "html", null, true);
        echo "</label>
               ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("type" => "text", "id" => "display-name-create", "tabindex" => "1", "placeholder" => $this->env->getExtension('translator')->trans("innov.register_and_login.nom_place_h"))));
        echo "
               <p class=\"hide error js-email-as-name\" style=\"padding-bottom: 16px;\">  ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo " </p>

               <label for=\"email-create\"> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.email"), "html", null, true);
        echo " </label> 
               ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("type" => "email", "id" => "email-create", "value" => "", "autocomplete" => "off", "autocorrect" => "off", "spellcheck" => "false", "autocapitalize" => "off", "placeholder" => $this->env->getExtension('translator')->trans("innov.register_and_login.email_place_h"))));
        echo "
               <p class=\"hide error js-email-as-name\" style=\"padding-bottom: 16px;\">  ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo " </p>

               
               <label for=\"password-create\"> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.password"), "html", null, true);
        echo " </label>
               ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("type" => "password", "id" => "password-create")));
        echo "
               <p class=\"hide error js-email-as-name\" style=\"padding-bottom: 16px;\">  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo " </p>
   
                <label for=\"password-create\"> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.confirm_password"), "html", null, true);
        echo " </label>
               ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("type" => "password", "id" => "password-create")));
        echo "               
               <p class=\"hide error js-email-as-name\" style=\"padding-bottom: 16px;\">  ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo " </p>

               <input type=\"submit\" class=\"primary\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.creer_btn"), "html", null, true);
        echo "\">  
               
               <p class=\"quiet clear\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.deja_un_compte"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("InnovGroup_index");
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.accueil.login"), "html", null, true);
        echo "</strong></a> </p>
               <input type=\"hidden\" name=\"returnUrl\" value=\"/\"> <input type=\"hidden\" name=\"source\" value=\"\"> 
               ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>

         </div>
         ";
        // line 53
        echo "      </div>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50958847-1', 'h-derty.com');
  ga('send', 'pageview');

</script>
   </body>
</html>";
    }

    public function getTemplateName()
    {
        return "InnovUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  133 => 47,  124 => 45,  119 => 43,  114 => 41,  110 => 40,  106 => 39,  101 => 37,  97 => 36,  93 => 35,  87 => 32,  83 => 31,  79 => 30,  74 => 28,  70 => 27,  66 => 26,  61 => 24,  57 => 23,  53 => 22,  48 => 20,  42 => 19,  37 => 17,  19 => 1,);
    }
}
