<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_988fb405b7633a423df4644df2da368d9a9208ee44d731bd5366aa6e129e03ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c18ffff4ba546f98db0f50471dc880ec8b4cb18856b556394acd95c8a96a148e = $this->env->getExtension("native_profiler");
        $__internal_c18ffff4ba546f98db0f50471dc880ec8b4cb18856b556394acd95c8a96a148e->enter($__internal_c18ffff4ba546f98db0f50471dc880ec8b4cb18856b556394acd95c8a96a148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18ffff4ba546f98db0f50471dc880ec8b4cb18856b556394acd95c8a96a148e->leave($__internal_c18ffff4ba546f98db0f50471dc880ec8b4cb18856b556394acd95c8a96a148e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cd66b1baf740187fd74afec14e9bc3089ba82cb3d2daaf29f1d0476c8665ecf = $this->env->getExtension("native_profiler");
        $__internal_8cd66b1baf740187fd74afec14e9bc3089ba82cb3d2daaf29f1d0476c8665ecf->enter($__internal_8cd66b1baf740187fd74afec14e9bc3089ba82cb3d2daaf29f1d0476c8665ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8cd66b1baf740187fd74afec14e9bc3089ba82cb3d2daaf29f1d0476c8665ecf->leave($__internal_8cd66b1baf740187fd74afec14e9bc3089ba82cb3d2daaf29f1d0476c8665ecf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
