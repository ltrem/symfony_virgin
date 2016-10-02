<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_67fc1456724fdfcfd100eb7c352e70f39e29f869646e8646aada2f3dbfcfad81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f03f984f0f9761705528399d63c5114d3fadccdcb0a727fa8cc84f0b29701be = $this->env->getExtension("native_profiler");
        $__internal_3f03f984f0f9761705528399d63c5114d3fadccdcb0a727fa8cc84f0b29701be->enter($__internal_3f03f984f0f9761705528399d63c5114d3fadccdcb0a727fa8cc84f0b29701be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_3f03f984f0f9761705528399d63c5114d3fadccdcb0a727fa8cc84f0b29701be->leave($__internal_3f03f984f0f9761705528399d63c5114d3fadccdcb0a727fa8cc84f0b29701be_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
