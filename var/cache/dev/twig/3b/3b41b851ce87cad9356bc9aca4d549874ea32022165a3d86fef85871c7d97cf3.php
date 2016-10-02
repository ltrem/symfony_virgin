<?php

/* ::client.html.twig */
class __TwigTemplate_3fb59029d105e11f6ef180f882c0d0cfe28f90fd6c8665bf9ad1eb59f9ffd934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::client.html.twig", 1);
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
        $__internal_f50ec387c8ec4ef5b58aa042c075f1021b87e4270c62a3c3416a6d404f2a4377 = $this->env->getExtension("native_profiler");
        $__internal_f50ec387c8ec4ef5b58aa042c075f1021b87e4270c62a3c3416a6d404f2a4377->enter($__internal_f50ec387c8ec4ef5b58aa042c075f1021b87e4270c62a3c3416a6d404f2a4377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50ec387c8ec4ef5b58aa042c075f1021b87e4270c62a3c3416a6d404f2a4377->leave($__internal_f50ec387c8ec4ef5b58aa042c075f1021b87e4270c62a3c3416a6d404f2a4377_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a1ee2bc5165e7dbaecc3c603dc5335f8fa34a6dd0b48a95abe7e695c4122bd = $this->env->getExtension("native_profiler");
        $__internal_41a1ee2bc5165e7dbaecc3c603dc5335f8fa34a6dd0b48a95abe7e695c4122bd->enter($__internal_41a1ee2bc5165e7dbaecc3c603dc5335f8fa34a6dd0b48a95abe7e695c4122bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Page client</h1>

    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a></p>

";
        
        $__internal_41a1ee2bc5165e7dbaecc3c603dc5335f8fa34a6dd0b48a95abe7e695c4122bd->leave($__internal_41a1ee2bc5165e7dbaecc3c603dc5335f8fa34a6dd0b48a95abe7e695c4122bd_prof);

    }

    public function getTemplateName()
    {
        return "::client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Page client</h1>*/
/* */
/*     <p><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></p>*/
/* */
/* {% endblock %}*/
