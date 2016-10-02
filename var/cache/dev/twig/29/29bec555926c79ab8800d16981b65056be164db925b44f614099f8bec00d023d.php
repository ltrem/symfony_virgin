<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_99b0b8160adad9be75b5cdfa8ff622d0ccb20c727e32bc9e588b2afc713006c2 extends Twig_Template
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
        $__internal_fb8157f02a5f6e523d530bb673756936412bab44378e4bd459e795fa5992e9fe = $this->env->getExtension("native_profiler");
        $__internal_fb8157f02a5f6e523d530bb673756936412bab44378e4bd459e795fa5992e9fe->enter($__internal_fb8157f02a5f6e523d530bb673756936412bab44378e4bd459e795fa5992e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fb8157f02a5f6e523d530bb673756936412bab44378e4bd459e795fa5992e9fe->leave($__internal_fb8157f02a5f6e523d530bb673756936412bab44378e4bd459e795fa5992e9fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
