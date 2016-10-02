<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_60b5556978740870693bb0dea9afad02868296f8094cbae6edbb2367e51d2dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_99e515b12e01251b2c86f59e59c5206314397a32b1b3e649f1d994fe4701f915 = $this->env->getExtension("native_profiler");
        $__internal_99e515b12e01251b2c86f59e59c5206314397a32b1b3e649f1d994fe4701f915->enter($__internal_99e515b12e01251b2c86f59e59c5206314397a32b1b3e649f1d994fe4701f915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e515b12e01251b2c86f59e59c5206314397a32b1b3e649f1d994fe4701f915->leave($__internal_99e515b12e01251b2c86f59e59c5206314397a32b1b3e649f1d994fe4701f915_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_182e785ebb32fe202525d7ee2dee9eb8ff577370a752252767ad52e09d3f153f = $this->env->getExtension("native_profiler");
        $__internal_182e785ebb32fe202525d7ee2dee9eb8ff577370a752252767ad52e09d3f153f->enter($__internal_182e785ebb32fe202525d7ee2dee9eb8ff577370a752252767ad52e09d3f153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_182e785ebb32fe202525d7ee2dee9eb8ff577370a752252767ad52e09d3f153f->leave($__internal_182e785ebb32fe202525d7ee2dee9eb8ff577370a752252767ad52e09d3f153f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
