<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_7033b8282dd7cc8136a660b8fc6feb74e32c984f0ea00d2d1c8a75065555655f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56bb648c15abca30933585ba12759797b46a8d298fcccd5f04971960d57b750a = $this->env->getExtension("native_profiler");
        $__internal_56bb648c15abca30933585ba12759797b46a8d298fcccd5f04971960d57b750a->enter($__internal_56bb648c15abca30933585ba12759797b46a8d298fcccd5f04971960d57b750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bb648c15abca30933585ba12759797b46a8d298fcccd5f04971960d57b750a->leave($__internal_56bb648c15abca30933585ba12759797b46a8d298fcccd5f04971960d57b750a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
