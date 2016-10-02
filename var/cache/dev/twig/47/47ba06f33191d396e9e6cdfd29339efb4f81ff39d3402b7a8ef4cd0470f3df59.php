<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_70a07c81ab7a2d2551a4fcd1bc121ac63ee22822fe6832cc446252a75257e9b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f5819402ab4405a285b08e3f605bc359730a1527ae861e7ac33a69a7c4adcff = $this->env->getExtension("native_profiler");
        $__internal_4f5819402ab4405a285b08e3f605bc359730a1527ae861e7ac33a69a7c4adcff->enter($__internal_4f5819402ab4405a285b08e3f605bc359730a1527ae861e7ac33a69a7c4adcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f5819402ab4405a285b08e3f605bc359730a1527ae861e7ac33a69a7c4adcff->leave($__internal_4f5819402ab4405a285b08e3f605bc359730a1527ae861e7ac33a69a7c4adcff_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
