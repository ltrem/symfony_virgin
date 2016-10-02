<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_112d255dc45625003d67fef95141018b4bada58550a3120a8c9dab8daedbad3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_592686838cbf872816919612c8bb8ed89e3964dbb9c3fbed11a690b687dceeea = $this->env->getExtension("native_profiler");
        $__internal_592686838cbf872816919612c8bb8ed89e3964dbb9c3fbed11a690b687dceeea->enter($__internal_592686838cbf872816919612c8bb8ed89e3964dbb9c3fbed11a690b687dceeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592686838cbf872816919612c8bb8ed89e3964dbb9c3fbed11a690b687dceeea->leave($__internal_592686838cbf872816919612c8bb8ed89e3964dbb9c3fbed11a690b687dceeea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_040d060124245625192f268ad17ff8e4bd957caddc6f942c85606656cc53598b = $this->env->getExtension("native_profiler");
        $__internal_040d060124245625192f268ad17ff8e4bd957caddc6f942c85606656cc53598b->enter($__internal_040d060124245625192f268ad17ff8e4bd957caddc6f942c85606656cc53598b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_040d060124245625192f268ad17ff8e4bd957caddc6f942c85606656cc53598b->leave($__internal_040d060124245625192f268ad17ff8e4bd957caddc6f942c85606656cc53598b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
