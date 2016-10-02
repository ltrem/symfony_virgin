<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_c3d45bb686415f541245c1dc0cd0a4b23a0dc5d3cb3b264a8d734be87c50f11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_ab6682c3c10903f283c03f43b6275c2278afc5e62b1c6012f632eab3c1837e64 = $this->env->getExtension("native_profiler");
        $__internal_ab6682c3c10903f283c03f43b6275c2278afc5e62b1c6012f632eab3c1837e64->enter($__internal_ab6682c3c10903f283c03f43b6275c2278afc5e62b1c6012f632eab3c1837e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6682c3c10903f283c03f43b6275c2278afc5e62b1c6012f632eab3c1837e64->leave($__internal_ab6682c3c10903f283c03f43b6275c2278afc5e62b1c6012f632eab3c1837e64_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05da9715cdc08f117516eb0662ddd220cab44ec298ae799330c01646796ce3fc = $this->env->getExtension("native_profiler");
        $__internal_05da9715cdc08f117516eb0662ddd220cab44ec298ae799330c01646796ce3fc->enter($__internal_05da9715cdc08f117516eb0662ddd220cab44ec298ae799330c01646796ce3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_05da9715cdc08f117516eb0662ddd220cab44ec298ae799330c01646796ce3fc->leave($__internal_05da9715cdc08f117516eb0662ddd220cab44ec298ae799330c01646796ce3fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
