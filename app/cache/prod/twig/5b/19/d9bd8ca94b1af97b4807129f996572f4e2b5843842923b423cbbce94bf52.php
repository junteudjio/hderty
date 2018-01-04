<?php

/* ::layout.html.twig */
class __TwigTemplate_5b19d9bd8ca94b1af97b4807129f996572f4e2b5843842923b423cbbce94bf52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cssFileUpload' => array($this, 'block_cssFileUpload'),
            'cssTree_and_file' => array($this, 'block_cssTree_and_file'),
            'flatlab' => array($this, 'block_flatlab'),
            'cssModal' => array($this, 'block_cssModal'),
            'searchForm' => array($this, 'block_searchForm'),
            'sidebar' => array($this, 'block_sidebar'),
            'espacePerso' => array($this, 'block_espacePerso'),
            'infoGroupe' => array($this, 'block_infoGroupe'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
            'jsFileUpload' => array($this, 'block_jsFileUpload'),
            'jsModal' => array($this, 'block_jsModal'),
            'fileUp_and_tree' => array($this, 'block_fileUp_and_tree'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"ENSA TANGER\">
<meta name=\"keyword\" content=\"hderty, examen, document, social, clichets mobile, groupe, recherche documents, corrigés\">
<link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/favicon.png"), "html", null, true);
        echo "\">

<title>Hderty</title>
<script>
if ( (navigator.userAgent.indexOf('Android') != -1) ) {
        window.history.go(-2);
    } 
    </script>
<script>
 parent.jQuery.fancybox.close();
 
</script>

<!--  DEBUT BOCK METRONIC -->
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN SEARCH AUTO COMPLETION STYLE  -->
<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/typeahead.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- END SEARCH AUTO COMPLETION STYLE -->

<!-- BEGIN THEME STYLES -->
";
        // line 36
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /> 
";
        // line 38
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        // line 42
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- END THEME STYLES -->




";
        // line 58
        echo "


";
        // line 61
        $this->displayBlock('cssFileUpload', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('cssTree_and_file', $context, $blocks);
        // line 71
        echo "

<link href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/helpers/jquery.fancybox-buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- FIN BLOCK METRONIC -->


";
        // line 80
        $this->displayBlock('flatlab', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('cssModal', $context, $blocks);
        // line 96
        echo " 

<!-- Multi select -->
<link href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2-metronic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- End multiselect -->
<style>
.tags {
list-style: none;
margin: 0;
overflow: hidden; 
padding: 0;
}



.tag {
background: #fcb322;
border-radius: 3px 0 0 3px;
color: white;
display: inline-block;
height: 26px;
line-height: 26px;
padding: 0 20px 0 23px;
position: relative;
margin: 0 10px 10px 0;
text-decoration: none;
-webkit-transition: color 0.2s;
}

.tag::before {
background: #f1f2f7;
border-radius: 10px;
box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
content: '';
height: 6px;
left: 10px;
position: absolute;
width: 6px;
top: 10px;
}

.tag::after {
background: #f1f2f7;
border-bottom: 13px solid transparent;
border-left: 10px solid #fcb322;
border-top: 13px solid transparent;
content: '';
position: absolute;
right: 0;
top: 0;
}

.tag:hover {
background-color: crimson;
color: white;
}

.tag:hover::after {
border-left-color: crimson; 
}
</style>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->
</head>

<body>
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class=\"container\">
<section id=\"container\" class=\"\">
<!--header start-->
<header class=\"header white-bg\">
<div class=\"container\">
<div class=\"sidebar-toggle-box\">
    <div data-original-title=\"Toggle Navigation\" data-placement=\"right\" class=\"tooltips\"></div>
</div>
<!--logo start-->
<a href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("InnovGroup_accueil");
        echo "\" class=\"logo\" style=\"margin-top:5px;margin-bottom:5px;\" ><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hderty.png"), "html", null, true);
        echo "\" width=\"100\" height=\"35\"/><span style=\"color:white;\"></span></a>
<!--logo end-->
<div class=\"nav notify-row\" id=\"top_menu\">
    <!--  notification start -->
";
        // line 190
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 191
            echo "    <ul class=\"nav top-menu\">
       
            <!-- notification dropdown start-->
               ";
            // line 194
            $this->env->loadTemplate("InnovGroupBundle:Group:notifications.html.twig")->display($context);
            // line 195
            echo "            <!-- notification dropdown end -->


        </ul>

";
        }
        // line 201
        echo "    </div>
    <div class=\"top-nav\">
        ";
        // line 204
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 205
            echo "
        <ul class=\"nav pull-left top-menu\" style=\"\">
            <li style=\"width:240%;\" >
                ";
            // line 208
            $this->displayBlock('searchForm', $context, $blocks);
            // line 211
            echo "            </li>
        </ul>
          ";
        }
        // line 214
        echo "        </div>
        <div class=\"top-nav\" >

            <ul class=\"nav pull-right top-menu\">

            ";
        // line 219
        $context["routeActuelle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "all"), "_route", array(), "array");
        // line 220
        echo "            ";
        $context["routeParams"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "all"), "_route_params", array(), "array");
        // line 221
        echo "
            ";
        // line 222
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "all", array(), "any", false, true), "_locale", array(), "array", true, true)) {
            // line 223
            echo "                 ";
            $context["localeActuelle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "all"), "_locale", array(), "array");
            // line 224
            echo "
            ";
        } else {
            // line 226
            echo "
                ";
            // line 227
            $context["localeActuelle"] = "fr";
            // line 228
            echo "            ";
        }
        // line 229
        echo "                <li class=\"dropdown language\">
                    <a data-close-others=\"true\" data-hover=\"dropdown\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                  ";
        // line 231
        if (((isset($context["localeActuelle"]) ? $context["localeActuelle"] : $this->getContext($context, "localeActuelle")) == "fr")) {
            // line 232
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fr.png"), "html", null, true);
            echo "\" alt=\"langue française\">
                            <span class=\"username\">fr</span>
                            <b class=\"caret\"></b>
                  ";
        } elseif (((isset($context["localeActuelle"]) ? $context["localeActuelle"] : $this->getContext($context, "localeActuelle")) == "en")) {
            // line 236
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/en.png"), "html", null, true);
            echo "\" alt=\"english language\">
                            <span class=\"username\">en</span>
                            <b class=\"caret\"></b> 
                  ";
        } else {
            // line 240
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ma.png"), "html", null, true);
            echo "\" alt=\"arabia\">
                            <span class=\"username\">ar</span>
                            <b class=\"caret\"></b>
                  ";
        }
        // line 243
        echo "                                             
                        </a>
                        <ul class=\"dropdown-menu\">
                  ";
        // line 247
        echo "
                   ";
        // line 248
        $context["old_route_params"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "all"), "_route_params", array(), "array");
        echo "  
                   ";
        // line 249
        $context["route_params_en"] = array("_locale" => "en");
        echo " 
                   ";
        // line 250
        $context["route_params_ar"] = array("_locale" => "ar");
        echo "                                            
                   ";
        // line 251
        $context["route_params_fr"] = array("_locale" => "fr");
        echo "                                            

                  ";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["old_route_params"]) ? $context["old_route_params"] : $this->getContext($context, "old_route_params")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 254
            echo "                        ";
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != "_locale")) {
                // line 255
                echo "                         ";
                $context["route_params_fr"] = twig_array_merge((isset($context["route_params_fr"]) ? $context["route_params_fr"] : $this->getContext($context, "route_params_fr")), array((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))));
                echo "   
                          ";
                // line 256
                $context["route_params_en"] = twig_array_merge((isset($context["route_params_en"]) ? $context["route_params_en"] : $this->getContext($context, "route_params_en")), array((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))));
                echo "   
                          ";
                // line 257
                $context["route_params_ar"] = twig_array_merge((isset($context["route_params_ar"]) ? $context["route_params_ar"] : $this->getContext($context, "route_params_ar")), array((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))));
                echo "   
                        ";
            }
            // line 259
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                  ";
        echo "    

                                <li><a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["routeActuelle"]) ? $context["routeActuelle"] : $this->getContext($context, "routeActuelle")), (isset($context["route_params_fr"]) ? $context["route_params_fr"] : $this->getContext($context, "route_params_fr"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fr.png"), "html", null, true);
        echo "\" alt=\"\"> Français</a></li>
                                <li><a href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["routeActuelle"]) ? $context["routeActuelle"] : $this->getContext($context, "routeActuelle")), (isset($context["route_params_en"]) ? $context["route_params_en"] : $this->getContext($context, "route_params_en"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/en.png"), "html", null, true);
        echo "\" alt=\"\"> English</a></li>
                                <li><a href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["routeActuelle"]) ? $context["routeActuelle"] : $this->getContext($context, "routeActuelle")), (isset($context["route_params_ar"]) ? $context["route_params_ar"] : $this->getContext($context, "route_params_ar"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ma.png"), "html", null, true);
        echo "\" alt=\"\"> Arabia</a></li>
                            </ul>
                        </li>


        ";
        // line 269
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 270
            echo "
                        <!-- user login dropdown start-->
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" href=\"#\">
                                <img src=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photo"), "url"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photo"), "alt"), "html", null, true);
            echo "\" height=\"29\" width=\"29\">
                                     <span class=\"username\">";
            // line 275
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "prenom") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nom")), "html", null, true);
            echo "</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li>
                                    <a href=\"javascript:;\" id=\"trigger_fullscreen\">
                                        <i class=\"fa fa-arrows\"></i>";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.navbar.plein_ecran"), "html", null, true);
            echo "
                                    </a>
                                </li>
                                <li><a href=\"";
            // line 285
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><i class=\" icon-user\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.navbar.profil"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 286
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><i class=\"icon-key\" ></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.navbar.securite"), "html", null, true);
            echo " </a></li>
                                <li><a style=\"background:#00c6d4;\" href=\"";
            // line 287
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"icon-off\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.navbar.deconnexion"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
         ";
        }
        // line 292
        echo "                    </ul>

                </div>
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
";
        // line 299
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 300
            $this->displayBlock('sidebar', $context, $blocks);
        }
        // line 343
        echo "                  <!--sidebar end-->
        <!--main content start-->
        <section id=\"main-content\">
            <section class=\"wrapper site-min-height\">
                <!-- page start-->

