<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8579944fc2771ffefad8fa50a0880ececb835efb9de3683671efddff952aa411 extends Twig_Template
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
        $__internal_f1a81da1558bf4f5b65f2f30507396d2f149fa02faf7d9bce1909c45f76be0ec = $this->env->getExtension("native_profiler");
        $__internal_f1a81da1558bf4f5b65f2f30507396d2f149fa02faf7d9bce1909c45f76be0ec->enter($__internal_f1a81da1558bf4f5b65f2f30507396d2f149fa02faf7d9bce1909c45f76be0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f1a81da1558bf4f5b65f2f30507396d2f149fa02faf7d9bce1909c45f76be0ec->leave($__internal_f1a81da1558bf4f5b65f2f30507396d2f149fa02faf7d9bce1909c45f76be0ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c4f5c75ae6680212986fa77908a3494934536cf84f0c3d67e3dcf9a69e87714 = $this->env->getExtension("native_profiler");
        $__internal_8c4f5c75ae6680212986fa77908a3494934536cf84f0c3d67e3dcf9a69e87714->enter($__internal_8c4f5c75ae6680212986fa77908a3494934536cf84f0c3d67e3dcf9a69e87714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8c4f5c75ae6680212986fa77908a3494934536cf84f0c3d67e3dcf9a69e87714->leave($__internal_8c4f5c75ae6680212986fa77908a3494934536cf84f0c3d67e3dcf9a69e87714_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5ba87771b83084d6d055e11ce6bfc36e52d942d3c6aa060dff96880303da50a1 = $this->env->getExtension("native_profiler");
        $__internal_5ba87771b83084d6d055e11ce6bfc36e52d942d3c6aa060dff96880303da50a1->enter($__internal_5ba87771b83084d6d055e11ce6bfc36e52d942d3c6aa060dff96880303da50a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5ba87771b83084d6d055e11ce6bfc36e52d942d3c6aa060dff96880303da50a1->leave($__internal_5ba87771b83084d6d055e11ce6bfc36e52d942d3c6aa060dff96880303da50a1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_313652da1211dbcb0dada9ce874e83460e557df828abf848a8e9fc8f6a6877fa = $this->env->getExtension("native_profiler");
        $__internal_313652da1211dbcb0dada9ce874e83460e557df828abf848a8e9fc8f6a6877fa->enter($__internal_313652da1211dbcb0dada9ce874e83460e557df828abf848a8e9fc8f6a6877fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_313652da1211dbcb0dada9ce874e83460e557df828abf848a8e9fc8f6a6877fa->leave($__internal_313652da1211dbcb0dada9ce874e83460e557df828abf848a8e9fc8f6a6877fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
