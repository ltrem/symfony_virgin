<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_2ea7ce95b97d57e7de31fa0ba558e9bf43215a131830745bb7f8a61601d2e887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ba1989c5ad88c185f044e3862d9a0ed441a75a34b9a576afd2222592639b105 = $this->env->getExtension("native_profiler");
        $__internal_9ba1989c5ad88c185f044e3862d9a0ed441a75a34b9a576afd2222592639b105->enter($__internal_9ba1989c5ad88c185f044e3862d9a0ed441a75a34b9a576afd2222592639b105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba1989c5ad88c185f044e3862d9a0ed441a75a34b9a576afd2222592639b105->leave($__internal_9ba1989c5ad88c185f044e3862d9a0ed441a75a34b9a576afd2222592639b105_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
