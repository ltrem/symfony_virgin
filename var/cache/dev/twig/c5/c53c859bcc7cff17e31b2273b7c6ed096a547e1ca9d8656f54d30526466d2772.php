<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e24cf8193070fb8a3dde28f3d99ebce1f4c86ee4712e128855f05a7bbd59d2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_753a641b8063f79f06135cde81250c03ef5fce03af7429285ddb3ed1a8c2d11a = $this->env->getExtension("native_profiler");
        $__internal_753a641b8063f79f06135cde81250c03ef5fce03af7429285ddb3ed1a8c2d11a->enter($__internal_753a641b8063f79f06135cde81250c03ef5fce03af7429285ddb3ed1a8c2d11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753a641b8063f79f06135cde81250c03ef5fce03af7429285ddb3ed1a8c2d11a->leave($__internal_753a641b8063f79f06135cde81250c03ef5fce03af7429285ddb3ed1a8c2d11a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87929bf3b9c0d6e256f8eea1c0422b1f14193a39384958453d6d0b2c9adde3c4 = $this->env->getExtension("native_profiler");
        $__internal_87929bf3b9c0d6e256f8eea1c0422b1f14193a39384958453d6d0b2c9adde3c4->enter($__internal_87929bf3b9c0d6e256f8eea1c0422b1f14193a39384958453d6d0b2c9adde3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_87929bf3b9c0d6e256f8eea1c0422b1f14193a39384958453d6d0b2c9adde3c4->leave($__internal_87929bf3b9c0d6e256f8eea1c0422b1f14193a39384958453d6d0b2c9adde3c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
