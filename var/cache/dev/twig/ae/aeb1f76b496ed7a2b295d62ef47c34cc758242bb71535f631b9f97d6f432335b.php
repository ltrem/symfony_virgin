<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_777a8f2b96391d7620e18ff90a4ffef10e694bb427c8e07a005486216d99b8da extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1504bf99162e227352719ae6635e6847231d2b4ecd429f807b7e7db06a746aa7 = $this->env->getExtension("native_profiler");
        $__internal_1504bf99162e227352719ae6635e6847231d2b4ecd429f807b7e7db06a746aa7->enter($__internal_1504bf99162e227352719ae6635e6847231d2b4ecd429f807b7e7db06a746aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1504bf99162e227352719ae6635e6847231d2b4ecd429f807b7e7db06a746aa7->leave($__internal_1504bf99162e227352719ae6635e6847231d2b4ecd429f807b7e7db06a746aa7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dc31123fbda27b420bd871bfaa4d2dacf673c6a21dc3c4c9d9f7eb580f26d540 = $this->env->getExtension("native_profiler");
        $__internal_dc31123fbda27b420bd871bfaa4d2dacf673c6a21dc3c4c9d9f7eb580f26d540->enter($__internal_dc31123fbda27b420bd871bfaa4d2dacf673c6a21dc3c4c9d9f7eb580f26d540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_dc31123fbda27b420bd871bfaa4d2dacf673c6a21dc3c4c9d9f7eb580f26d540->leave($__internal_dc31123fbda27b420bd871bfaa4d2dacf673c6a21dc3c4c9d9f7eb580f26d540_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
