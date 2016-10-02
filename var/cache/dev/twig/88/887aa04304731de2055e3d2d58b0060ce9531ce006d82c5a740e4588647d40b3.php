<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_24ad6fa4c58f7b6948d87da4c8e7f2bcfbf9f91513df82406fc68248c24677f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_94245c772d63ac9934aaf79cc0cebba05838a62d7317fb33cd4ca913b3c305f9 = $this->env->getExtension("native_profiler");
        $__internal_94245c772d63ac9934aaf79cc0cebba05838a62d7317fb33cd4ca913b3c305f9->enter($__internal_94245c772d63ac9934aaf79cc0cebba05838a62d7317fb33cd4ca913b3c305f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94245c772d63ac9934aaf79cc0cebba05838a62d7317fb33cd4ca913b3c305f9->leave($__internal_94245c772d63ac9934aaf79cc0cebba05838a62d7317fb33cd4ca913b3c305f9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d28abc0d31cddb35a949dc167b2a3896d9ab5ecd6e052f20a6f9fd76418c90da = $this->env->getExtension("native_profiler");
        $__internal_d28abc0d31cddb35a949dc167b2a3896d9ab5ecd6e052f20a6f9fd76418c90da->enter($__internal_d28abc0d31cddb35a949dc167b2a3896d9ab5ecd6e052f20a6f9fd76418c90da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d28abc0d31cddb35a949dc167b2a3896d9ab5ecd6e052f20a6f9fd76418c90da->leave($__internal_d28abc0d31cddb35a949dc167b2a3896d9ab5ecd6e052f20a6f9fd76418c90da_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
