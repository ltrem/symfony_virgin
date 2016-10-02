<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b94c53b7f7caa7dddf542af14af7566c604d7e69af216f53aa76b8cc192601d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6a8180dbba5bb3650e4e538af62892be30dc263e1e9fe58d04d87d11006b4287 = $this->env->getExtension("native_profiler");
        $__internal_6a8180dbba5bb3650e4e538af62892be30dc263e1e9fe58d04d87d11006b4287->enter($__internal_6a8180dbba5bb3650e4e538af62892be30dc263e1e9fe58d04d87d11006b4287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8180dbba5bb3650e4e538af62892be30dc263e1e9fe58d04d87d11006b4287->leave($__internal_6a8180dbba5bb3650e4e538af62892be30dc263e1e9fe58d04d87d11006b4287_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3f6cca88e6ebc05942f5d523e5a141a2fdf97caa57b4b1582ad47b761f4b0dc = $this->env->getExtension("native_profiler");
        $__internal_e3f6cca88e6ebc05942f5d523e5a141a2fdf97caa57b4b1582ad47b761f4b0dc->enter($__internal_e3f6cca88e6ebc05942f5d523e5a141a2fdf97caa57b4b1582ad47b761f4b0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e3f6cca88e6ebc05942f5d523e5a141a2fdf97caa57b4b1582ad47b761f4b0dc->leave($__internal_e3f6cca88e6ebc05942f5d523e5a141a2fdf97caa57b4b1582ad47b761f4b0dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
