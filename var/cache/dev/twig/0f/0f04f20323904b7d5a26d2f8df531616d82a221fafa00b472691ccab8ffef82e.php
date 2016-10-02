<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_6f877697f71640dde667bfa524f80e545a131d80d643d23a0300169e4bf96f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f527fa13b84c0cded2fff84008e7d1bc9742c8b1f8365f4ba777373a67421a03 = $this->env->getExtension("native_profiler");
        $__internal_f527fa13b84c0cded2fff84008e7d1bc9742c8b1f8365f4ba777373a67421a03->enter($__internal_f527fa13b84c0cded2fff84008e7d1bc9742c8b1f8365f4ba777373a67421a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f527fa13b84c0cded2fff84008e7d1bc9742c8b1f8365f4ba777373a67421a03->leave($__internal_f527fa13b84c0cded2fff84008e7d1bc9742c8b1f8365f4ba777373a67421a03_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
