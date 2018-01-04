<?php

/* InnovGroupBundle:Group:test_backup.html.twig */
class __TwigTemplate_0b725ecc4e2d8bd9b7920108c55985a7d2cde665d5ab3dbd46b981e1635e9770 extends Twig_Template
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
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" >
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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END GLOBAL MANDATORY STYLES -->

        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style-metronic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2-metronic.css"), "html", null, true);
        echo "\"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- END THEME STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body>
        <div class=\"page-content-wrapper\">
            <div class=\"page-content\" style=\"background-color:ghostwhite\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <h3 class=\"page-title\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.upload_form.header"), "html", null, true);
        echo "</h3>

                        <br>

                        <form id=\"fileupload\" action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                              
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-file-text-o\"></i>
                                    </span>


                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("innov.upload_form.document_titre"), "class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-tags\"></i>
                                    </span>

                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags"), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("innov.upload_form.document_tag"), "id" => "tags", "type" => "hidden", "class" => "form-control select2")));
        echo "
                                </div>
                            </div>
                            <div class=\"row fileupload-buttonbar\">
                                <div class=\"col-lg-7\">
                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                    <span class=\"btn green fileinput-button\">
                                        <i class=\"fa fa-plus\"></i>
                                        <span>
                                            ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.upload_form.button_add"), "html", null, true);
        echo "
                                        </span>
                                        <input type=\"file\" name=\"files[]\" multiple=\"\">
                                    </span>
                                    <button id=\"send\" type=\"submit\" class=\"btn blue start\">
                                        <i class=\"fa fa-upload\"></i>
                                        <span>
                                             ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.upload_form.button_submit"), "html", null, true);
        echo "
                                        </span>
                                    </button>
                                    <button type=\"reset\" class=\"btn warning cancel\">
                                        <i class=\"fa fa-ban-circle\"></i>
                                        <span>
                                             ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.upload_form.button_annuler"), "html", null, true);
        echo "
                                        </span>
                                    </button>
                                    <button type=\"button\" class=\"btn red delete\">
                                        <i class=\"fa fa-trash\"></i>
                                        <span>
                                             ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("innov.upload_form.button_supprimer"), "html", null, true);
        echo "
                                        </span>
                                    </button>
                                    <input type=\"checkbox\" class=\"toggle\">
                                    <!-- The global file processing state -->
                                    <span class=\"fileupload-process\">
                                    </span>
                                </div>
                                <!-- The global progress information -->
                                <div class=\"col-lg-5 fileupload-progress fade\">
                                    <!-- The global progress bar -->
                                    <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                        <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\">
                                        </div>
                                    </div>
                                    <!-- The extended global progress information -->
                                    <div class=\"progress-extended\">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                            <!-- The table listing the files available for upload/download -->
                            <table role=\"presentation\" class=\"table table-striped clearfix\">
                                <tbody class=\"files\">
                                </tbody>
                            </table>
                     <div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t      
                    ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("innov.upload_form.document_description"), "class" => "form-control")));
        echo "
                                                                                </div> 
                            <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </form>
                    </div>
                </div>
            </div>
        </div>




            ";
        // line 181
        echo "
        <script id=\"template-upload\" type=\"text/x-tmpl\">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-upload fade\">
            <td>
            <span class=\"preview\"></span>
            </td>
            <td>
            <p class=\"name\">{%=file.name%}</p>
            {% if (file.error) { %}
            <div><span class=\"label label-danger\">Error</span> {%=file.error%}</div>
            {% } %}
            </td>
            <td>
            <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>

            </td>
            <td>
            {% if (!i) { %}
            <button class=\"btn red cancel btn-sm\">
            <i class=\"fa fa-ban\"></i>
            <span>Cancel</span>
            </button>
            {% } %}
            </td>
            </tr>
            {% } %}
        </script>
               ";
        echo "
        <!-- The template to display files available for download -->
            ";
        // line 225
        echo "
        <script id=\"template-download\" type=\"text/x-tmpl\">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-download fade\">
            <td>
            <span class=\"preview\">
            {% if (file.thumbnailUrl) { %}
            <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" data-gallery><img src=\"{%=file.thumbnailUrl%}\"></a>
            {% } %}
            </span>
            </td>
            <td>
            <p class=\"name\">
            {% if (file.url) { %}
            <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
            {% } else { %}
            <span>{%=file.name%}</span>
            {% } %}
            </p>
            {% if (file.error) { %}
            <div><span class=\"label label-danger\">Error</span> {%=file.error%}</div>
            {% } %}
            </td>
            <td>
            <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
            {% if (file.deleteUrl) { %}
            <button class=\"btn red delete btn-sm\" data-type=\"{%=file.deleteType%}\" data-url=\"{%=file.deleteUrl%}\"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{\"withCredentials\":true}'{% } %}>
            <i class=\"fa fa-trash-o\"></i>
            <span>Delete</span>
            </button>
            <input type=\"checkbox\" name=\"delete\" value=\"1\" class=\"toggle\">
            {% } else { %}
            <button class=\"btn yellow cancel btn-sm\">
            <i class=\"fa fa-ban\"></i>
            <span>Cancel</span>
            </button>
            {% } %}
            </td>
            </tr>
            {% } %}
                    ";
        echo "
        </script>
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--[if lt IE 9]>
            <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
            <![endif]-->

        <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
        <!-- The Templates plugin is included to render the upload/download listings -->
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/tmpl.min.js"), "html", null, true);
        echo "\"></script>
        <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/load-image.min.js"), "html", null, true);
        echo "\"></script>
        <!-- The Canvas to Blob plugin is included for image resizing functionality -->
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
        <!-- blueimp Gallery script -->
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
        <!-- The basic File Upload plugin -->
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
        <!-- The File Upload processing plugin -->
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
        <!-- The File Upload image preview & resize plugin -->
        <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-image.js"), "html", null, true);
        echo "\"></script>
        <!-- The File Upload audio preview plugin -->
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"), "html", null, true);
        echo "\"></script>
        <!-- The File Upload video preview plugin -->
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-video.js"), "html", null, true);
        echo "\"></script>
        <!-- The File Upload validation plugin -->
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"), "html", null, true);
        echo "\"></script>
        <!-- The File Upload user interface plugin -->
        <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
        <!-- The main application script -->
        <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
        <!--[if (gte IE 8)&(lt IE 10)]>
            <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->
        <!-- END:File Upload Plugin JS files-->

        <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/fancybox/source/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/scripts/custom/form-fileupload.js"), "html", null, true);
        echo "\"></script>

        <!-- plugins pour le multi select -->
        <script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("metronic/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <!-- fin des plugins du multi upload -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->

        <script>
jQuery(document).ready(function() {

    FormFileUpload.init(); // celui là c'est pour l'upload

    // début lignes lignes de code  pour le multi-upload
    //  ComponentsDropdowns.init();
    //ComponentsFormTools.init();

    \$('#form_tags').select2({
        tags: true,
        createSearchChoice: function(term, data) {
            if (\$(data).filter(function() {
                return this.text.toLocaleLowerCase().localeCompare(term.toLocaleLowerCase()) === 0;
            }).length === 0) {
                return {
                    id: term,
                    text: term
                };
            }
        },
        placeholder: \"Select...\",
        //minimumInputLength: 2,
        //tokenSeparators: [\",\",\" \"],
        ajax: {
            url: \"";
        // line 309
        echo $this->env->getExtension('routing')->getPath("InnovGroup_ajaxTags");
        echo "\",
            dataType: 'json',
            quietMillis: 100,
            data: function(term, page) {
                return {
                    term: term //search term
                };
            },
            results: function(data, page) {
                return {
                    results: data
                };
            }

        },
        initSelection: function(element, callback) {
            return \$.getJSON(null, null, function(data) {

                return callback(data);

            });
        }
    });




    // fin lignes de codes pour le multi-upoad

    \$('#send').click(function(e) {

        var allData = [];
        \$('#fileupload').find('.template-upload').each(function() {
            var is_unique = true;
            var data = \$(this).data('data');
            for (i = 0; i < allData.length; ++i) {
                if (allData[i] == data) {
                    is_unique = false;
                    break;
                }
            }
            ;
            if (is_unique) {
                allData.push(data);
            }
        });
        var allFiles = [];
        \$.each(allData, function() {
            allFiles = allFiles.concat(this.files);
        });
        var jqXHR = \$('#fileupload').fileupload('send', {files: allFiles})
                .success(function(result, textStatus, jqXHR) {
                    parent.jQuery.fancybox.close();
                    \$('.files').html('');


                })
                .error(function(jqXHR, textStatus, errorThrown) {
                    console.log('e');
                   if(textStatus =='parsererror')
\t\t\t\t   {
\t\t\t\t\t parent.jQuery.fancybox.close();
                    \$('.files').html('');
\t\t\t\t   }
                    console.log(textStatus);
                    
                })
                .complete(function(result, textStatus, jqXHR) {
                    console.log('c');
                    console.log(result);
                });
        e.preventDefault();
    });




});

        </script>        

    </body>
    <!-- END BODY -->
</html>
";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:test_backup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 309,  444 => 277,  440 => 276,  436 => 275,  430 => 272,  425 => 270,  421 => 269,  414 => 265,  407 => 261,  402 => 259,  397 => 257,  392 => 255,  387 => 253,  382 => 251,  377 => 249,  372 => 247,  367 => 245,  362 => 243,  357 => 241,  352 => 239,  347 => 237,  341 => 234,  337 => 233,  331 => 230,  327 => 229,  323 => 228,  275 => 225,  242 => 181,  229 => 143,  223 => 140,  190 => 110,  181 => 104,  172 => 98,  162 => 91,  150 => 82,  137 => 72,  121 => 59,  105 => 46,  101 => 45,  97 => 44,  91 => 41,  87 => 40,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  60 => 31,  54 => 28,  50 => 27,  46 => 26,  19 => 1,);
    }
}
