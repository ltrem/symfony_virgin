<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_75fe3e1e0d18fc15175391cc1a9cc8468aac3fdd6a7d9eab6cf7ab18f3091018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51a65b02c1716f2b2b70d50bdf8d2fbf5a0e58f32b46d202b8371fba260ec2e0 = $this->env->getExtension("native_profiler");
        $__internal_51a65b02c1716f2b2b70d50bdf8d2fbf5a0e58f32b46d202b8371fba260ec2e0->enter($__internal_51a65b02c1716f2b2b70d50bdf8d2fbf5a0e58f32b46d202b8371fba260ec2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a65b02c1716f2b2b70d50bdf8d2fbf5a0e58f32b46d202b8371fba260ec2e0->leave($__internal_51a65b02c1716f2b2b70d50bdf8d2fbf5a0e58f32b46d202b8371fba260ec2e0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f81cbd5de5de19cdf2581c133267df19f852bffb6e18331e9e47bb5c3c6a0e7e = $this->env->getExtension("native_profiler");
        $__internal_f81cbd5de5de19cdf2581c133267df19f852bffb6e18331e9e47bb5c3c6a0e7e->enter($__internal_f81cbd5de5de19cdf2581c133267df19f852bffb6e18331e9e47bb5c3c6a0e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_f81cbd5de5de19cdf2581c133267df19f852bffb6e18331e9e47bb5c3c6a0e7e->leave($__internal_f81cbd5de5de19cdf2581c133267df19f852bffb6e18331e9e47bb5c3c6a0e7e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
