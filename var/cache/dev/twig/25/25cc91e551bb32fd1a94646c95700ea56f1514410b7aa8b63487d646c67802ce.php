<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9e098346cc0d78ea18049e66ea71f70b1190814ee4e81c71b27f7ee12ee53cb3 extends Twig_Template
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
        $__internal_3b50133b63bcd2a6874c3e793e6e8abdfe50e739f5b9a0310e1c7b742a69ebca = $this->env->getExtension("native_profiler");
        $__internal_3b50133b63bcd2a6874c3e793e6e8abdfe50e739f5b9a0310e1c7b742a69ebca->enter($__internal_3b50133b63bcd2a6874c3e793e6e8abdfe50e739f5b9a0310e1c7b742a69ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3b50133b63bcd2a6874c3e793e6e8abdfe50e739f5b9a0310e1c7b742a69ebca->leave($__internal_3b50133b63bcd2a6874c3e793e6e8abdfe50e739f5b9a0310e1c7b742a69ebca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
