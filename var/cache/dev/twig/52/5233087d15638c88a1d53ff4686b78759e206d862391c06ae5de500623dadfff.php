<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_778c256630bac2b62192a9b37446c1f0e8d1906b0170047ceae94386d50b707b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_e3336cb6b6826415e015bbfc6b4e2978e06e6e3c1595bf3185aa3b7ae3815606 = $this->env->getExtension("native_profiler");
        $__internal_e3336cb6b6826415e015bbfc6b4e2978e06e6e3c1595bf3185aa3b7ae3815606->enter($__internal_e3336cb6b6826415e015bbfc6b4e2978e06e6e3c1595bf3185aa3b7ae3815606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3336cb6b6826415e015bbfc6b4e2978e06e6e3c1595bf3185aa3b7ae3815606->leave($__internal_e3336cb6b6826415e015bbfc6b4e2978e06e6e3c1595bf3185aa3b7ae3815606_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d6292bc28ef1c2ed36d4f9c374a8fd5a960313eeed96bf63c2cd1b35914cb79 = $this->env->getExtension("native_profiler");
        $__internal_2d6292bc28ef1c2ed36d4f9c374a8fd5a960313eeed96bf63c2cd1b35914cb79->enter($__internal_2d6292bc28ef1c2ed36d4f9c374a8fd5a960313eeed96bf63c2cd1b35914cb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_2d6292bc28ef1c2ed36d4f9c374a8fd5a960313eeed96bf63c2cd1b35914cb79->leave($__internal_2d6292bc28ef1c2ed36d4f9c374a8fd5a960313eeed96bf63c2cd1b35914cb79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
