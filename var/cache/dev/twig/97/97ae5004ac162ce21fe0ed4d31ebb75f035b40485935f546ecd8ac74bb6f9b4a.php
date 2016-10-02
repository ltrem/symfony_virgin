<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_b0c19128973267fda143bcc095279e29d2d3c5b12fe88c12ddd14a20b33ce33a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59acbf952c0fc8a2fe7a5214e64993e243b640ea47fa71264aec856f59e23faa = $this->env->getExtension("native_profiler");
        $__internal_59acbf952c0fc8a2fe7a5214e64993e243b640ea47fa71264aec856f59e23faa->enter($__internal_59acbf952c0fc8a2fe7a5214e64993e243b640ea47fa71264aec856f59e23faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59acbf952c0fc8a2fe7a5214e64993e243b640ea47fa71264aec856f59e23faa->leave($__internal_59acbf952c0fc8a2fe7a5214e64993e243b640ea47fa71264aec856f59e23faa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_23caccdeed7abe506adbe4d7d67661e82f966406961c89a2499778687c07026e = $this->env->getExtension("native_profiler");
        $__internal_23caccdeed7abe506adbe4d7d67661e82f966406961c89a2499778687c07026e->enter($__internal_23caccdeed7abe506adbe4d7d67661e82f966406961c89a2499778687c07026e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_23caccdeed7abe506adbe4d7d67661e82f966406961c89a2499778687c07026e->leave($__internal_23caccdeed7abe506adbe4d7d67661e82f966406961c89a2499778687c07026e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
