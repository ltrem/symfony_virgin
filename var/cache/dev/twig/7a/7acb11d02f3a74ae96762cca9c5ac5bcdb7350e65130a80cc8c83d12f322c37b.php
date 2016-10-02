<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_60aa93c211b051e52aeb6def55bf695a2bb63781521714b1d339435210555735 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfcdaf921a5cb4c9e5e72675547099bdfb33958a017f5dd826295c4565fddcd1 = $this->env->getExtension("native_profiler");
        $__internal_cfcdaf921a5cb4c9e5e72675547099bdfb33958a017f5dd826295c4565fddcd1->enter($__internal_cfcdaf921a5cb4c9e5e72675547099bdfb33958a017f5dd826295c4565fddcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcdaf921a5cb4c9e5e72675547099bdfb33958a017f5dd826295c4565fddcd1->leave($__internal_cfcdaf921a5cb4c9e5e72675547099bdfb33958a017f5dd826295c4565fddcd1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f18da1755449434cd6a17d3d2bdee819d8053523382f6b7168c2801ed8541b3d = $this->env->getExtension("native_profiler");
        $__internal_f18da1755449434cd6a17d3d2bdee819d8053523382f6b7168c2801ed8541b3d->enter($__internal_f18da1755449434cd6a17d3d2bdee819d8053523382f6b7168c2801ed8541b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f18da1755449434cd6a17d3d2bdee819d8053523382f6b7168c2801ed8541b3d->leave($__internal_f18da1755449434cd6a17d3d2bdee819d8053523382f6b7168c2801ed8541b3d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
