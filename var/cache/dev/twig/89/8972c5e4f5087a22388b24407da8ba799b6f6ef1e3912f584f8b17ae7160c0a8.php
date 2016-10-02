<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5f4c3bbe6ed908433b40ae48b4d45fbda9ae42497272077dd68b23933402e01b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ac956a4d291e0f8796311ddc243b51e90c2285f61b2274c8235bbf26dbbe663d = $this->env->getExtension("native_profiler");
        $__internal_ac956a4d291e0f8796311ddc243b51e90c2285f61b2274c8235bbf26dbbe663d->enter($__internal_ac956a4d291e0f8796311ddc243b51e90c2285f61b2274c8235bbf26dbbe663d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac956a4d291e0f8796311ddc243b51e90c2285f61b2274c8235bbf26dbbe663d->leave($__internal_ac956a4d291e0f8796311ddc243b51e90c2285f61b2274c8235bbf26dbbe663d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4d4652359980409783114898cfbbe67c6a85e909c2b01a8c177dfd50ce1062f = $this->env->getExtension("native_profiler");
        $__internal_d4d4652359980409783114898cfbbe67c6a85e909c2b01a8c177dfd50ce1062f->enter($__internal_d4d4652359980409783114898cfbbe67c6a85e909c2b01a8c177dfd50ce1062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d4d4652359980409783114898cfbbe67c6a85e909c2b01a8c177dfd50ce1062f->leave($__internal_d4d4652359980409783114898cfbbe67c6a85e909c2b01a8c177dfd50ce1062f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
