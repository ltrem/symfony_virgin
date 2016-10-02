<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_66d264021f348ff55ff8d1e37c0a213bf31e3dc053a54e1d8d25dc41179596d0 extends Twig_Template
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
        $__internal_2b5c59fc384db53ccf13ccbedb074582a5615ba4a9c6d60a207e897764126adf = $this->env->getExtension("native_profiler");
        $__internal_2b5c59fc384db53ccf13ccbedb074582a5615ba4a9c6d60a207e897764126adf->enter($__internal_2b5c59fc384db53ccf13ccbedb074582a5615ba4a9c6d60a207e897764126adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2b5c59fc384db53ccf13ccbedb074582a5615ba4a9c6d60a207e897764126adf->leave($__internal_2b5c59fc384db53ccf13ccbedb074582a5615ba4a9c6d60a207e897764126adf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
