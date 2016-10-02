<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4b6583e5c510aac1050c6fb5da53d1f7f06363ff3ef78be828c8d86c8a1010a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_279bd2a50f91cc0dd4ee567ac6ef5c15254011ef38a5ff01a9553a3688f5ba52 = $this->env->getExtension("native_profiler");
        $__internal_279bd2a50f91cc0dd4ee567ac6ef5c15254011ef38a5ff01a9553a3688f5ba52->enter($__internal_279bd2a50f91cc0dd4ee567ac6ef5c15254011ef38a5ff01a9553a3688f5ba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_279bd2a50f91cc0dd4ee567ac6ef5c15254011ef38a5ff01a9553a3688f5ba52->leave($__internal_279bd2a50f91cc0dd4ee567ac6ef5c15254011ef38a5ff01a9553a3688f5ba52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
