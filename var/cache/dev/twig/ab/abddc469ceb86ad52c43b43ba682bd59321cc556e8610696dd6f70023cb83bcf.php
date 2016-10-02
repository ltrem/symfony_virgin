<?php

/* homepage.html.twig */
class __TwigTemplate_488275c443dce03975dbaaa9c6ed2d4e12a222f6a1713f20250b681f58e1d332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
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
        $__internal_693a75844b597925daf4220a462c915d4e03c14676d4160190f28febf54489a7 = $this->env->getExtension("native_profiler");
        $__internal_693a75844b597925daf4220a462c915d4e03c14676d4160190f28febf54489a7->enter($__internal_693a75844b597925daf4220a462c915d4e03c14676d4160190f28febf54489a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693a75844b597925daf4220a462c915d4e03c14676d4160190f28febf54489a7->leave($__internal_693a75844b597925daf4220a462c915d4e03c14676d4160190f28febf54489a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_671c5de223bba43708beb315a7af765f31c60502aab16776a343eac80aecbaee = $this->env->getExtension("native_profiler");
        $__internal_671c5de223bba43708beb315a7af765f31c60502aab16776a343eac80aecbaee->enter($__internal_671c5de223bba43708beb315a7af765f31c60502aab16776a343eac80aecbaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_671c5de223bba43708beb315a7af765f31c60502aab16776a343eac80aecbaee->leave($__internal_671c5de223bba43708beb315a7af765f31c60502aab16776a343eac80aecbaee_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
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
