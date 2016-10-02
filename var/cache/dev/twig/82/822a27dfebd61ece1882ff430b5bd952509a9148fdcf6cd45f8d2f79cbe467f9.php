<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5d3f4bcbaab437034544d5cf4a85588a163b57df30c34284aa16dd84fc6d2f2f extends Twig_Template
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
        $__internal_bbd3f7c326135c063bdb98837c413ac18f9ef760e6e9f0e4811385703ce25c6b = $this->env->getExtension("native_profiler");
        $__internal_bbd3f7c326135c063bdb98837c413ac18f9ef760e6e9f0e4811385703ce25c6b->enter($__internal_bbd3f7c326135c063bdb98837c413ac18f9ef760e6e9f0e4811385703ce25c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bbd3f7c326135c063bdb98837c413ac18f9ef760e6e9f0e4811385703ce25c6b->leave($__internal_bbd3f7c326135c063bdb98837c413ac18f9ef760e6e9f0e4811385703ce25c6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
