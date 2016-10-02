<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_0223c485f327084b1bf232bd2a54985d6e37566b4ee722f2d3c160f349cad5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb83fe0bcd44bfa42c4acbf88dbe4c228b30712bec42a2a4f5d24d17e47e9d86 = $this->env->getExtension("native_profiler");
        $__internal_cb83fe0bcd44bfa42c4acbf88dbe4c228b30712bec42a2a4f5d24d17e47e9d86->enter($__internal_cb83fe0bcd44bfa42c4acbf88dbe4c228b30712bec42a2a4f5d24d17e47e9d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb83fe0bcd44bfa42c4acbf88dbe4c228b30712bec42a2a4f5d24d17e47e9d86->leave($__internal_cb83fe0bcd44bfa42c4acbf88dbe4c228b30712bec42a2a4f5d24d17e47e9d86_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
