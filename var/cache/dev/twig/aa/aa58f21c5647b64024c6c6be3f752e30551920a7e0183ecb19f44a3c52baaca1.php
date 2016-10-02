<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_603b2b99ba362acb92644b32b2e093fd470fd5a5bb43f263e266498925909fa5 extends Twig_Template
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
        $__internal_97201becaf67d24a54eca160bb0b1ba63c0c9e22a19d09dd21ee204ee8e9b63e = $this->env->getExtension("native_profiler");
        $__internal_97201becaf67d24a54eca160bb0b1ba63c0c9e22a19d09dd21ee204ee8e9b63e->enter($__internal_97201becaf67d24a54eca160bb0b1ba63c0c9e22a19d09dd21ee204ee8e9b63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_97201becaf67d24a54eca160bb0b1ba63c0c9e22a19d09dd21ee204ee8e9b63e->leave($__internal_97201becaf67d24a54eca160bb0b1ba63c0c9e22a19d09dd21ee204ee8e9b63e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
