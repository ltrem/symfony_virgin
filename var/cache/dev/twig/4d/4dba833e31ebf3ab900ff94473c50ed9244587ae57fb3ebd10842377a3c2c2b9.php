<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_e240879a4b4ce1a925983485738acaf75257e670258bd80e827eb633bc2755c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_8dd595cfd8121461888e8cdc0f60af8ef3084193d7ea85623df8cabda9fabdcb = $this->env->getExtension("native_profiler");
        $__internal_8dd595cfd8121461888e8cdc0f60af8ef3084193d7ea85623df8cabda9fabdcb->enter($__internal_8dd595cfd8121461888e8cdc0f60af8ef3084193d7ea85623df8cabda9fabdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd595cfd8121461888e8cdc0f60af8ef3084193d7ea85623df8cabda9fabdcb->leave($__internal_8dd595cfd8121461888e8cdc0f60af8ef3084193d7ea85623df8cabda9fabdcb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_14a6109fb2ce200ad9bf44e8d22c05c14a670f4ae55aab9b28aff7edc1f789b0 = $this->env->getExtension("native_profiler");
        $__internal_14a6109fb2ce200ad9bf44e8d22c05c14a670f4ae55aab9b28aff7edc1f789b0->enter($__internal_14a6109fb2ce200ad9bf44e8d22c05c14a670f4ae55aab9b28aff7edc1f789b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_14a6109fb2ce200ad9bf44e8d22c05c14a670f4ae55aab9b28aff7edc1f789b0->leave($__internal_14a6109fb2ce200ad9bf44e8d22c05c14a670f4ae55aab9b28aff7edc1f789b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
