<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_cb7341edaaa241b94a5f62a39334a4731169f0b7694eaab48b1971bf78ebc702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0116c7a4d0be7128f4485a65ae7cf218f3dc57ecc4251fd9ee98c83d0d314ba4 = $this->env->getExtension("native_profiler");
        $__internal_0116c7a4d0be7128f4485a65ae7cf218f3dc57ecc4251fd9ee98c83d0d314ba4->enter($__internal_0116c7a4d0be7128f4485a65ae7cf218f3dc57ecc4251fd9ee98c83d0d314ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0116c7a4d0be7128f4485a65ae7cf218f3dc57ecc4251fd9ee98c83d0d314ba4->leave($__internal_0116c7a4d0be7128f4485a65ae7cf218f3dc57ecc4251fd9ee98c83d0d314ba4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f4d60dc24302ec524c2ea51342e913da77fc3f387c57810c3ea9b215fcb155d = $this->env->getExtension("native_profiler");
        $__internal_3f4d60dc24302ec524c2ea51342e913da77fc3f387c57810c3ea9b215fcb155d->enter($__internal_3f4d60dc24302ec524c2ea51342e913da77fc3f387c57810c3ea9b215fcb155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3f4d60dc24302ec524c2ea51342e913da77fc3f387c57810c3ea9b215fcb155d->leave($__internal_3f4d60dc24302ec524c2ea51342e913da77fc3f387c57810c3ea9b215fcb155d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
