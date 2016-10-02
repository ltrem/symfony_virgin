<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c735d9548857a84c59de1a04693597698031af842bab71b0aa31ac7fcac32e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_23c5c299b5b54b8fd607aaf76d65cc8cef51cfcbc93371d1008304054e9fe5d2 = $this->env->getExtension("native_profiler");
        $__internal_23c5c299b5b54b8fd607aaf76d65cc8cef51cfcbc93371d1008304054e9fe5d2->enter($__internal_23c5c299b5b54b8fd607aaf76d65cc8cef51cfcbc93371d1008304054e9fe5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c5c299b5b54b8fd607aaf76d65cc8cef51cfcbc93371d1008304054e9fe5d2->leave($__internal_23c5c299b5b54b8fd607aaf76d65cc8cef51cfcbc93371d1008304054e9fe5d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17ff0a601e4f2b8b97fb01dcbef4b8f9ebd61c99c69e8f89ed1e161ec3324ad3 = $this->env->getExtension("native_profiler");
        $__internal_17ff0a601e4f2b8b97fb01dcbef4b8f9ebd61c99c69e8f89ed1e161ec3324ad3->enter($__internal_17ff0a601e4f2b8b97fb01dcbef4b8f9ebd61c99c69e8f89ed1e161ec3324ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_17ff0a601e4f2b8b97fb01dcbef4b8f9ebd61c99c69e8f89ed1e161ec3324ad3->leave($__internal_17ff0a601e4f2b8b97fb01dcbef4b8f9ebd61c99c69e8f89ed1e161ec3324ad3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
