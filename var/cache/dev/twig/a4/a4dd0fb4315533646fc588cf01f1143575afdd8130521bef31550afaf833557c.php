<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ffc3a2d6dd33311123e2e3969b9e6809b58368bee283b83c7d0cfa3f7d1a95b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d77047f1c5098210c1e79ceccc784bf26208d4fa200942cbf3a09290820c242 = $this->env->getExtension("native_profiler");
        $__internal_0d77047f1c5098210c1e79ceccc784bf26208d4fa200942cbf3a09290820c242->enter($__internal_0d77047f1c5098210c1e79ceccc784bf26208d4fa200942cbf3a09290820c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0d77047f1c5098210c1e79ceccc784bf26208d4fa200942cbf3a09290820c242->leave($__internal_0d77047f1c5098210c1e79ceccc784bf26208d4fa200942cbf3a09290820c242_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1434c0c6c9d5bed27f2d4c8ae6eb2f96291008caefc0d0b5dc1f026d151d3126 = $this->env->getExtension("native_profiler");
        $__internal_1434c0c6c9d5bed27f2d4c8ae6eb2f96291008caefc0d0b5dc1f026d151d3126->enter($__internal_1434c0c6c9d5bed27f2d4c8ae6eb2f96291008caefc0d0b5dc1f026d151d3126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1434c0c6c9d5bed27f2d4c8ae6eb2f96291008caefc0d0b5dc1f026d151d3126->leave($__internal_1434c0c6c9d5bed27f2d4c8ae6eb2f96291008caefc0d0b5dc1f026d151d3126_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fa42c0bcbcfe04e6fe5b682b710471fa96e78069460ebdb7ad4657c0c639bd34 = $this->env->getExtension("native_profiler");
        $__internal_fa42c0bcbcfe04e6fe5b682b710471fa96e78069460ebdb7ad4657c0c639bd34->enter($__internal_fa42c0bcbcfe04e6fe5b682b710471fa96e78069460ebdb7ad4657c0c639bd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fa42c0bcbcfe04e6fe5b682b710471fa96e78069460ebdb7ad4657c0c639bd34->leave($__internal_fa42c0bcbcfe04e6fe5b682b710471fa96e78069460ebdb7ad4657c0c639bd34_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ea007d07eb8b35330ac298fedb110dfd3ef9dc476d47d925a4ae59bef7de129e = $this->env->getExtension("native_profiler");
        $__internal_ea007d07eb8b35330ac298fedb110dfd3ef9dc476d47d925a4ae59bef7de129e->enter($__internal_ea007d07eb8b35330ac298fedb110dfd3ef9dc476d47d925a4ae59bef7de129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ea007d07eb8b35330ac298fedb110dfd3ef9dc476d47d925a4ae59bef7de129e->leave($__internal_ea007d07eb8b35330ac298fedb110dfd3ef9dc476d47d925a4ae59bef7de129e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
