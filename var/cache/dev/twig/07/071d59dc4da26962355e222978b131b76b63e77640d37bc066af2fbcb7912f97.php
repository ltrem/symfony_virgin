<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1e50b8035c1d12f26c769d129d18819045671c4607db4f943f9d327d381bf458 extends Twig_Template
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
        $__internal_66eb758dace76a40c967905ed60f1c38e2521ff443a94b7c77a2c9ed64bef2a2 = $this->env->getExtension("native_profiler");
        $__internal_66eb758dace76a40c967905ed60f1c38e2521ff443a94b7c77a2c9ed64bef2a2->enter($__internal_66eb758dace76a40c967905ed60f1c38e2521ff443a94b7c77a2c9ed64bef2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_66eb758dace76a40c967905ed60f1c38e2521ff443a94b7c77a2c9ed64bef2a2->leave($__internal_66eb758dace76a40c967905ed60f1c38e2521ff443a94b7c77a2c9ed64bef2a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
