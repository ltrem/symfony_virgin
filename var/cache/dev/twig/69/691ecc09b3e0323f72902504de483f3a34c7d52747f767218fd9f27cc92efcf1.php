<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_a3c23954966c68cade56fb4c5e87f38453e65cb6bd78463f9197c6b6aa303622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb06fb716f677658759a2a85c4312adb6c893268f84812170cb907ad3d922391 = $this->env->getExtension("native_profiler");
        $__internal_bb06fb716f677658759a2a85c4312adb6c893268f84812170cb907ad3d922391->enter($__internal_bb06fb716f677658759a2a85c4312adb6c893268f84812170cb907ad3d922391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb06fb716f677658759a2a85c4312adb6c893268f84812170cb907ad3d922391->leave($__internal_bb06fb716f677658759a2a85c4312adb6c893268f84812170cb907ad3d922391_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
