<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_59bca39ae2ace0f7605916f95e2e74a198b9abe2880c4d1596a2a01cf8c778ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce619f72ab8fcc0dd848a882a40c8daa11195de8375c9c1b74b8583412957224 = $this->env->getExtension("native_profiler");
        $__internal_ce619f72ab8fcc0dd848a882a40c8daa11195de8375c9c1b74b8583412957224->enter($__internal_ce619f72ab8fcc0dd848a882a40c8daa11195de8375c9c1b74b8583412957224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce619f72ab8fcc0dd848a882a40c8daa11195de8375c9c1b74b8583412957224->leave($__internal_ce619f72ab8fcc0dd848a882a40c8daa11195de8375c9c1b74b8583412957224_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
