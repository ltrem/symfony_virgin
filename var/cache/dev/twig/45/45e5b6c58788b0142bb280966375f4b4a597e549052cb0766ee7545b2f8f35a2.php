<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e44a57841db83bdabded8bc185b6d465821698db813ad5de5f8d44183a2cdc81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f58ae98b94d84664dc8dd7668a4a08e9a4c02c03938f9c6e60d88ab002a48a95 = $this->env->getExtension("native_profiler");
        $__internal_f58ae98b94d84664dc8dd7668a4a08e9a4c02c03938f9c6e60d88ab002a48a95->enter($__internal_f58ae98b94d84664dc8dd7668a4a08e9a4c02c03938f9c6e60d88ab002a48a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58ae98b94d84664dc8dd7668a4a08e9a4c02c03938f9c6e60d88ab002a48a95->leave($__internal_f58ae98b94d84664dc8dd7668a4a08e9a4c02c03938f9c6e60d88ab002a48a95_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_573513363dad27c3a85c8619b1977c3efeb114180fe6cfb5f328594b2a71a2d8 = $this->env->getExtension("native_profiler");
        $__internal_573513363dad27c3a85c8619b1977c3efeb114180fe6cfb5f328594b2a71a2d8->enter($__internal_573513363dad27c3a85c8619b1977c3efeb114180fe6cfb5f328594b2a71a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_573513363dad27c3a85c8619b1977c3efeb114180fe6cfb5f328594b2a71a2d8->leave($__internal_573513363dad27c3a85c8619b1977c3efeb114180fe6cfb5f328594b2a71a2d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
