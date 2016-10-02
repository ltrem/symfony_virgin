<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_e9b8644603eafa322ff6c5ad34b09bedeac8293a90f4cc2f22ac1ccb8a27e58a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40f475d3a5f1fbb374609c5339f17610d0b668542588d03d8ba835634e91fb16 = $this->env->getExtension("native_profiler");
        $__internal_40f475d3a5f1fbb374609c5339f17610d0b668542588d03d8ba835634e91fb16->enter($__internal_40f475d3a5f1fbb374609c5339f17610d0b668542588d03d8ba835634e91fb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f475d3a5f1fbb374609c5339f17610d0b668542588d03d8ba835634e91fb16->leave($__internal_40f475d3a5f1fbb374609c5339f17610d0b668542588d03d8ba835634e91fb16_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7c808b6603c9520e78d4a3d7b2c6491d085dec256f7fd35c41973a885a33062d = $this->env->getExtension("native_profiler");
        $__internal_7c808b6603c9520e78d4a3d7b2c6491d085dec256f7fd35c41973a885a33062d->enter($__internal_7c808b6603c9520e78d4a3d7b2c6491d085dec256f7fd35c41973a885a33062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7c808b6603c9520e78d4a3d7b2c6491d085dec256f7fd35c41973a885a33062d->leave($__internal_7c808b6603c9520e78d4a3d7b2c6491d085dec256f7fd35c41973a885a33062d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
