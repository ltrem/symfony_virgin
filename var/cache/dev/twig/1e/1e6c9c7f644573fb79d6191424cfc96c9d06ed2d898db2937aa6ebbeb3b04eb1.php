<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_fdddecafc9e69f2e4ca96228d4fa11a0deecd72bf841a720c684420ba6943ef0 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853ae84f1c529cbdfc19c7053ebc5899d5d9a87fd8d1f1620ccb487b53aa4c9f = $this->env->getExtension("native_profiler");
        $__internal_853ae84f1c529cbdfc19c7053ebc5899d5d9a87fd8d1f1620ccb487b53aa4c9f->enter($__internal_853ae84f1c529cbdfc19c7053ebc5899d5d9a87fd8d1f1620ccb487b53aa4c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853ae84f1c529cbdfc19c7053ebc5899d5d9a87fd8d1f1620ccb487b53aa4c9f->leave($__internal_853ae84f1c529cbdfc19c7053ebc5899d5d9a87fd8d1f1620ccb487b53aa4c9f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_edd1e03d8fc27ab1c2c901bb748a9cb5be29b8cf19e81302251eccb8190bb2e5 = $this->env->getExtension("native_profiler");
        $__internal_edd1e03d8fc27ab1c2c901bb748a9cb5be29b8cf19e81302251eccb8190bb2e5->enter($__internal_edd1e03d8fc27ab1c2c901bb748a9cb5be29b8cf19e81302251eccb8190bb2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_edd1e03d8fc27ab1c2c901bb748a9cb5be29b8cf19e81302251eccb8190bb2e5->leave($__internal_edd1e03d8fc27ab1c2c901bb748a9cb5be29b8cf19e81302251eccb8190bb2e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
