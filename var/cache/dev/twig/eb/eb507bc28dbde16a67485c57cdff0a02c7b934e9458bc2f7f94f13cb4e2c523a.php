<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_212d904753cfd9012c36e5d4600c7bf30f9909a90537095ce9452d1df122531d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_464056f3f940e686f2f29665b3a401da0f95aca09b5aa7427140810c592856e5 = $this->env->getExtension("native_profiler");
        $__internal_464056f3f940e686f2f29665b3a401da0f95aca09b5aa7427140810c592856e5->enter($__internal_464056f3f940e686f2f29665b3a401da0f95aca09b5aa7427140810c592856e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464056f3f940e686f2f29665b3a401da0f95aca09b5aa7427140810c592856e5->leave($__internal_464056f3f940e686f2f29665b3a401da0f95aca09b5aa7427140810c592856e5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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
