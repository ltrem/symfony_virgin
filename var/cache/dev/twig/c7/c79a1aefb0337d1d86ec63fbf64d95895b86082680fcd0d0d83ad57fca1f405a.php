<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6741cb4760edc5225ef0b59f3963e77a1ab96911bdd0a8f984e7a118bf4cd93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_5b3fa45ecdcea47a7223effd93b44f22a0d3b81469d349de69e0b571f81b3978 = $this->env->getExtension("native_profiler");
        $__internal_5b3fa45ecdcea47a7223effd93b44f22a0d3b81469d349de69e0b571f81b3978->enter($__internal_5b3fa45ecdcea47a7223effd93b44f22a0d3b81469d349de69e0b571f81b3978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3fa45ecdcea47a7223effd93b44f22a0d3b81469d349de69e0b571f81b3978->leave($__internal_5b3fa45ecdcea47a7223effd93b44f22a0d3b81469d349de69e0b571f81b3978_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_413e32e1b8b35d6dcf6f19bb2850debb59525c3e1a3abdd94dfd34aae72165e1 = $this->env->getExtension("native_profiler");
        $__internal_413e32e1b8b35d6dcf6f19bb2850debb59525c3e1a3abdd94dfd34aae72165e1->enter($__internal_413e32e1b8b35d6dcf6f19bb2850debb59525c3e1a3abdd94dfd34aae72165e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_413e32e1b8b35d6dcf6f19bb2850debb59525c3e1a3abdd94dfd34aae72165e1->leave($__internal_413e32e1b8b35d6dcf6f19bb2850debb59525c3e1a3abdd94dfd34aae72165e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
