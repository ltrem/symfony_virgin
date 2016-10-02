<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b2b0e49784b6fe4f5b5d81719d8e2a54039120248e09f0944432251f88c48ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e6101fcc5bd001331d0c44d981dee064f3991dd1c60b81a2f31666aaaad84e71 = $this->env->getExtension("native_profiler");
        $__internal_e6101fcc5bd001331d0c44d981dee064f3991dd1c60b81a2f31666aaaad84e71->enter($__internal_e6101fcc5bd001331d0c44d981dee064f3991dd1c60b81a2f31666aaaad84e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6101fcc5bd001331d0c44d981dee064f3991dd1c60b81a2f31666aaaad84e71->leave($__internal_e6101fcc5bd001331d0c44d981dee064f3991dd1c60b81a2f31666aaaad84e71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a36954ee0df54b0c597044a8c9dd13c6fd319f5f4368d68d4b9270e45af85e99 = $this->env->getExtension("native_profiler");
        $__internal_a36954ee0df54b0c597044a8c9dd13c6fd319f5f4368d68d4b9270e45af85e99->enter($__internal_a36954ee0df54b0c597044a8c9dd13c6fd319f5f4368d68d4b9270e45af85e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a36954ee0df54b0c597044a8c9dd13c6fd319f5f4368d68d4b9270e45af85e99->leave($__internal_a36954ee0df54b0c597044a8c9dd13c6fd319f5f4368d68d4b9270e45af85e99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
