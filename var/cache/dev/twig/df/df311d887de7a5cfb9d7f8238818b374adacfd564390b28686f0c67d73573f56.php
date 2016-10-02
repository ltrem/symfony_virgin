<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_54e34d0d670dbbe2cce4638bc471ea394e51f69c2cdf8e40323618af95473150 extends Twig_Template
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
        $__internal_b456a76614c483035bdaa89132a835b84341723a3b24058b8ad08ae687a5ad27 = $this->env->getExtension("native_profiler");
        $__internal_b456a76614c483035bdaa89132a835b84341723a3b24058b8ad08ae687a5ad27->enter($__internal_b456a76614c483035bdaa89132a835b84341723a3b24058b8ad08ae687a5ad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b456a76614c483035bdaa89132a835b84341723a3b24058b8ad08ae687a5ad27->leave($__internal_b456a76614c483035bdaa89132a835b84341723a3b24058b8ad08ae687a5ad27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
