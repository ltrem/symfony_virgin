<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_b817f22b0f3fa3208402cfafef435d9b7c39aa96373c13ddb25787e4e0c14548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14a3482645609c131176c8d5db852f5c0256656e130d50a398e5a4c65f49ac15 = $this->env->getExtension("native_profiler");
        $__internal_14a3482645609c131176c8d5db852f5c0256656e130d50a398e5a4c65f49ac15->enter($__internal_14a3482645609c131176c8d5db852f5c0256656e130d50a398e5a4c65f49ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a3482645609c131176c8d5db852f5c0256656e130d50a398e5a4c65f49ac15->leave($__internal_14a3482645609c131176c8d5db852f5c0256656e130d50a398e5a4c65f49ac15_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
