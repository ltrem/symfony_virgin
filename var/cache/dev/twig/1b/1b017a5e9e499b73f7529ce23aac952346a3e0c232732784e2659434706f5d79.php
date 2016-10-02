<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5cade88c43f276f76939713417fca5c81afedd5b819e99762de05fc9594d2cb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b0220be524d0f3e57ef43bf2761bb55cc4263a2a6c42c2cdfcb1fc89740bcde8 = $this->env->getExtension("native_profiler");
        $__internal_b0220be524d0f3e57ef43bf2761bb55cc4263a2a6c42c2cdfcb1fc89740bcde8->enter($__internal_b0220be524d0f3e57ef43bf2761bb55cc4263a2a6c42c2cdfcb1fc89740bcde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0220be524d0f3e57ef43bf2761bb55cc4263a2a6c42c2cdfcb1fc89740bcde8->leave($__internal_b0220be524d0f3e57ef43bf2761bb55cc4263a2a6c42c2cdfcb1fc89740bcde8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46b030934ec805a038ab64a08fa75902158a0d4cfd2909b6e9c9f687c6fcd368 = $this->env->getExtension("native_profiler");
        $__internal_46b030934ec805a038ab64a08fa75902158a0d4cfd2909b6e9c9f687c6fcd368->enter($__internal_46b030934ec805a038ab64a08fa75902158a0d4cfd2909b6e9c9f687c6fcd368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_46b030934ec805a038ab64a08fa75902158a0d4cfd2909b6e9c9f687c6fcd368->leave($__internal_46b030934ec805a038ab64a08fa75902158a0d4cfd2909b6e9c9f687c6fcd368_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
