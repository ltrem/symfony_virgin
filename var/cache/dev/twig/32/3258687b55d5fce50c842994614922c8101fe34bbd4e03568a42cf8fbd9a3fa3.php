<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_02e766b1fd9ac035e7423b81e5a08c4fa35bdb3f0fa463e4d74d18a7b57c442c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e55dda8f1b19e577d06eb5b76328ec283e702342b764921cb274e29d95ca6c56 = $this->env->getExtension("native_profiler");
        $__internal_e55dda8f1b19e577d06eb5b76328ec283e702342b764921cb274e29d95ca6c56->enter($__internal_e55dda8f1b19e577d06eb5b76328ec283e702342b764921cb274e29d95ca6c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55dda8f1b19e577d06eb5b76328ec283e702342b764921cb274e29d95ca6c56->leave($__internal_e55dda8f1b19e577d06eb5b76328ec283e702342b764921cb274e29d95ca6c56_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
