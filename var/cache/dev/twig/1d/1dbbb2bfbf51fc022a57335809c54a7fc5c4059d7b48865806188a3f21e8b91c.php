<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_481225a657bf6852ed1a88a2ebcdf9fa396b9e7a92a0b72b541a94fcbcac97dc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db58b0ec9f02eeaf798fdb9401c2dc6d1df6e8f7de4609f6875fb087b2b14b24 = $this->env->getExtension("native_profiler");
        $__internal_db58b0ec9f02eeaf798fdb9401c2dc6d1df6e8f7de4609f6875fb087b2b14b24->enter($__internal_db58b0ec9f02eeaf798fdb9401c2dc6d1df6e8f7de4609f6875fb087b2b14b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db58b0ec9f02eeaf798fdb9401c2dc6d1df6e8f7de4609f6875fb087b2b14b24->leave($__internal_db58b0ec9f02eeaf798fdb9401c2dc6d1df6e8f7de4609f6875fb087b2b14b24_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5592df8faad749226d88b08dff9c5ece0a514f9ee33110b9940e2aee2d828788 = $this->env->getExtension("native_profiler");
        $__internal_5592df8faad749226d88b08dff9c5ece0a514f9ee33110b9940e2aee2d828788->enter($__internal_5592df8faad749226d88b08dff9c5ece0a514f9ee33110b9940e2aee2d828788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5592df8faad749226d88b08dff9c5ece0a514f9ee33110b9940e2aee2d828788->leave($__internal_5592df8faad749226d88b08dff9c5ece0a514f9ee33110b9940e2aee2d828788_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
