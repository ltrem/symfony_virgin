<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_566a70695087e913071aa0dd99c03e5562ea667ecd017b640d6b1372dd128abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a95a7c9eda75d16dfd0e04eb0885a668fa1a259b2a036ef279ce7dbef58461a9 = $this->env->getExtension("native_profiler");
        $__internal_a95a7c9eda75d16dfd0e04eb0885a668fa1a259b2a036ef279ce7dbef58461a9->enter($__internal_a95a7c9eda75d16dfd0e04eb0885a668fa1a259b2a036ef279ce7dbef58461a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a95a7c9eda75d16dfd0e04eb0885a668fa1a259b2a036ef279ce7dbef58461a9->leave($__internal_a95a7c9eda75d16dfd0e04eb0885a668fa1a259b2a036ef279ce7dbef58461a9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
