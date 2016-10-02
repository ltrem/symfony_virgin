<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_36f0f054797acdf88fcd7bb7eb862b90205eec3d64308fb35e05022a7abad1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3179952d40b3a21bf15e7e3cc793ca3bb4724b61313747c62ae3e5441b50c169 = $this->env->getExtension("native_profiler");
        $__internal_3179952d40b3a21bf15e7e3cc793ca3bb4724b61313747c62ae3e5441b50c169->enter($__internal_3179952d40b3a21bf15e7e3cc793ca3bb4724b61313747c62ae3e5441b50c169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3179952d40b3a21bf15e7e3cc793ca3bb4724b61313747c62ae3e5441b50c169->leave($__internal_3179952d40b3a21bf15e7e3cc793ca3bb4724b61313747c62ae3e5441b50c169_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63535c2b4055cd173aaac7d7db879a2724e05b033313a6881222ecd3712127f1 = $this->env->getExtension("native_profiler");
        $__internal_63535c2b4055cd173aaac7d7db879a2724e05b033313a6881222ecd3712127f1->enter($__internal_63535c2b4055cd173aaac7d7db879a2724e05b033313a6881222ecd3712127f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_63535c2b4055cd173aaac7d7db879a2724e05b033313a6881222ecd3712127f1->leave($__internal_63535c2b4055cd173aaac7d7db879a2724e05b033313a6881222ecd3712127f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
