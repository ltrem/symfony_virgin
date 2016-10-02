<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_127bfdf92b8a99a24319e8ce362bf2c7bc707b9ab93c5051c67ec652a4ed7b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0c37c747bfe4a6192c04259798fac54753b833f0d889b842a186a969e02e056 = $this->env->getExtension("native_profiler");
        $__internal_d0c37c747bfe4a6192c04259798fac54753b833f0d889b842a186a969e02e056->enter($__internal_d0c37c747bfe4a6192c04259798fac54753b833f0d889b842a186a969e02e056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c37c747bfe4a6192c04259798fac54753b833f0d889b842a186a969e02e056->leave($__internal_d0c37c747bfe4a6192c04259798fac54753b833f0d889b842a186a969e02e056_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f359b3e5ca5cd2b0674c131b2293efb95b640833b74a34306e53ad1baa8878f = $this->env->getExtension("native_profiler");
        $__internal_9f359b3e5ca5cd2b0674c131b2293efb95b640833b74a34306e53ad1baa8878f->enter($__internal_9f359b3e5ca5cd2b0674c131b2293efb95b640833b74a34306e53ad1baa8878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f359b3e5ca5cd2b0674c131b2293efb95b640833b74a34306e53ad1baa8878f->leave($__internal_9f359b3e5ca5cd2b0674c131b2293efb95b640833b74a34306e53ad1baa8878f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08b7cf18fec7500a95d78c82c9d95d6488f1ef3547f939c58a73f3be6336eb49 = $this->env->getExtension("native_profiler");
        $__internal_08b7cf18fec7500a95d78c82c9d95d6488f1ef3547f939c58a73f3be6336eb49->enter($__internal_08b7cf18fec7500a95d78c82c9d95d6488f1ef3547f939c58a73f3be6336eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08b7cf18fec7500a95d78c82c9d95d6488f1ef3547f939c58a73f3be6336eb49->leave($__internal_08b7cf18fec7500a95d78c82c9d95d6488f1ef3547f939c58a73f3be6336eb49_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd6dc3db93a0e219bf25f9fd83d620ce08b9e058ebc8c974cdd0890c955ccc16 = $this->env->getExtension("native_profiler");
        $__internal_bd6dc3db93a0e219bf25f9fd83d620ce08b9e058ebc8c974cdd0890c955ccc16->enter($__internal_bd6dc3db93a0e219bf25f9fd83d620ce08b9e058ebc8c974cdd0890c955ccc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bd6dc3db93a0e219bf25f9fd83d620ce08b9e058ebc8c974cdd0890c955ccc16->leave($__internal_bd6dc3db93a0e219bf25f9fd83d620ce08b9e058ebc8c974cdd0890c955ccc16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
