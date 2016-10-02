<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_249789c0825f17f7e4bd3f641aab3bb3e5ace43fb37fc738f3aa4c5a8fd411e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b4f091c68ddc30ea62b10cd926b54982e1c1ae588b83458213c2a317110687 = $this->env->getExtension("native_profiler");
        $__internal_33b4f091c68ddc30ea62b10cd926b54982e1c1ae588b83458213c2a317110687->enter($__internal_33b4f091c68ddc30ea62b10cd926b54982e1c1ae588b83458213c2a317110687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b4f091c68ddc30ea62b10cd926b54982e1c1ae588b83458213c2a317110687->leave($__internal_33b4f091c68ddc30ea62b10cd926b54982e1c1ae588b83458213c2a317110687_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
