<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_3d9c0c9e2cdd28f932d13cd98abfbd7001b08c58003ece613111e01dcf69d392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5660ff1383a39245f0c0075bbb1024fac3439a80bf753727be943b14787483f2 = $this->env->getExtension("native_profiler");
        $__internal_5660ff1383a39245f0c0075bbb1024fac3439a80bf753727be943b14787483f2->enter($__internal_5660ff1383a39245f0c0075bbb1024fac3439a80bf753727be943b14787483f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5660ff1383a39245f0c0075bbb1024fac3439a80bf753727be943b14787483f2->leave($__internal_5660ff1383a39245f0c0075bbb1024fac3439a80bf753727be943b14787483f2_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_e4e07c2e5b1a29cc11975aa1c1bb564f8a7fac495c53b2011fe973a37ada48e3 = $this->env->getExtension("native_profiler");
        $__internal_e4e07c2e5b1a29cc11975aa1c1bb564f8a7fac495c53b2011fe973a37ada48e3->enter($__internal_e4e07c2e5b1a29cc11975aa1c1bb564f8a7fac495c53b2011fe973a37ada48e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_e4e07c2e5b1a29cc11975aa1c1bb564f8a7fac495c53b2011fe973a37ada48e3->leave($__internal_e4e07c2e5b1a29cc11975aa1c1bb564f8a7fac495c53b2011fe973a37ada48e3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
