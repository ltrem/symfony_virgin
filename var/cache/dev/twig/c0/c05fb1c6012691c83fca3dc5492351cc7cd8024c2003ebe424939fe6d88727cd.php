<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_b8d167dea4bc11ea3028916ad5e35cf0bdd44c5476b9872083e746e0fb7a0b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70c55eb7310220413e6d1c6a81b72d0d11f5c52bde362e3ce6934f432fc41fc7 = $this->env->getExtension("native_profiler");
        $__internal_70c55eb7310220413e6d1c6a81b72d0d11f5c52bde362e3ce6934f432fc41fc7->enter($__internal_70c55eb7310220413e6d1c6a81b72d0d11f5c52bde362e3ce6934f432fc41fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c55eb7310220413e6d1c6a81b72d0d11f5c52bde362e3ce6934f432fc41fc7->leave($__internal_70c55eb7310220413e6d1c6a81b72d0d11f5c52bde362e3ce6934f432fc41fc7_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_b01ae157154c295be994958f61f03b58ffa9535945ba2791dec101bad8646716 = $this->env->getExtension("native_profiler");
        $__internal_b01ae157154c295be994958f61f03b58ffa9535945ba2791dec101bad8646716->enter($__internal_b01ae157154c295be994958f61f03b58ffa9535945ba2791dec101bad8646716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_b01ae157154c295be994958f61f03b58ffa9535945ba2791dec101bad8646716->leave($__internal_b01ae157154c295be994958f61f03b58ffa9535945ba2791dec101bad8646716_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block label %}*/
/*     {%- set translation_domain = item.extra('translation_domain', 'messages') -%}*/
/*     {%- set label = item.label -%}*/
/*     {%- if translation_domain is not same as(false) -%}*/
/*         {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}*/
/*     {%- endif -%}*/
/*     {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}*/
/* {% endblock %}*/
/* */
