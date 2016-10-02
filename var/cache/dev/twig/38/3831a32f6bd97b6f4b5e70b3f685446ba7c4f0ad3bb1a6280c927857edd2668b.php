<?php

/* ::login_success.html.twig */
class __TwigTemplate_ceb4b41ad4a06820d5fad68fbc3057b4c72f71a1374d88b48968be6e3eee7c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::login_success.html.twig", 1);
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
        $__internal_1fad76c1ee41a909f3fd31968e2057e07c76e52e0c57efe706e707365bce1984 = $this->env->getExtension("native_profiler");
        $__internal_1fad76c1ee41a909f3fd31968e2057e07c76e52e0c57efe706e707365bce1984->enter($__internal_1fad76c1ee41a909f3fd31968e2057e07c76e52e0c57efe706e707365bce1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fad76c1ee41a909f3fd31968e2057e07c76e52e0c57efe706e707365bce1984->leave($__internal_1fad76c1ee41a909f3fd31968e2057e07c76e52e0c57efe706e707365bce1984_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dff8c99bbacff1fd02642125789db6dfd3047775baeb3ecc0a11ba0dfed4368e = $this->env->getExtension("native_profiler");
        $__internal_dff8c99bbacff1fd02642125789db6dfd3047775baeb3ecc0a11ba0dfed4368e->enter($__internal_dff8c99bbacff1fd02642125789db6dfd3047775baeb3ecc0a11ba0dfed4368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>Vous vous êtes correctement authentifié</p>
    <p>Bonjour,</p>

    <p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("client_page");
        echo "\">Accéder à l'espace réservé aux clients</a></p>

    <p><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_page");
        echo "\">Accéder à l'espace réservé aux administrateurs</a></p>

";
        
        $__internal_dff8c99bbacff1fd02642125789db6dfd3047775baeb3ecc0a11ba0dfed4368e->leave($__internal_dff8c99bbacff1fd02642125789db6dfd3047775baeb3ecc0a11ba0dfed4368e_prof);

    }

    public function getTemplateName()
    {
        return "::login_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <p>Vous vous êtes correctement authentifié</p>*/
/*     <p>Bonjour,</p>*/
/* */
/*     <p><a href="{{ path('client_page') }}">Accéder à l'espace réservé aux clients</a></p>*/
/* */
/*     <p><a href="{{ path('admin_page') }}">Accéder à l'espace réservé aux administrateurs</a></p>*/
/* */
/* {% endblock %}*/
