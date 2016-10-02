<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_d9f7b74e10048abcbc34d5acbf0b8dd88ecd67053d839b2344b1a71b94ebfbbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_eec505929c9d532f3a1adf0f141624801ab3b2e7fc4f464ab8d8a14b1e5b2002 = $this->env->getExtension("native_profiler");
        $__internal_eec505929c9d532f3a1adf0f141624801ab3b2e7fc4f464ab8d8a14b1e5b2002->enter($__internal_eec505929c9d532f3a1adf0f141624801ab3b2e7fc4f464ab8d8a14b1e5b2002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec505929c9d532f3a1adf0f141624801ab3b2e7fc4f464ab8d8a14b1e5b2002->leave($__internal_eec505929c9d532f3a1adf0f141624801ab3b2e7fc4f464ab8d8a14b1e5b2002_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_595f14882367fcfa69c7367ee3aa9aa5bfd80120e7959a4afba15363e3b24058 = $this->env->getExtension("native_profiler");
        $__internal_595f14882367fcfa69c7367ee3aa9aa5bfd80120e7959a4afba15363e3b24058->enter($__internal_595f14882367fcfa69c7367ee3aa9aa5bfd80120e7959a4afba15363e3b24058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_595f14882367fcfa69c7367ee3aa9aa5bfd80120e7959a4afba15363e3b24058->leave($__internal_595f14882367fcfa69c7367ee3aa9aa5bfd80120e7959a4afba15363e3b24058_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
