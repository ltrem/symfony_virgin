<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_31c813a91a795257c4b46691a9319cdb03c1fcc1987b61e3dd0683cdbac8a4ff extends Twig_Template
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
        $__internal_571780be3d1ac804a7fa983acc2f63a3dc2fb62bbe0945ccccfa29a215b247d8 = $this->env->getExtension("native_profiler");
        $__internal_571780be3d1ac804a7fa983acc2f63a3dc2fb62bbe0945ccccfa29a215b247d8->enter($__internal_571780be3d1ac804a7fa983acc2f63a3dc2fb62bbe0945ccccfa29a215b247d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_571780be3d1ac804a7fa983acc2f63a3dc2fb62bbe0945ccccfa29a215b247d8->leave($__internal_571780be3d1ac804a7fa983acc2f63a3dc2fb62bbe0945ccccfa29a215b247d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
