<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_075c9fd1392952e6e4e32658482e3c522de2af9b33883d87d0090fb0b06b3512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6343ef4564632235222c00c4aeacc721b3f5dfcfd49cfcb204a459016dd64a89 = $this->env->getExtension("native_profiler");
        $__internal_6343ef4564632235222c00c4aeacc721b3f5dfcfd49cfcb204a459016dd64a89->enter($__internal_6343ef4564632235222c00c4aeacc721b3f5dfcfd49cfcb204a459016dd64a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6343ef4564632235222c00c4aeacc721b3f5dfcfd49cfcb204a459016dd64a89->leave($__internal_6343ef4564632235222c00c4aeacc721b3f5dfcfd49cfcb204a459016dd64a89_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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
