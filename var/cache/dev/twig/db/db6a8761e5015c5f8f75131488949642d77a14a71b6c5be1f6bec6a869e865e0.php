<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_aafcb23351563ca85fafee5bde77b0567fdf381777aa5d848d774dc9cced70ed extends Twig_Template
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
        $__internal_daa1c980b0a621493fe6a28b78cff07e40b17128d0e5cefb7afc9455120e7541 = $this->env->getExtension("native_profiler");
        $__internal_daa1c980b0a621493fe6a28b78cff07e40b17128d0e5cefb7afc9455120e7541->enter($__internal_daa1c980b0a621493fe6a28b78cff07e40b17128d0e5cefb7afc9455120e7541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_daa1c980b0a621493fe6a28b78cff07e40b17128d0e5cefb7afc9455120e7541->leave($__internal_daa1c980b0a621493fe6a28b78cff07e40b17128d0e5cefb7afc9455120e7541_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
