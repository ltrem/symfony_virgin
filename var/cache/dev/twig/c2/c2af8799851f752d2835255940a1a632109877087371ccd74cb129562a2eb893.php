<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_756cd55c5db08ee7c521b9fe50c83c9ec815f16543ce930e68ba213c852c8faf extends Twig_Template
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
        $__internal_8fa2771d63106038f6fa517e1101ed6b5e57faf0c901fba699016bde2d13b6c0 = $this->env->getExtension("native_profiler");
        $__internal_8fa2771d63106038f6fa517e1101ed6b5e57faf0c901fba699016bde2d13b6c0->enter($__internal_8fa2771d63106038f6fa517e1101ed6b5e57faf0c901fba699016bde2d13b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_8fa2771d63106038f6fa517e1101ed6b5e57faf0c901fba699016bde2d13b6c0->leave($__internal_8fa2771d63106038f6fa517e1101ed6b5e57faf0c901fba699016bde2d13b6c0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
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
