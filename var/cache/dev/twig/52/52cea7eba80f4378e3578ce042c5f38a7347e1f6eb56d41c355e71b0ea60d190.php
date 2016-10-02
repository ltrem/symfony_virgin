<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_6a2b65fd0e3f0180f9767f53425321cbe9a5b876d4394d96854027dc8ae95b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_bfa4a6d1029e0199c26d6936e529b523cf17fb3da57bfa88f3f9380f496db438 = $this->env->getExtension("native_profiler");
        $__internal_bfa4a6d1029e0199c26d6936e529b523cf17fb3da57bfa88f3f9380f496db438->enter($__internal_bfa4a6d1029e0199c26d6936e529b523cf17fb3da57bfa88f3f9380f496db438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa4a6d1029e0199c26d6936e529b523cf17fb3da57bfa88f3f9380f496db438->leave($__internal_bfa4a6d1029e0199c26d6936e529b523cf17fb3da57bfa88f3f9380f496db438_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_669c0ca362caefce863f52e68dfdade3bb2ebd57b2e23135a1d12ef0ddf92b2e = $this->env->getExtension("native_profiler");
        $__internal_669c0ca362caefce863f52e68dfdade3bb2ebd57b2e23135a1d12ef0ddf92b2e->enter($__internal_669c0ca362caefce863f52e68dfdade3bb2ebd57b2e23135a1d12ef0ddf92b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_669c0ca362caefce863f52e68dfdade3bb2ebd57b2e23135a1d12ef0ddf92b2e->leave($__internal_669c0ca362caefce863f52e68dfdade3bb2ebd57b2e23135a1d12ef0ddf92b2e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
