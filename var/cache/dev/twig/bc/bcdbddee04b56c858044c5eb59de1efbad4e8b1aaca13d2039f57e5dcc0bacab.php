<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_41bd0c51c9caf572aa03fd511e4aae8614408974c0f6e4a5f8dd5e84cded6774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8d890952957d5cfb3e05200c5b64c3dd286529dec62d892382caf9767f0ac694 = $this->env->getExtension("native_profiler");
        $__internal_8d890952957d5cfb3e05200c5b64c3dd286529dec62d892382caf9767f0ac694->enter($__internal_8d890952957d5cfb3e05200c5b64c3dd286529dec62d892382caf9767f0ac694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d890952957d5cfb3e05200c5b64c3dd286529dec62d892382caf9767f0ac694->leave($__internal_8d890952957d5cfb3e05200c5b64c3dd286529dec62d892382caf9767f0ac694_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a1244ed9b9c90fb52d7349758978be523962c277d7ffe78866d6ddf6152e4b9 = $this->env->getExtension("native_profiler");
        $__internal_1a1244ed9b9c90fb52d7349758978be523962c277d7ffe78866d6ddf6152e4b9->enter($__internal_1a1244ed9b9c90fb52d7349758978be523962c277d7ffe78866d6ddf6152e4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1a1244ed9b9c90fb52d7349758978be523962c277d7ffe78866d6ddf6152e4b9->leave($__internal_1a1244ed9b9c90fb52d7349758978be523962c277d7ffe78866d6ddf6152e4b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
