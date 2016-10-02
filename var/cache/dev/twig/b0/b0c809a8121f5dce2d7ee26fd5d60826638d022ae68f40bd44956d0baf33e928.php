<?php

/* ::homepage.html.twig */
class __TwigTemplate_3920aed3a7de02ecfe073d9cb6759c0a8faf0190a18bf3d4cf5edab5b61240de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1921e9e3ed9fa4e6de3494ede6fd2e6643a4b7cb7fa546dc222c7f53c20872 = $this->env->getExtension("native_profiler");
        $__internal_1c1921e9e3ed9fa4e6de3494ede6fd2e6643a4b7cb7fa546dc222c7f53c20872->enter($__internal_1c1921e9e3ed9fa4e6de3494ede6fd2e6643a4b7cb7fa546dc222c7f53c20872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c1921e9e3ed9fa4e6de3494ede6fd2e6643a4b7cb7fa546dc222c7f53c20872->leave($__internal_1c1921e9e3ed9fa4e6de3494ede6fd2e6643a4b7cb7fa546dc222c7f53c20872_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cb75e82855cb31d4df994f5eb57b75939297ec094250bbd15d5eba9a21abc7a = $this->env->getExtension("native_profiler");
        $__internal_8cb75e82855cb31d4df994f5eb57b75939297ec094250bbd15d5eba9a21abc7a->enter($__internal_8cb75e82855cb31d4df994f5eb57b75939297ec094250bbd15d5eba9a21abc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Page d'accueil</h1>

    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "    \t
    \t\t<p><a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></p>

    \t";
        } else {
            // line 12
            echo "
    \t\t<p><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></p>

    ";
        }
        // line 16
        echo "

";
        
        $__internal_8cb75e82855cb31d4df994f5eb57b75939297ec094250bbd15d5eba9a21abc7a->leave($__internal_8cb75e82855cb31d4df994f5eb57b75939297ec094250bbd15d5eba9a21abc7a_prof);

    }

    public function getTemplateName()
    {
        return "::homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  59 => 13,  56 => 12,  50 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Page d'accueil</h1>*/
/* */
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*     	*/
/*     		<p><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></p>*/
/* */
/*     	{% else %}*/
/* */
/*     		<p><a href="{{ path('fos_user_security_login') }}">Se connecter</a></p>*/
/* */
/*     {% endif %}*/
/* */
/* */
/* {% endblock %}*/
