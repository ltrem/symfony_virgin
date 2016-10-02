<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8e9bb5f979a3d85d7536d14d22d85540202dc5ed77658867013f11c35ee518f7 extends Twig_Template
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
        $__internal_ffbecf7ce148b72e7de51fe4319f5150670c355bf1955e56b627628168800a50 = $this->env->getExtension("native_profiler");
        $__internal_ffbecf7ce148b72e7de51fe4319f5150670c355bf1955e56b627628168800a50->enter($__internal_ffbecf7ce148b72e7de51fe4319f5150670c355bf1955e56b627628168800a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ffbecf7ce148b72e7de51fe4319f5150670c355bf1955e56b627628168800a50->leave($__internal_ffbecf7ce148b72e7de51fe4319f5150670c355bf1955e56b627628168800a50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
