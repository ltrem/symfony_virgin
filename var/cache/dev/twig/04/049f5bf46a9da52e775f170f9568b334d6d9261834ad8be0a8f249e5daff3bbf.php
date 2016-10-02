<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_ad3ab5f14ac64f0f57d6c85be298ebe243c504473a6372dc7b39424b3241c418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ca037975769263c40c87f6bf26b9f75234e3fdd1fb41bedfd692cfec2bf849 = $this->env->getExtension("native_profiler");
        $__internal_86ca037975769263c40c87f6bf26b9f75234e3fdd1fb41bedfd692cfec2bf849->enter($__internal_86ca037975769263c40c87f6bf26b9f75234e3fdd1fb41bedfd692cfec2bf849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ca037975769263c40c87f6bf26b9f75234e3fdd1fb41bedfd692cfec2bf849->leave($__internal_86ca037975769263c40c87f6bf26b9f75234e3fdd1fb41bedfd692cfec2bf849_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