";
        // line 349
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 350
            echo "
";
            // line 351
            $this->displayBlock('espacePerso', $context, $blocks);
        }
        // line 404
        $this->displayBlock('infoGroupe', $context, $blocks);
        // line 406
        echo "

";
        // line 408
        $this->displayBlock('content', $context, $blocks);
        // line 410
        echo "





                                 <!-- page end-->
                             </section>
                         </section>
                         <!--main content end-->
                         <!--footer start-->
                         <footer class=\"site-footer\">
                             <div class=\"text-center\">
                                 2014 &copy; H-derty.
                                 <a href=\"#\" class=\"go-top\">
                                     <i class=\"icon-angle-up\"></i>
                                 </a>
                             </div>
                         </footer>
                         <!--footer end-->
                     </section>
                </div>

                <!-- js placed at the end of the document so the pages load faster -->
                <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/respond.min.js"), "html", null, true);
        echo "\" ></script>

                <!--common script for all pages-->


";
        // line 441
        $this->displayBlock('javascript', $context, $blocks);
        // line 459
        echo "                <!-- END JAVASCRIPTS -->

";
        // line 461
        $this->displayBlock('jsFileUpload', $context, $blocks);
        // line 507
        echo " ";
        $this->displayBlock('jsModal', $context, $blocks);
        // line 524
        echo " ";
        $this->displayBlock('fileUp_and_tree', $context, $blocks);
        // line 540
        echo "
              <script>
                    jQuery(document).ready(function() {
                        App.init();
                        UIExtendedModals.init(); // ça c'est pour le modal
                        UITree.init();
                        ComponentsDropdowns.init();
                        visionner();

                        // ça c'est pour le tree
                        //FormFileUpload.init(); // celui là c'est pour l'upload
                        //\$('#fileupload').fileupload({});

                        \$('#ajout1').hide();
                        
                        \$('#form_search_group').hide();

                        \$(\"#search_form\").submit(function() {

                            var searchText = \$('#searchText').val();
                            \$.ajax({
                                url: \"";
        // line 561
        echo $this->env->getExtension('routing')->getPath("InnovGroup_solrSearch");
        echo "\",
                                type: 'POST',
                                data: {
                                    searchText: searchText
                                },
                                success: function(resultat) {
                                    \$('#searchResult').html(resultat);

                                }
                            });


                        });





                        var test = \$('.theme-panel');
                        \$(document.body).click(function(e) {

                            // Si ce n'est pas #test ni un de ses enfants
                            if (!\$(e.target).is(test) && !\$.contains(test[0], e.target) && !\$(e.target).is(\$('#open_perso'))  && !\$(e.target).is(\$('.open_perso2')) ) {
                               // alert('test');

                                \$('.toggler-close').click();

                                \$('.enonceShow').show();
                                \$('#enonceCache').hide();
                                \$('#nouveauExam').removeClass('uploadExam');
                                \$('#nodeTemp').hide();


                                var id_nouvelleCorrection = \$(\"[class~='uploadMode']\").attr('id');

                                if(id_nouvelleCorrection)
                                {
                                   // alert(id_nouvelleCorrection);
                                   \$(\"#\"+id_nouvelleCorrection+\" .nodeTemp2\").hide();
                                   \$(\"#\"+id_nouvelleCorrection+\" .message\").hide();
                                    \$(\"#\"+id_nouvelleCorrection+\" .nomDocument\").hide();
                                     \$(\"#\"+id_nouvelleCorrection+\" .affiche\").show();
                                     
                                      
                                      \$(\"#\"+id_nouvelleCorrection).removeClass('uploadMode');
                                 }

                                 \$('#fleche').css('display','none');
                                 \$('.fleche2').css('display','none');
        }

                             if(\$(e.target).is(\$('#open_perso')))
                             {
                                  \$('.toggler').click();
                                  \$('.enonceShow').hide();
                                  \$('#enonceCache').show();
                                  \$('#nouveauExam').addClass('uploadExam');
                                  \$('#fleche').show();
                             }

                             if(\$(e.target).is(\$('.open_perso2')))
                             {

                              var el = e.target;
                              var id = el.id;
                              var id1 = id.split('_');
                              var id_nouvelleCorrection = \"#col_\"+id1[1];
                             // alert(id_nouvelleCorrection);
                              \$('.toggler').click();
                              \$(id_nouvelleCorrection+\" .affiche\").hide();
                              \$(id_nouvelleCorrection+\" .message\").show();
                              var test_mode = \$(\"[class~='uploadMode']\");

                              if(test_mode.length!=0){
                                  test_mode.removeClass('uploadMode');
                                  var id_reload= test_mode.attr('id');
                                // alert(id_reload);
                                 \$(\"#\"+id_reload+\" .affiche\").show();
                                     \$(\"#\"+id_reload+\" .message\").hide();
                                      \$(\"#\"+id_reload+\" .nodeTemp2\").hide();


                                  }
                              \$(id_nouvelleCorrection).addClass('uploadMode');

                                  \$('.fleche2').css('display','block');
                             }



                        });

                        \$(\"#ajoutDossier\").click(function() {
                            \$('#ajoutDossier').hide();
                            \$('#ajout1').show();
                            \$('#ajout').focus();
                        });
                        
                        \$(\"#btn_search_group\").click(function() {
                            \$('#btn_search_group').hide();
                            \$('#form_search_group').show();
                            \$('.input_search_group').focus();
                        });

                         \$(\".input_search_group\").focusout(function() {
                              \$('#form_search_group').hide();
                            \$('#btn_search_group').show();

                        });

                         \$(\"#ajout\").focusout(function() {
                              \$('#ajout1').hide();
                            \$('#ajoutDossier').show();

                        });

                        \$(\"#ajout1\").submit(function() {

                            var nom_dossier = \$(\"#ajout\").val();
                            \$.ajax({
                                url: \"";
        // line 681
        echo $this->env->getExtension('routing')->getPath("InnovGroup_creerSousDossierPerso");
        echo "\",
                                type: 'POST',
                                data: {
                                    sousDP: nom_dossier
                                },
                                success: function(resultat) {
                                    \$('#tree_1').jstree('destroy');
                                    \$('#dossierPerso').html(resultat);
                                    UITree.init();
                                }
                            });
                            \$('#ajoutDossier').show();
                            \$('#ajout').hide();

                        });



                        /* AUTO COMPLETION */
                        var numbers = new Bloodhound({
                            datumTokenizer: function(d) {
                                return Bloodhound.tokenizers.whitespace(d.text);
                            },
                            queryTokenizer: Bloodhound.tokenizers.whitespace,
                            remote: \"";
        // line 705
        echo $this->env->getExtension('routing')->getPath("InnovGroup_rechercheAutoComplete");
        echo "?query=%QUERY\"
                        });

                        // initialize the bloodhound suggestion engine
                        numbers.initialize();

                        // instantiate the typeahead UI
                        \$('#Search_box').typeahead(null, {
                            displayKey: 'text',
                            hint: (App.isRTL() ? false : true),
                            source: numbers.ttAdapter()
                        });

                        \$(\"#fancy-upload\").fancybox({
                            maxWidth: 800,
                            maxHeight: 600,
                            fitToView: false,
                            width: '70%',
                            height: '70%',
                            autoSize: false,
                            closeClick: false,
                            openEffect: 'none',
                            closeEffect: 'none',
                            afterClose: function() {
                                \$.ajax({
                                    url: \"";
        // line 730
        echo $this->env->getExtension('routing')->getPath("InnovGroup_renderJsTree");
        echo "\",
                                    type: 'POST',
                                    success: function(resultat) {
                                        \$('#tree_1').jstree('destroy');
                                        \$('#dossierPerso').html(resultat);
                                        UITree.init();
                                    }
                                });

                            }
                        });






            



                        \$('#fancy-upload2').fancybox({
                            maxWidth: 800,
                            maxHeight: 600,
                            fitToView: false,
                            width: '70%',
                            height: '70%',
                            autoSize: false,
                            closeClick: false,
                            openEffect: 'none',
                            closeEffect: 'none',
                             afterClose: function() {
                                \$.ajax({
                                    data:{id_groupe:id_groupe},
                                    url: \"";
        // line 764
        echo $this->env->getExtension('routing')->getPath("InnovGroup_renderListeExamCo");
        echo "\",
                                    type: 'POST',
                                    success: function(resultat) {
                                       \$('#examCollection').html(resultat);

                                       visionner();
          
                                    }
                                });

                            }

                        });



           

          \$(\"#fancyModal\").fancybox({
            maxWidth: 850,
            maxHeight: 650,
            fitToView: false,
            width: '60%',
            height: '60%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none',
            afterClose : function()
            {
                window.location.reload();
            }
        });         
        
             \$(\"#fancyAjout\").fancybox({
            maxWidth: 500,
            maxHeight: 200,
            fitToView: false,
           
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none',
            afterClose : function()
            {
                window.location.reload();
            }
        }); 






           \$('.visionPublic').each(function(i){
                            var id = \$(this).attr('id');

                            \$(this).click(function(){

                                \$.ajax({
                                                type : 'POST',

                                                url : window.urlVisionnerPublic,
                                                data: {id: id},
                                                dataType:'text',
                                                success: function(data) {
                                                    //alert(data)
                                                    var dataX = data;
                                                    var dataXsplit = dataX.split('**--**');
                                                    //alert(dataXsplit.length);
                                                    var dataXarrayObj = new Array();
                                                    for(var i=0 ; i<dataXsplit.length;i++)
                                                    {
                                                        //alert(i);
                                                        if(dataXsplit[i].length){ //remove last empty element after .split()
                                                            dataXarrayObj[i] = \$.parseJSON(dataXsplit[i]);
                                                        }
                                                    }
                                                    var opts = {
                                                        minWidth:'800',
                                                        minHeight: '800',
                                                        maxWidth:'800',
                                                        maxHeight: '800',
                                                        mouseWheel:false,
                                                        
                                                        prevEffect : 'none',
                                                        nextEffect : 'none',
                                                        padding    : 2,
                                                        topRatio:0.5,
                                                        leftRatio:0.15,



                                                        helpers    : {

                                                            title : {
                                                                type: 'inside'  
                                                            },

                                                            thumbs : {
                                                                width  : 75,
                                                                height : 50,

                                                            }

                                                          

                                                        },

                                                        afterShow : function(a,b){
                                                            \$('.fancybox-title .panel .panel-heading').prepend(\"<div id='zoom'><p>Zoom :  <span id='zoomInButton' class='zoomButton icon-zoom-in' style='font-size:22px;'></span>&nbsp;&nbsp;<span id='zoomOutButton' class='zoomButton icon-zoom-out' style='font-size:22px;'></span></p></div>\");
                                                              \$('.fancybox-image').attr('id','imageFullScreen');
                                                                \$('#imageFullScreen').smartZoom({'containerClass':'zoomableContainer','scrollEnabled':'false'});

                                                                  \$('#zoomInButton,#zoomOutButton').bind(\"click\", zoomButtonClickHandler);
        
                                                                    function zoomButtonClickHandler(e){
                                                                    var scaleToAdd = 0.8;
                                                                            if(e.target.id == 'zoomOutButton')
                                                                                    scaleToAdd = -scaleToAdd;
                                                                            \$('#imageFullScreen').smartZoom('zoom', scaleToAdd);
                                                                     }
                                                        }


                                                    };
                                                    \$.fancybox(dataXarrayObj, opts);
                                                }
                                            });

                                            });

                                            });

                        // ajax commentaire




                      /*  \$(\".fancy-upload2\").fancybox({
                            maxWidth: 800,
                            maxHeight: 600,
                            fitToView: false,
                            width: '70%',
                            height: '70%',
                            autoSize: false,
                            closeClick: false,
                            openEffect: 'none',
                            closeEffect: 'none',

                        });*/

                        
                          var url = location.pathname; 
         \$(\"ul[class*='pagination'] li a[href='\"+url+\"']\").css('background-color','#cfcdcf');

                                \$('.toggler').click();


                    });
                    ";
        // line 924
        if (array_key_exists("groupe", $context)) {
            // line 925
            echo "                    var id_groupe = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id"), "html", null, true);
            echo "\";
                    ";
        }
        // line 927
        echo "                    var urlVisionnerPublic = \"";
        echo $this->env->getExtension('routing')->getPath("InnovGroup_visionnerPublic");
        echo "\"
                    var urlAjouterAuxFavoris = \"";
        // line 928
        echo $this->env->getExtension('routing')->getPath("InnovGroup_AjouterAuxFavoris");
        echo "\";
                    var urlAfficherCommentExCo = \"";
        // line 929
        echo $this->env->getExtension('routing')->getPath("InnovGroup_AfficherCommentExCo");
        echo "\";
                    var urlAfficherCommentEssaiCo = \"";
        // line 930
        echo $this->env->getExtension('routing')->getPath("InnovGroup_AfficherCommentEssaiCo");
        echo "\";
                    var urlSupprimerCommentaireExCo = \"";
        // line 931
        echo $this->env->getExtension('routing')->getPath("InnovGroup_SupprimerCommentExCo");
        echo "\";
                    var urlSupprimerCommentaireEssaiCo = \"";
        // line 932
        echo $this->env->getExtension('routing')->getPath("InnovGroup_SupprimerCommentEssaiCo");
        echo "\";
                    var urlCommenterExCo = \"";
        // line 933
        echo $this->env->getExtension('routing')->getPath("InnovGroup_commenterExCo");
        echo "\";
                    var urlCommenterEssaiCo = \"";
        // line 934
        echo $this->env->getExtension('routing')->getPath("InnovGroup_commenterEssaiCo");
        echo "\";
                    var urlUpload = \"";
        // line 935
        echo $this->env->getExtension('routing')->getPath("InnovGroup_test");
        echo "\"; // begin 
                    var urlSwitcher = \"";
        // line 936
        echo $this->env->getExtension('routing')->getPath("InnovGroup_switcher");
        echo "\";
                    var urlVisionner = \"";
        // line 937
        echo $this->env->getExtension('routing')->getPath("InnovGroup_visionnerDoc");
        echo "\";
                    var urlDeletePerso = \"";
        // line 938
        echo $this->env->getExtension('routing')->getPath("InnovGroup_deletePerso");
        echo "\";
                    var urlPartagerExamCollection = \"";
        // line 939
        echo $this->env->getExtension('routing')->getPath("InnovGroup_partagerExCo");
        echo "\";
                    var urlPartagerEssaiCollection = \"";
        // line 940
        echo $this->env->getExtension('routing')->getPath("InnovGroup_partagerEssaiCo");
        echo "\";
                    var urlVisionnerExCo = \"";
        // line 941
        echo $this->env->getExtension('routing')->getPath("InnovGroup_visionnerExCo");
        echo "\";
                    var urlVisionnerEssaiCo = \"";
        // line 942
        echo $this->env->getExtension('routing')->getPath("InnovGroup_visionnerEssaiCo");
        echo "\";
                    ";
        // line 943
        if (array_key_exists("offset", $context)) {
            // line 944
            echo "                     var urlSupprimerDansGroupe = \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("InnovGroup_supprDansGroupe", array("offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
            echo "\";
                     ";
        }
        // line 945
        echo " 
                    function visionner()
                    {
                  \$('.visionEssaiCo').each(function(i){
                            var id = \$(this).attr('id');
                            var temp = id.split('_');
                            var idEssaiCo = temp[1];
                            \$(this).click(function(){

                                \$.ajax({
                                                type : 'POST',

                                                url : window.urlVisionnerEssaiCo,
                                                data: {id: idEssaiCo},
                                                dataType:'text',
                                                success: function(data) {
                                                    //alert(data)
                                                    var dataX = data;
                                                    var dataXsplit = dataX.split('**--**');
                                                    //alert(dataXsplit.length);
                                                    var dataXarrayObj = new Array();
                                                    for(var i=0 ; i<dataXsplit.length;i++)
                                                    {
                                                        //alert(i);
                                                        if(dataXsplit[i].length){ //remove last empty element after .split()
                                                            dataXarrayObj[i] = \$.parseJSON(dataXsplit[i]);
                                                        }
                                                    }
                                                    var opts = {
                                                           minWidth:'800px',
                                                        minHeight: '800px',
                                                        maxWidth:'800px',
                                                        maxHeight: '800px',
                                                        autoSize: false,
                                                        mouseWheel:false,
                                                        prevEffect : 'none',
                                                        nextEffect : 'none',
                                                        padding    : 2,
                                                        topRatio:0.5,
                                                        leftRatio:0.15,



                                                        helpers    : {

                                                            title : {
                                                                type: 'inside'  
                                                            },

                                                            thumbs : {
                                                                width  : 75,
                                                                height : 50

                                                            }

                                                           

                                                        },
                                                        afterShow : function(a,b)
                                                        {
                                                            
                                                             \$('.fancybox-title .panel .panel-heading').prepend(\"<div id='zoom'><p>Zoom :  <span id='zoomInButton' class='zoomButton icon-zoom-in' style='font-size:22px;'></span>&nbsp;&nbsp;<span id='zoomOutButton' class='zoomButton icon-zoom-out' style='font-size:22px;'></span></p></div>\");
                                                              \$('.fancybox-image').attr('id','imageFullScreen');
                                                                \$('#imageFullScreen').smartZoom({'containerClass':'zoomableContainer'});

                                                                  \$('#zoomInButton,#zoomOutButton').bind(\"click\", zoomButtonClickHandler);
        
                                                                    function zoomButtonClickHandler(e){
                                                                    var scaleToAdd = 0.8;
                                                                            if(e.target.id == 'zoomOutButton')
                                                                                    scaleToAdd = -scaleToAdd;
                                                                            \$('#imageFullScreen').smartZoom('zoom', scaleToAdd);
                                                                     }
                                                          //  alert('test

                                                           // alert('test');
                                                          \$( \"#inputCo\" ).keyup(function( event ) {
                                                                if(event.keyCode == 13){
                                                                        var commentaire = \$('#inputCo').val();

                                                                 //   alert(id+\" // \"+commentaire);
                                                                 var id = \$('.commenter').attr('id');
                                                                 
                                                                    \$.ajax({
                                                                    url: window.urlCommenterEssaiCo,
                                                                    type: 'POST',
                                                                    data: {
                                                                        id: id,
                                                                        commentaire: commentaire
                                                                    },
                                                                    success: function(resultat) {
                                                                      //  alert(resultat);
                                                                       \$('#messageAppend').html(resultat);
                                                                       \$('#inputCo').val('');


                                                                    }
                                                                });
                                                                  }
                                                               
                                                           });




                                                                \$('.poubelle').each(function(i){
                                                                var id = \$(this).attr('id');
                                                                var temp = id.split('_');
                                                                var idCo = temp[1];
                                                                \$(this).click(function(){
                                                                  // alert(idCo);
                                                                    \$.ajax({
                                                                    url: window.urlSupprimerCommentaireEssaiCo,
                                                                    type: 'POST',
                                                                    data: {
                                                                        id: idCo,

                                                                    },
                                                                    success: function(resultat) {
                                                                      //  alert(\"aaaaaa\");
                                                                        \$('#messageAppend').html(resultat);


                                                                    }

                                       });
                                       });
                                       });

                                                            },
                                                            afterLoad: function(){
                                                                 \$(\"[class~='commenter']\").each(function(i){
                                                                var id = \$(this).attr('id');



                                                                \$.ajax({
                                                                    url: window.urlAfficherCommentEssaiCo,
                                                                    type: 'POST',
                                                                    data:{id:id},
                                                                    success: function(resultat) {
                                                                        //alert(\"aaaaaa\");
                                                                        \$('#messageAppend').html(resultat);


                                                                    }
                                                            });
                                                            });
                                                            }
                                                    };
                                                    \$.fancybox(dataXarrayObj, opts);
                                                }
                                            });

                                            });

                                            });




                 \$('.visionExCo').each(function(i){
                            var id = \$(this).attr('id');
                            var temp = id.split('_');
                            var idExCo = temp[1];
                            \$(this).click(function(){

                                \$.ajax({
                                                type : 'POST',

                                                url : window.urlVisionnerExCo,
                                                data: {id: idExCo},
                                                dataType:'text',
                                                success: function(data) {
                                                    //alert(data)
                                                    var dataX = data;
                                                    var dataXsplit = dataX.split('**--**');
                                                    //alert(dataXsplit.length);
                                                    var dataXarrayObj = new Array();
                                                    for(var i=0 ; i<dataXsplit.length;i++)
                                                    {
                                                        //alert(i);
                                                        if(dataXsplit[i].length){ //remove last empty element after .split()
                                                            dataXarrayObj[i] = \$.parseJSON(dataXsplit[i]);
                                                        }
                                                    }
                                                    var opts = {
                                                       
                                                        minWidth:'800px',
                                                        minHeight: '800px',
                                                        maxWidth:'800px',
                                                        maxHeight: '800px',
                                                        mouseWheel:false,
                                                        autoSize: false,
                                                        prevEffect : 'none',
                                                        nextEffect : 'none',
                                                        padding    : 2,
                                                        topRatio:0.5,
                                                        leftRatio:0.15,


                                                        helpers    : {

                                                            title : {
                                                                type: 'inside'  
                                                            },

                                                            thumbs : {
                                                                width  : 75,
                                                                height : 50

                                                            }

                                                           

                                                        },
                                                        afterShow : function(a,b)
                                                        {
                                                            
                                                             \$('.fancybox-title .panel .panel-heading').prepend(\"<div id='zoom'><p>Zoom :  <span id='zoomInButton' class='zoomButton icon-zoom-in' style='font-size:22px;'></span>&nbsp;&nbsp;<span id='zoomOutButton' class='zoomButton icon-zoom-out' style='font-size:22px;'></span></p></div>\");
                                                              \$('.fancybox-image').attr('id','imageFullScreen');
                                                                \$('#imageFullScreen').smartZoom({'containerClass':'zoomableContainer','scrollEnabled':'false'});

                                                                  \$('#zoomInButton,#zoomOutButton').bind(\"click\", zoomButtonClickHandler);
        
                                                                    function zoomButtonClickHandler(e){
                                                                    var scaleToAdd = 0.8;
                                                                            if(e.target.id == 'zoomOutButton')
                                                                                    scaleToAdd = -scaleToAdd;
                                                                            \$('#imageFullScreen').smartZoom('zoom', scaleToAdd);
                                                                     }
                                                          //  alert('test');
                                                    
        
                                                                        
                                                                        
                                                           \$( \"#inputCo\" ).keyup(function( event ) {
                                                                if(event.keyCode == 13){
                                                                        var commentaire = \$('#inputCo').val();

                                                                 //   alert(id+\" // \"+commentaire);
                                                                 var id = \$('.commenter').attr('id');
                                                                 
                                                                    \$.ajax({
                                                                    url: window.urlCommenterExCo,
                                                                    type: 'POST',
                                                                    data: {
                                                                        id: id,
                                                                        commentaire: commentaire
                                                                    },
                                                                    success: function(resultat) {
                                                                      //  alert(resultat);
                                                                       \$('#messageAppend').html(resultat);
                                                                       \$('#inputCo').val('');


                                                                    }
                                                                });
                                                                  }
                                                               
                                                           });




                                                                \$('.poubelle').each(function(i){
                                                                var id = \$(this).attr('id');
                                                                var temp = id.split('_');
                                                                var idCo = temp[1];
                                                                \$(this).click(function(){
                                                                 
                                                                    \$.ajax({
                                                                    url: window.urlSupprimerCommentaireExCo,
                                                                    type: 'POST',
                                                                    data: {
                                                                        id: idCo,

                                                                    },
                                                                    success: function(resultat) {
                                                                     
                                                                        \$('#messageAppend').html(resultat);


                                                                    }

                                       });
                                       });
                                       });

                                                            },
                                                            afterLoad: function(){
                                                                 \$(\"[class~='commenter']\").each(function(i){
                                                                var id = \$(this).attr('id');



                                                                \$.ajax({
                                                                    url: window.urlAfficherCommentExCo,
                                                                    type: 'POST',
                                                                    data:{id:id},
                                                                    success: function(resultat) {
                                                                        //alert(\"aaaaaa\");
                                                                        \$('#messageAppend').html(resultat);


                                                                    }
                                                            });
                                                            });
                                                            }
                                                    };
                                                    \$.fancybox(dataXarrayObj, opts);
                                                }
                                            });

                                            });

                                            });



                           \$('.favoris').each(function(i)
                            {
                           var id = \$(this).attr('id');

                           \$(this).click(function(){
                                \$.ajax({
                                    data:{id:id},
                                    url: window.urlAjouterAuxFavoris,
                                    type: 'POST',
                                    success: function(resultat) {
                                       \$('#tree_1').jstree('destroy');
                                        \$('#dossierPerso').html(resultat);
                                        UITree.init();
                                        \$('.toggler').click();                                           }
                                });
                                });
                                });





                         
                        
                        
                        
                                                                \$('.poubelleGroupe').each(function(i){
                                                                var id = \$(this).attr('id');
                                                              
                                                                \$(this).click(function(){
                                                                  // alert(idCo);
                                                                  
                                                                    \$.ajax({
                                                                    url: window.urlSupprimerDansGroupe,
                                                                    type: 'POST',
                                                                    data: {
                                                                        id: id,

                                                                    },
                                                                    success: function(resultat) {
                                                                      //  alert(\"aaaaaa\");
                                                                        \$('#examCollection').html(resultat);

                                                                        visionner();
                                                                    }

                                                                   });
                                                                   });
                                                                   });                       
                        
                        
                        

            }
            
            
                    
                    </script>

                    <!-- CES JS FLATLAB ONT ETE DEPLACE VERS LA FIN POUR QUE LE SIDEBAR MARCHE -->


                    <script type=\"text/javascript\" src=\"";
        // line 1327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 1328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 1329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>

                    <script src=\"";
        // line 1331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/core/app.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 1333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/components-dropdowns.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 1334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/components-form-tools.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 1335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fuelux/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 1336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 1337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 1338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery.input-ip-address-control-1.0.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 1339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-touchspin/bootstrap.touchspin.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/typeahead.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/e-smart-zoom-jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 1347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 1348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/helpers/jquery.fancybox-media.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 1349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js"), "html", null, true);
        echo "\"></script>

                      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50958847-1', 'h-derty.com');
  ga('send', 'pageview');

</script>

                </body>
            </html>
";
    }

    // line 61
    public function block_cssFileUpload($context, array $blocks = array())
    {
        // line 62
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    // line 67
    public function block_cssTree_and_file($context, array $blocks = array())
    {
        // line 68
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jstree/dist/themes/default/style.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 80
    public function block_flatlab($context, array $blocks = array())
    {
        // line 81
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!--external css-->
<link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Custom styles for this template -->
<link href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<link href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    // line 90
    public function block_cssModal($context, array $blocks = array())
    {
        // line 91
        echo "<!-- BEGIN PAGE LEVEL STYLES -->
<link href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-modal/css/bootstrap-modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
";
    }

    // line 208
    public function block_searchForm($context, array $blocks = array())
    {
        echo "        
                    ";
        // line 209
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovGroupBundle:Group:solrSearch", array("query" => "_a_a_a_a_")));
        echo "   
                ";
    }

    // line 300
    public function block_sidebar($context, array $blocks = array())
    {
        // line 301
        echo "        <aside>
            <div id=\"sidebar\"  class=\"nav-collapse \">
                <!-- sidebar menu start-->
                <br/><br/>
                <ul class=\"sidebar-menu\" id=\"nav-accordion\">

                    <a style=\"padding-left:0px;\" data-fancybox-type=\"iframe\" class=\"btn green\" id=\"fancyModal\" href=\"";
        // line 307
        echo $this->env->getExtension('routing')->getPath("InnovGroup_creerGroup");
        echo "\" > 
                     <button type=\"button\" class=\"btn-sm btn-default\" style=\"background:#00c6d4;border:none;width:118%\">
                            <i class=\"icon-plus\">
                            </i>  ";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.form_button_creer"), "html", null, true);
        echo "
                      </button>
                    </a>
                    
                    <br>
                    
                     <button id=\"btn_search_group\"  type=\"button\" class=\"btn-sm btn-default\" style=\"background:#00c6d4;border:none;\">
                            <i class=\"fa fa-search\">
                            </i>  ";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.button_chercher"), "html", null, true);
        echo "
                      </button>
                   ";
        // line 320
        if (array_key_exists("searchTextGroupe", $context)) {
            // line 321
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovGroupBundle:Group:affircheFormSearchGroup", array("query" => (isset($context["searchTextGroupe"]) ? $context["searchTextGroupe"] : $this->getContext($context, "searchTextGroupe")))));
            echo "
                   ";
        } else {
            // line 323
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovGroupBundle:Group:affircheFormSearchGroup"));
            echo "                    
                   ";
        }
        // line 325
        echo "                    
                 <br/><br/><br/>


                    <li class=\"sub-menu\" style=\"margin-bottom:13px;\">

                        <i class=\"icon-globe\"></i>
                        <span>";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.groupe.mes_groupes"), "html", null, true);
        echo "</span>
 ";
        // line 333
        $this->env->loadTemplate("InnovGroupBundle:Group:mesGroupes.html.twig")->display($context);
        echo " 
                    </li>


                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <div style=\"position:fixed;left:30px;bottom:30px;\" class=\"fb-like-box\" data-href=\"https://www.facebook.com/hderty\" data-width=\"200\" data-height=\"200\" data-colorscheme=\"light\" data-show-faces=\"true\" data-header=\"false\" data-stream=\"false\" data-show-border=\"true\"></div>
";
    }

    // line 351
    public function block_espacePerso($context, array $blocks = array())
    {
        // line 352
        echo "

                <!-- BEGIN STYLE CUSTOMIZER -->
                <div class=\"theme-panel hidden-xs hidden-sm\" style=\"margin-top:1px;position:fixed;
                     right:10px;\">
                         <div class=\"toggler\">
                         </div>
                         <div class=\"toggler-close\">
                         </div>
                         <div class=\"theme-options\">
                             <div class=\"theme-option theme-colors clearfix\">
                                 <span align=\"center\">
                        ";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.espace_perso.header"), "html", null, true);
        echo "
                                     </span>
                                     </br>
                                     <form id=\"ajout1\" action=\"javascript:;\">
                                         <input style=\"color:#000000\" type=\"text\" id=\"ajout\" placeholder=\"nom du dossier\">
                                     </form>

                                     <a id=\"ajoutDossier\" href=\"#\" class=\"btn green\">
                                         <i class=\"fa fa-plus\"></i>
                         ";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.espace_perso.creer_dossier"), "html", null, true);
        echo "

                                     </a>
                                     </br>
                                     <div>

                                         <div id='dossierPerso'>
                        ";
        // line 380
        $this->env->loadTemplate("InnovGroupBundle:Group:EspacePerso.html.twig")->display($context);
        // line 381
        echo "                                             </div>
                                             </br>

                                         </div>
                                         <br/>
                                         <br/>

                                         <!-- include du formulaire d'upload des CC -->
                                         <a data-fancybox-type=\"iframe\" class=\"btn green\" id=\"fancy-upload\" href=\"";
        // line 389
        echo $this->env->getExtension('routing')->getPath("InnovGroup_test");
        echo "\">
                                             <i class=\"fa fa-cloud-upload\"></i>
                                             <span class=\"title\" style=\"color:lightblue;font-size:13px;\">
                                 ";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.espace_perso.ajout_document"), "html", null, true);
        echo "
                                                 </span>
                                             </a>


                                         </div>

                                     </div>
                                 </div>
                                 <!-- END STYLE CUSTOMIZER -->
