<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_59bc90695777d15c31baa9fb318f7bad2cee69ba4696dd593ee7ec92c89f5cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35ca71e02eb0b5c0b4ddd45fbce9e5be4d1efa2d6d16b55a7e0b9c619a2e33ff = $this->env->getExtension("native_profiler");
        $__internal_35ca71e02eb0b5c0b4ddd45fbce9e5be4d1efa2d6d16b55a7e0b9c619a2e33ff->enter($__internal_35ca71e02eb0b5c0b4ddd45fbce9e5be4d1efa2d6d16b55a7e0b9c619a2e33ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ca71e02eb0b5c0b4ddd45fbce9e5be4d1efa2d6d16b55a7e0b9c619a2e33ff->leave($__internal_35ca71e02eb0b5c0b4ddd45fbce9e5be4d1efa2d6d16b55a7e0b9c619a2e33ff_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
