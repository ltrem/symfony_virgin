<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_28d98d6405be147bc0a7286ef03015729dde8655baa5801162e37bff997d9e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_edf16c6922e335eedb90063c4d6ac3f6bed64255d80834f54b78ff60e0ebe1b2 = $this->env->getExtension("native_profiler");
        $__internal_edf16c6922e335eedb90063c4d6ac3f6bed64255d80834f54b78ff60e0ebe1b2->enter($__internal_edf16c6922e335eedb90063c4d6ac3f6bed64255d80834f54b78ff60e0ebe1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf16c6922e335eedb90063c4d6ac3f6bed64255d80834f54b78ff60e0ebe1b2->leave($__internal_edf16c6922e335eedb90063c4d6ac3f6bed64255d80834f54b78ff60e0ebe1b2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_71d3f8a1a3c281faf40e987ebeb50e621ec0b333787069d70123f3ecb250c909 = $this->env->getExtension("native_profiler");
        $__internal_71d3f8a1a3c281faf40e987ebeb50e621ec0b333787069d70123f3ecb250c909->enter($__internal_71d3f8a1a3c281faf40e987ebeb50e621ec0b333787069d70123f3ecb250c909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_71d3f8a1a3c281faf40e987ebeb50e621ec0b333787069d70123f3ecb250c909->leave($__internal_71d3f8a1a3c281faf40e987ebeb50e621ec0b333787069d70123f3ecb250c909_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
