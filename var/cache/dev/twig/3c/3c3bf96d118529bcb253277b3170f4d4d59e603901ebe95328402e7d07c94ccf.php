<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_c2487dd3ef63d996b06a884ff71390602fa230766d14dc8340a788703c949b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd6cc86e4a009830090341102e929cbedf84176250d75407807399cbac1d01fc = $this->env->getExtension("native_profiler");
        $__internal_cd6cc86e4a009830090341102e929cbedf84176250d75407807399cbac1d01fc->enter($__internal_cd6cc86e4a009830090341102e929cbedf84176250d75407807399cbac1d01fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd6cc86e4a009830090341102e929cbedf84176250d75407807399cbac1d01fc->leave($__internal_cd6cc86e4a009830090341102e929cbedf84176250d75407807399cbac1d01fc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e60974c87b4df410167846b928d3bb804f4d39cb55392f5161faef755aac450a = $this->env->getExtension("native_profiler");
        $__internal_e60974c87b4df410167846b928d3bb804f4d39cb55392f5161faef755aac450a->enter($__internal_e60974c87b4df410167846b928d3bb804f4d39cb55392f5161faef755aac450a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_e60974c87b4df410167846b928d3bb804f4d39cb55392f5161faef755aac450a->leave($__internal_e60974c87b4df410167846b928d3bb804f4d39cb55392f5161faef755aac450a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
