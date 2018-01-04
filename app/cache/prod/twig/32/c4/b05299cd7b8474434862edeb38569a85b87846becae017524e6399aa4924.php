<?php

/* InnovGroupBundle:Group:accueil.html.twig */
class __TwigTemplate_32c4b05299cd7b8474434862edeb38569a85b87846becae017524e6399aa4924 extends Twig_Template
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
        echo "


 ";
        // line 10
        echo "                            
";
        // line 11
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 12
            echo "
<div>
        ";
            // line 14
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovUserBundle:Security:login"));
            echo "                    
    </div>

    <div>
        ";
            // line 18
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovUserBundle:Registration:register"));
            echo "                    
        </div>
";
            // line 21
            echo "
";
        } else {
            // line 24
            echo "
    ";
            // line 31
            echo "
    ";
            // line 32
            if (((isset($context["erreur_serveur"]) ? $context["erreur_serveur"] : $this->getContext($context, "erreur_serveur")) == true)) {
                // line 33
                echo "         ";
                $this->env->loadTemplate("InnovGroupBundle:Group:erreurServeur.html.twig")->display($context);
                echo "        
    ";
            } elseif (((isset($context["new_user"]) ? $context["new_user"] : $this->getContext($context, "new_user")) == true)) {
                // line 35
                echo "         ";
                $this->env->loadTemplate("InnovGroupBundle:Group:userHelper.html.twig")->display($context);
                echo " 
    ";
            } else {
                // line 37
                echo "            ";
                // line 40
                echo "            ";
                if ((twig_length_filter($this->env, (isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs"))) < 3)) {
                    // line 41
                    echo "                 ";
                    $this->env->loadTemplate("InnovGroupBundle:Group:userHelper.html.twig")->display($context);
                    echo " 
            ";
                } else {
                    // line 42
                    echo "    
                  ";
                    // line 43
                    $this->env->loadTemplate("InnovGroupBundle:Group:recommandations.html.twig")->display($context);
                    echo " 
            ";
                }
                // line 45
                echo "    ";
            }
        }
        // line 47
        echo "

";
    }

    public function getTemplateName()
    {
        return "InnovGroupBundle:Group:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 47,  100 => 45,  95 => 43,  92 => 42,  86 => 41,  83 => 40,  81 => 37,  75 => 35,  69 => 33,  67 => 32,  64 => 31,  61 => 24,  57 => 21,  52 => 18,  45 => 14,  41 => 12,  39 => 11,  36 => 10,  31 => 7,  28 => 6,);
    }
}
