<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_a597b4a65ccbacd0e58d505c96aeaae989fd5c5d395c7427da7c9217a76f3295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_218e37ed6b8d6c653d7025ca9ee3564c3410badca8aaa1d600997bd5b95623eb = $this->env->getExtension("native_profiler");
        $__internal_218e37ed6b8d6c653d7025ca9ee3564c3410badca8aaa1d600997bd5b95623eb->enter($__internal_218e37ed6b8d6c653d7025ca9ee3564c3410badca8aaa1d600997bd5b95623eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218e37ed6b8d6c653d7025ca9ee3564c3410badca8aaa1d600997bd5b95623eb->leave($__internal_218e37ed6b8d6c653d7025ca9ee3564c3410badca8aaa1d600997bd5b95623eb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f25e9857b2136d259c2160560e51daec681faa5d85ba71dd02304e5d0ff00115 = $this->env->getExtension("native_profiler");
        $__internal_f25e9857b2136d259c2160560e51daec681faa5d85ba71dd02304e5d0ff00115->enter($__internal_f25e9857b2136d259c2160560e51daec681faa5d85ba71dd02304e5d0ff00115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_f25e9857b2136d259c2160560e51daec681faa5d85ba71dd02304e5d0ff00115->leave($__internal_f25e9857b2136d259c2160560e51daec681faa5d85ba71dd02304e5d0ff00115_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
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
