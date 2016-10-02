<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8972daae9e5fc051018113937add7890d3f6d87f281b29fda46b0f412d3fde6c extends Twig_Template
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
        $__internal_a4cbfb88ea61fafbc09be1f7ebb2e00fea1830734fabd3b34687a353b0c7d7a5 = $this->env->getExtension("native_profiler");
        $__internal_a4cbfb88ea61fafbc09be1f7ebb2e00fea1830734fabd3b34687a353b0c7d7a5->enter($__internal_a4cbfb88ea61fafbc09be1f7ebb2e00fea1830734fabd3b34687a353b0c7d7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a4cbfb88ea61fafbc09be1f7ebb2e00fea1830734fabd3b34687a353b0c7d7a5->leave($__internal_a4cbfb88ea61fafbc09be1f7ebb2e00fea1830734fabd3b34687a353b0c7d7a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
