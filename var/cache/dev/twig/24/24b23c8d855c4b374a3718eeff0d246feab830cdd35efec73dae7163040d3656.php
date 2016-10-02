<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5f65681b2e32f59c55c84e7b94ea677fc66a69ed2a6c4ceef835ba3e849a003b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dd9f5f21685b1407237faa5d6b21c50586f75f7735a16362be510b733ad39e69 = $this->env->getExtension("native_profiler");
        $__internal_dd9f5f21685b1407237faa5d6b21c50586f75f7735a16362be510b733ad39e69->enter($__internal_dd9f5f21685b1407237faa5d6b21c50586f75f7735a16362be510b733ad39e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9f5f21685b1407237faa5d6b21c50586f75f7735a16362be510b733ad39e69->leave($__internal_dd9f5f21685b1407237faa5d6b21c50586f75f7735a16362be510b733ad39e69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f401ee172618682447e025e75bc00e7f2833e1c392f70bebb5b5c19b1f8fa48d = $this->env->getExtension("native_profiler");
        $__internal_f401ee172618682447e025e75bc00e7f2833e1c392f70bebb5b5c19b1f8fa48d->enter($__internal_f401ee172618682447e025e75bc00e7f2833e1c392f70bebb5b5c19b1f8fa48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f401ee172618682447e025e75bc00e7f2833e1c392f70bebb5b5c19b1f8fa48d->leave($__internal_f401ee172618682447e025e75bc00e7f2833e1c392f70bebb5b5c19b1f8fa48d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
