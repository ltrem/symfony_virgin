<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f456214bcf9d2d2515edf4090cdc6279c597643cf5c6d87870e42e5ac4bc2a37 extends Twig_Template
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
        $__internal_5312947011127a0626330d7949dfed376c72d79299f8a5e6fa1da9396c7d4045 = $this->env->getExtension("native_profiler");
        $__internal_5312947011127a0626330d7949dfed376c72d79299f8a5e6fa1da9396c7d4045->enter($__internal_5312947011127a0626330d7949dfed376c72d79299f8a5e6fa1da9396c7d4045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5312947011127a0626330d7949dfed376c72d79299f8a5e6fa1da9396c7d4045->leave($__internal_5312947011127a0626330d7949dfed376c72d79299f8a5e6fa1da9396c7d4045_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