";
    }

    // line 404
    public function block_infoGroupe($context, array $blocks = array())
    {
    }

    // line 408
    public function block_content($context, array $blocks = array())
    {
    }

    // line 441
    public function block_javascript($context, array $blocks = array())
    {
        // line 442
        echo "
                <!-- BEGIN CORE PLUGINS -->

                <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js') }} before bootstrap.min.js') }} to fix bootstrap tooltip conflict with jquery ui tooltip -->
                <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/js/bootstrap2-typeahead.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <!-- END CORE PLUGINS -->
                <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/core/app.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 461
    public function block_jsFileUpload($context, array $blocks = array())
    {
        // line 462
        echo "                <!-- BEGIN CORE PLUGINS -->
                <!--[if lt IE 9]>
            <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
            <![endif]-->

                <!-- END CORE PLUGINS -->
                <!-- BEGIN PAGE LEVEL PLUGINS -->
                <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
                <!-- END PAGE LEVEL PLUGINS-->
                <!-- BEGIN:File Upload Plugin JS files-->
                <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
                <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
                <!-- The Templates plugin is included to render the upload/download listings -->
                <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/tmpl.min.js"), "html", null, true);
        echo "\"></script>
                <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
                <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/load-image.min.js"), "html", null, true);
        echo "\"></script>
                <!-- The Canvas to Blob plugin is included for image resizing functionality -->
                <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
                <!-- blueimp Gallery script -->
                <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"), "html", null, true);
        echo "\"></script>
                <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
                <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
                <!-- The basic File Upload plugin -->
                <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
                <!-- The File Upload processing plugin -->
                <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
                <!-- The File Upload image preview & resize plugin -->
                <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-image.js"), "html", null, true);
        echo "\"></script>
                <!-- The File Upload audio preview plugin -->
                <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"), "html", null, true);
        echo "\"></script>
                <!-- The File Upload video preview plugin -->
                <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-video.js"), "html", null, true);
        echo "\"></script>
                <!-- The File Upload validation plugin -->
                <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"), "html", null, true);
        echo "\"></script>
                <!-- The File Upload user interface plugin -->
                <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>

                <!-- The main application script -->
                <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
                <!--[if (gte IE 8)&(lt IE 10)]>
            <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->


";
    }

    // line 507
    public function block_jsModal($context, array $blocks = array())
    {
        // line 508
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-modal/js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN PAGE LEVEL SCRIPTS -->
                <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/core/app.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/ui-extended-modals.js"), "html", null, true);
        echo "\"></script>
                <!-- END PAGE LEVEL SCRIPTS -->
                <!-- BEGIN SEARCH AUTO COMPLETE SCRIPTS -->
                <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/typeahead/typeahead.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <!-- END SEARCH AUTOCOMPLETE SCRIPTS -->

                <!-- END:File Upload Plugin JS files-->
                <script src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/core/app.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/form-fileupload.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 524
    public function block_fileUp_and_tree($context, array $blocks = array())
    {
        // line 525
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jstree/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/ui-tree.js"), "html", null, true);
        echo "\"></script>


                <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatlab/js/common-scripts.js"), "html", null, true);
        echo "\"></script>




                <!-- END PAGE LEVEL PLUGINS-->
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2030 => 533,  2026 => 532,  2022 => 531,  2018 => 530,  2012 => 527,  2008 => 526,  2003 => 525,  2000 => 524,  1993 => 522,  1989 => 521,  1982 => 517,  1978 => 516,  1972 => 513,  1968 => 512,  1962 => 509,  1957 => 508,  1954 => 507,  1945 => 503,  1937 => 498,  1932 => 496,  1927 => 494,  1922 => 492,  1917 => 490,  1912 => 488,  1907 => 486,  1902 => 484,  1897 => 482,  1892 => 480,  1887 => 478,  1882 => 476,  1877 => 474,  1870 => 470,  1862 => 465,  1858 => 464,  1854 => 462,  1851 => 461,  1845 => 457,  1840 => 455,  1836 => 454,  1832 => 453,  1828 => 452,  1824 => 451,  1820 => 450,  1816 => 449,  1812 => 448,  1807 => 446,  1803 => 445,  1798 => 442,  1795 => 441,  1790 => 408,  1785 => 404,  1770 => 392,  1764 => 389,  1754 => 381,  1752 => 380,  1742 => 373,  1730 => 364,  1716 => 352,  1713 => 351,  1699 => 333,  1695 => 332,  1686 => 325,  1680 => 323,  1674 => 321,  1672 => 320,  1667 => 318,  1656 => 310,  1650 => 307,  1642 => 301,  1639 => 300,  1633 => 209,  1628 => 208,  1620 => 93,  1616 => 92,  1613 => 91,  1610 => 90,  1604 => 87,  1600 => 86,  1595 => 84,  1590 => 82,  1585 => 81,  1582 => 80,  1576 => 69,  1573 => 68,  1570 => 67,  1564 => 64,  1560 => 63,  1555 => 62,  1552 => 61,  1532 => 1349,  1528 => 1348,  1524 => 1347,  1520 => 1346,  1516 => 1345,  1512 => 1344,  1508 => 1343,  1504 => 1342,  1500 => 1341,  1496 => 1340,  1492 => 1339,  1488 => 1338,  1484 => 1337,  1480 => 1336,  1476 => 1335,  1472 => 1334,  1468 => 1333,  1464 => 1332,  1460 => 1331,  1455 => 1329,  1451 => 1328,  1447 => 1327,  1063 => 945,  1057 => 944,  1055 => 943,  1051 => 942,  1047 => 941,  1043 => 940,  1039 => 939,  1035 => 938,  1031 => 937,  1027 => 936,  1023 => 935,  1019 => 934,  1015 => 933,  1011 => 932,  1007 => 931,  1003 => 930,  999 => 929,  995 => 928,  990 => 927,  984 => 925,  982 => 924,  819 => 764,  782 => 730,  754 => 705,  727 => 681,  604 => 561,  581 => 540,  578 => 524,  575 => 507,  573 => 461,  569 => 459,  567 => 441,  559 => 436,  555 => 435,  551 => 434,  525 => 410,  523 => 408,  519 => 406,  517 => 404,  514 => 351,  511 => 350,  509 => 349,  501 => 343,  498 => 300,  496 => 299,  487 => 292,  477 => 287,  471 => 286,  465 => 285,  459 => 282,  449 => 275,  443 => 274,  437 => 270,  435 => 269,  425 => 264,  419 => 263,  413 => 262,  408 => 260,  402 => 259,  397 => 257,  393 => 256,  388 => 255,  385 => 254,  381 => 253,  376 => 251,  372 => 250,  368 => 249,  364 => 248,  361 => 247,  356 => 243,  348 => 240,  340 => 236,  332 => 232,  330 => 231,  326 => 229,  323 => 228,  321 => 227,  318 => 226,  314 => 224,  311 => 223,  309 => 222,  306 => 221,  303 => 220,  301 => 219,  294 => 214,  289 => 211,  287 => 208,  282 => 205,  279 => 204,  275 => 201,  267 => 195,  265 => 194,  260 => 191,  258 => 190,  249 => 186,  162 => 102,  158 => 101,  154 => 100,  150 => 99,  145 => 96,  143 => 90,  140 => 89,  138 => 80,  130 => 75,  126 => 74,  122 => 73,  118 => 71,  116 => 67,  113 => 66,  111 => 61,  106 => 58,  96 => 42,  91 => 38,  86 => 36,  79 => 31,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  42 => 9,  32 => 1,);
    }
}
