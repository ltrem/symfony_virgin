<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_1effc886effe1cf78fc1adc42c951b7e9e22b1e9613ed161a97f7d08af3a7c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_1baebcbc093aef386e5a317aa6686b4de07438269e54bbf559e849f90453624d = $this->env->getExtension("native_profiler");
        $__internal_1baebcbc093aef386e5a317aa6686b4de07438269e54bbf559e849f90453624d->enter($__internal_1baebcbc093aef386e5a317aa6686b4de07438269e54bbf559e849f90453624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1baebcbc093aef386e5a317aa6686b4de07438269e54bbf559e849f90453624d->leave($__internal_1baebcbc093aef386e5a317aa6686b4de07438269e54bbf559e849f90453624d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_939959d770268e85408c0ab902412c709a1489e66fc069e3cab644364ed2708b = $this->env->getExtension("native_profiler");
        $__internal_939959d770268e85408c0ab902412c709a1489e66fc069e3cab644364ed2708b->enter($__internal_939959d770268e85408c0ab902412c709a1489e66fc069e3cab644364ed2708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_939959d770268e85408c0ab902412c709a1489e66fc069e3cab644364ed2708b->leave($__internal_939959d770268e85408c0ab902412c709a1489e66fc069e3cab644364ed2708b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
