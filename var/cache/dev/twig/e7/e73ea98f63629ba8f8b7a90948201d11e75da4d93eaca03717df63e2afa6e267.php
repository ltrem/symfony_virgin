<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_111e43b41a5708d9f47a8f9ae00b4edcf615126afb4bdc75b33ae133d93aa6eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_ead34a853b0ddda26e26566becaf9261eef817a590bedeadfd3ca16426cecfcf = $this->env->getExtension("native_profiler");
        $__internal_ead34a853b0ddda26e26566becaf9261eef817a590bedeadfd3ca16426cecfcf->enter($__internal_ead34a853b0ddda26e26566becaf9261eef817a590bedeadfd3ca16426cecfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead34a853b0ddda26e26566becaf9261eef817a590bedeadfd3ca16426cecfcf->leave($__internal_ead34a853b0ddda26e26566becaf9261eef817a590bedeadfd3ca16426cecfcf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c43f37113587fff5b6b1b2c4d9d0186ca0da3602a8121c25333d78662968326c = $this->env->getExtension("native_profiler");
        $__internal_c43f37113587fff5b6b1b2c4d9d0186ca0da3602a8121c25333d78662968326c->enter($__internal_c43f37113587fff5b6b1b2c4d9d0186ca0da3602a8121c25333d78662968326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c43f37113587fff5b6b1b2c4d9d0186ca0da3602a8121c25333d78662968326c->leave($__internal_c43f37113587fff5b6b1b2c4d9d0186ca0da3602a8121c25333d78662968326c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
