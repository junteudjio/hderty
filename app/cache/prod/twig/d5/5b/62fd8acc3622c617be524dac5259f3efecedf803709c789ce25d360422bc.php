<?php

/* InnovGroupBundle:Group:creerGroupe_modal.html.twig */
class __TwigTemplate_d55b62fd8acc3622c617be524dac5259f3efecedf803709c789ce25d360422bc extends Twig_Template
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
        echo "<html lang=\"en\" >
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset=\"utf-8\"/>
        <title>H-Derty Login</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
        <meta content=\"\" name=\"description\"/>
        <meta content=\"\" name=\"author\"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END GLOBAL MANDATORY STYLES -->

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style-metronic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2-metronic.css"), "html", null, true);
        echo "\"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2-metronic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- END THEME STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    </head>

    <body> 

        

            <div class=\"page-content\" style=\"background-color:ghostwhite\">
                <div class=\"row\">
                       <div class=\"col-md-12\">
            

                <i class=\"fa-group\" style=\"font-size:20px;\"></i><h4 align=\"center\"> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.form_creer_header"), "html", null, true);
        echo "</h4>
                
                <hr>
            <br>
            <form action=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("InnovGroup_creerGroup");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
 
                    <div class=\"form-group\">
                        <h4> ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("innov.groupe.form_nom_groupe_label")) ? array() : array("label" => $_label_)));
        echo "</h4>
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("type" => "text", "class" => "form-control")));
        echo "
                    <span class=\"help-block\">
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
                    </span>
                    </div>

                     <div class=\"form-group\">   
                        <h4>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "membres"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("innov.groupe.form_ajout_membre_label")) ? array() : array("label" => $_label_)));
        echo "</h4>
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "membres"), 'widget', array("attr" => array("id" => "innov_groupbundle_ajout_membres", "class" => "form-control select2", "placeholder" => $this->env->getExtension('translator')->trans("innov.groupe.ajout_membre_placeholder"))));
        echo "
                         <span class=\"help-block\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "membres"), 'errors');
        echo "
                         </span>
                    </div>




                 ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



                
                <div>
                    <button type=\"button\" class=\"btn btn-primary\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.form_fermer"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-success\" id=\"destroy\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.creer_action"), "html", null, true);
        echo " </button>
                </div>
            </form>        
        </div>
                </div>
            </div>

            <br/>
            <br/> <br/>
            <br/>
        



        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--[if lt IE 9]>
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
            <![endif]-->


        <![endif]-->
        <!-- END:File Upload Plugin JS files-->

        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>



        <!-- plugins pour le multi select -->
        <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/core/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/components-dropdowns.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/components-form-tools.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fuelux/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery.input-ip-address-control-1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-touchspin/bootstrap.touchspin.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/typeahead.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script>
            jQuery(document).ready(function() {

                ComponentsDropdowns.init();
                
        ";
        // line 139
        if (array_key_exists("groupe", $context)) {
            // line 140
            echo "             parent.jQuery.fancybox.close();   
        ";
        }
        // line 142
        echo "                
                
            });
        </script>


    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:creerGroupe_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 142,  316 => 140,  314 => 139,  304 => 132,  300 => 131,  296 => 130,  292 => 129,  288 => 128,  284 => 127,  280 => 126,  276 => 125,  272 => 124,  268 => 123,  264 => 122,  260 => 121,  256 => 120,  252 => 119,  248 => 118,  243 => 116,  239 => 115,  235 => 114,  227 => 109,  223 => 108,  213 => 101,  209 => 100,  203 => 97,  199 => 96,  195 => 95,  178 => 81,  174 => 80,  165 => 74,  155 => 67,  150 => 65,  146 => 64,  138 => 59,  133 => 57,  129 => 56,  121 => 53,  114 => 49,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  78 => 28,  74 => 27,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
