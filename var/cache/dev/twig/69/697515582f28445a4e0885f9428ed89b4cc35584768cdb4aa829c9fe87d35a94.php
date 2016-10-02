<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4905f83891f6be05930460beaf35e4020dff1d8523740d4a3fe03524eec4ce8b extends Twig_Template
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
        $__internal_6d1c1014ecabd69720a80f636822519cc0ced7cae8a67ed5431cdc9b9d613afd = $this->env->getExtension("native_profiler");
        $__internal_6d1c1014ecabd69720a80f636822519cc0ced7cae8a67ed5431cdc9b9d613afd->enter($__internal_6d1c1014ecabd69720a80f636822519cc0ced7cae8a67ed5431cdc9b9d613afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6d1c1014ecabd69720a80f636822519cc0ced7cae8a67ed5431cdc9b9d613afd->leave($__internal_6d1c1014ecabd69720a80f636822519cc0ced7cae8a67ed5431cdc9b9d613afd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
