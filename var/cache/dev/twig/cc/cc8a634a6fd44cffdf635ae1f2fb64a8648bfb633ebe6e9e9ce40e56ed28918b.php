<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_957ba93ddb0b700d394fc773272083a061e6fc86088a2184fc8092038320bdd9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e234a8fecd2bc5f9af2880c5f2e87e3100c872487e9d246a29075123c2e3a7c = $this->env->getExtension("native_profiler");
        $__internal_1e234a8fecd2bc5f9af2880c5f2e87e3100c872487e9d246a29075123c2e3a7c->enter($__internal_1e234a8fecd2bc5f9af2880c5f2e87e3100c872487e9d246a29075123c2e3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e234a8fecd2bc5f9af2880c5f2e87e3100c872487e9d246a29075123c2e3a7c->leave($__internal_1e234a8fecd2bc5f9af2880c5f2e87e3100c872487e9d246a29075123c2e3a7c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bef3c453c8743fc0835746a08fc0d5ec8363a08395d31596a0e78a30b7299ebf = $this->env->getExtension("native_profiler");
        $__internal_bef3c453c8743fc0835746a08fc0d5ec8363a08395d31596a0e78a30b7299ebf->enter($__internal_bef3c453c8743fc0835746a08fc0d5ec8363a08395d31596a0e78a30b7299ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_bef3c453c8743fc0835746a08fc0d5ec8363a08395d31596a0e78a30b7299ebf->leave($__internal_bef3c453c8743fc0835746a08fc0d5ec8363a08395d31596a0e78a30b7299ebf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
