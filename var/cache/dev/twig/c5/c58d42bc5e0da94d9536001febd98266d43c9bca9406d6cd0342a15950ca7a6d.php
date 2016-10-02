<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_cfe939927b2beb1bfdb2cd3a2202ed704697274d87506c2952838b1826c56cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_0473e1077d50fdacd74ea394fdaa8e97a2560ec4e4f958da58328bd767e33e5a = $this->env->getExtension("native_profiler");
        $__internal_0473e1077d50fdacd74ea394fdaa8e97a2560ec4e4f958da58328bd767e33e5a->enter($__internal_0473e1077d50fdacd74ea394fdaa8e97a2560ec4e4f958da58328bd767e33e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0473e1077d50fdacd74ea394fdaa8e97a2560ec4e4f958da58328bd767e33e5a->leave($__internal_0473e1077d50fdacd74ea394fdaa8e97a2560ec4e4f958da58328bd767e33e5a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfe1b723117b0562f987b03e236d22cb15a96e5b108aa5f59a82e863cfc22423 = $this->env->getExtension("native_profiler");
        $__internal_cfe1b723117b0562f987b03e236d22cb15a96e5b108aa5f59a82e863cfc22423->enter($__internal_cfe1b723117b0562f987b03e236d22cb15a96e5b108aa5f59a82e863cfc22423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_cfe1b723117b0562f987b03e236d22cb15a96e5b108aa5f59a82e863cfc22423->leave($__internal_cfe1b723117b0562f987b03e236d22cb15a96e5b108aa5f59a82e863cfc22423_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
