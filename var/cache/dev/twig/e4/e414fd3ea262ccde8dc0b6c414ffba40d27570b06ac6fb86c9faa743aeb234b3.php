<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b7db065b496392b71197443f53a137b375016fc961c45e4d253bc6470006787d extends Twig_Template
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
        $__internal_3eaa4c07ded1c496976ac0690a8ce2f480b0a451c76bc6e6312ef1f22367d7b2 = $this->env->getExtension("native_profiler");
        $__internal_3eaa4c07ded1c496976ac0690a8ce2f480b0a451c76bc6e6312ef1f22367d7b2->enter($__internal_3eaa4c07ded1c496976ac0690a8ce2f480b0a451c76bc6e6312ef1f22367d7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3eaa4c07ded1c496976ac0690a8ce2f480b0a451c76bc6e6312ef1f22367d7b2->leave($__internal_3eaa4c07ded1c496976ac0690a8ce2f480b0a451c76bc6e6312ef1f22367d7b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3a8e8e682cb30c4b7484e5c032d4a59eef33624dec1a13597f753819cc8349fc = $this->env->getExtension("native_profiler");
        $__internal_3a8e8e682cb30c4b7484e5c032d4a59eef33624dec1a13597f753819cc8349fc->enter($__internal_3a8e8e682cb30c4b7484e5c032d4a59eef33624dec1a13597f753819cc8349fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3a8e8e682cb30c4b7484e5c032d4a59eef33624dec1a13597f753819cc8349fc->leave($__internal_3a8e8e682cb30c4b7484e5c032d4a59eef33624dec1a13597f753819cc8349fc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_433fd40814e2c86b28e54a196fa76e2e71338826ad81d84dcf21a349f07b8127 = $this->env->getExtension("native_profiler");
        $__internal_433fd40814e2c86b28e54a196fa76e2e71338826ad81d84dcf21a349f07b8127->enter($__internal_433fd40814e2c86b28e54a196fa76e2e71338826ad81d84dcf21a349f07b8127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_433fd40814e2c86b28e54a196fa76e2e71338826ad81d84dcf21a349f07b8127->leave($__internal_433fd40814e2c86b28e54a196fa76e2e71338826ad81d84dcf21a349f07b8127_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8b76aafefb21152595fca6a97fa3d3c6d5f16621f75cb1a3fdcf7533d5f4cb2e = $this->env->getExtension("native_profiler");
        $__internal_8b76aafefb21152595fca6a97fa3d3c6d5f16621f75cb1a3fdcf7533d5f4cb2e->enter($__internal_8b76aafefb21152595fca6a97fa3d3c6d5f16621f75cb1a3fdcf7533d5f4cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8b76aafefb21152595fca6a97fa3d3c6d5f16621f75cb1a3fdcf7533d5f4cb2e->leave($__internal_8b76aafefb21152595fca6a97fa3d3c6d5f16621f75cb1a3fdcf7533d5f4cb2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
