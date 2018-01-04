<?php

/* InnovUserBundle:Security:login.html.twig */
class __TwigTemplate_e4eee151ed5b4d5a8839a50e4ad9ac4f2cc781b8ea7afdf0d8bed9707281df7a extends Twig_Template
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
        echo "\t
 <div class=\"pop-over clearfix fancy-scrollbar\" id=\"formLogin\" style=\"display: none;right:0; max-height: 575px; top: 44px;\">
         <div class=\"header clearfix\"> <a class=\"back-btn js-back-view\" href=\"#\" style=\"display: none;\"> <span class=\"icon-sm icon-leftarrow\"></span> </a> <span class=\"header-title\">connexion</span> <a class=\"close-btn js-close-popover\" id=\"hideLogin\" href=\"#\"> <span class=\"icon-sm icon-remove\"></span> </a> </div>
         <div class=\"content clearfix\" style=\"\">
            <div class=\"login-popover\">
               <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" novalidate=\"\">
                 <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                 <span>
                                ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                                 ";
        }
        // line 11
        echo "\t\t\t
                 </span>
                  <label for=\"email-login\"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.email"), "html", null, true);
        echo " </label> <input type=\"email\" name=\"_username\" id=\"email-login\" value=\"\" class=\"js-autofocus\" autocomplete=\"off\" autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"off\">
                  <label for=\"password-login\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.password"), "html", null, true);
        echo " </label> <input type=\"password\" name=\"_password\" id=\"password-login\"> <input type=\"submit\" class=\"primary wide js-password-login\" value=\"Connexion\"> <br/>
                  <p class=\"quiet\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.register_and_login.nouveau"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.accueil.creer_compte"), "html", null, true);
        echo "</strong></a> </p>
                  <input type=\"hidden\" name=\"returnUrl\" value=\"/\"> 
               </form>
            </div>
         </div>
</div>";
    }

    public function getTemplateName()
    {
        return "InnovUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  51 => 14,  47 => 13,  43 => 11,  37 => 10,  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
