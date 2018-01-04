<?php

/* InnovGroupBundle:Group:newCommentEssaiCo.html.twig */
class __TwigTemplate_b7d9c59120a03419c8794fff1a36371c8af2665492093f8c730f814e3dad1355 extends Twig_Template
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
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 3
            echo "<div class=\"msg-time-chat\">
    <a href=\"#\" class=\"message-img\"><img src='";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "auteur"), "photo"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "auteur"), "photo"), "id")) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "auteur"), "photo"), "url"))), "html", null, true);
            echo "' alt='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "auteur"), "photo"), "alt"), "html", null, true);
            echo "' height='29' width='29'/>
</a>
    <div class=\"message-body msg-in\">
        <span class=\"arrow\"></span>
        <div class=\"text\">
            <p class=\"attribution\"><a href=\"#\">";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "auteur"), "nom") . " ") . $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "auteur"), "prenom")), "html", null, true);
            echo "</a> le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "d/m/Y - H:i:s"), "html", null, true);
            echo "</p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "contenu"), "html", null, true);
            echo "</p>
            ";
            // line 11
            if ($this->env->getExtension('security')->isGranted("DELETE", (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
                // line 12
                echo "                <a class=\"poubelle\" href=\"#\" id=\"";
                echo twig_escape_filter($this->env, ("delete_" . $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id")), "html", null, true);
                echo " \"> <i class=\"icon-trash\"></i></a>
             ";
            }
            // line 14
            echo "        </div>
    </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

<script>
    \$('.poubelle').each(function(i){
                                                                        var id = \$(this).attr('id');
                                                                        var temp = id.split('_');
                                                                        var idCo = temp[1];
                                                                        \$(this).click(function(){
                                                                           alert(idCo);
                                                                            \$.ajax({
                                                                            url: window.urlSupprimerCommentaireEssaiCo,
                                                                            type: 'POST',
                                                                            data: {
                                                                                id: idCo,
                                                                                
                                                                            },
                                                                            success: function(resultat) {
                                                                                alert(\"aaaaaa\");
                                                                                \$('#messageAppend').html(resultat);
                                                                               

                                                                            }
                                                                            
                                               });
                                               });
                                               });
                                               </script>";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:newCommentEssaiCo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  57 => 14,  51 => 12,  49 => 11,  45 => 10,  39 => 9,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
