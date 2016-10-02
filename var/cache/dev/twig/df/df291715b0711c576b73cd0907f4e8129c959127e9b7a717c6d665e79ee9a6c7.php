<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_719c19e223ab5d493e14fd1581a1f1fc0fd958b4ff3a9c8198ec4e856173dd54 extends Twig_Template
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
        $__internal_fb67e7a57755e76a9c81274eb35a02a6716f1537a3079b7c7e9a8ef8eeff2966 = $this->env->getExtension("native_profiler");
        $__internal_fb67e7a57755e76a9c81274eb35a02a6716f1537a3079b7c7e9a8ef8eeff2966->enter($__internal_fb67e7a57755e76a9c81274eb35a02a6716f1537a3079b7c7e9a8ef8eeff2966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fb67e7a57755e76a9c81274eb35a02a6716f1537a3079b7c7e9a8ef8eeff2966->leave($__internal_fb67e7a57755e76a9c81274eb35a02a6716f1537a3079b7c7e9a8ef8eeff2966_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b51436bf295d404f1b977c8eb809eecba6055a30e238053f8eaca86f183e22a = $this->env->getExtension("native_profiler");
        $__internal_3b51436bf295d404f1b977c8eb809eecba6055a30e238053f8eaca86f183e22a->enter($__internal_3b51436bf295d404f1b977c8eb809eecba6055a30e238053f8eaca86f183e22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3b51436bf295d404f1b977c8eb809eecba6055a30e238053f8eaca86f183e22a->leave($__internal_3b51436bf295d404f1b977c8eb809eecba6055a30e238053f8eaca86f183e22a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_64beb4777b4ee51cf89b548f0bff415be2e74364b4605e076109fb2597c9c2dd = $this->env->getExtension("native_profiler");
        $__internal_64beb4777b4ee51cf89b548f0bff415be2e74364b4605e076109fb2597c9c2dd->enter($__internal_64beb4777b4ee51cf89b548f0bff415be2e74364b4605e076109fb2597c9c2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_64beb4777b4ee51cf89b548f0bff415be2e74364b4605e076109fb2597c9c2dd->leave($__internal_64beb4777b4ee51cf89b548f0bff415be2e74364b4605e076109fb2597c9c2dd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c5e09c149b9e869810c9b45c7d9fbec75511631cff43171ef61ce7d13a9de4be = $this->env->getExtension("native_profiler");
        $__internal_c5e09c149b9e869810c9b45c7d9fbec75511631cff43171ef61ce7d13a9de4be->enter($__internal_c5e09c149b9e869810c9b45c7d9fbec75511631cff43171ef61ce7d13a9de4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c5e09c149b9e869810c9b45c7d9fbec75511631cff43171ef61ce7d13a9de4be->leave($__internal_c5e09c149b9e869810c9b45c7d9fbec75511631cff43171ef61ce7d13a9de4be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
