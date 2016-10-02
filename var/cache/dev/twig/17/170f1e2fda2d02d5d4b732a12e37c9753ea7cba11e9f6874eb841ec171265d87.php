<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_f783558c8619a04d5155908e716763e055ea19fb4a64143a947974a4e20011d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3bff82d9f7f82cb12eb8979c83a43b45bf295af1381f915d8f522129be56f850 = $this->env->getExtension("native_profiler");
        $__internal_3bff82d9f7f82cb12eb8979c83a43b45bf295af1381f915d8f522129be56f850->enter($__internal_3bff82d9f7f82cb12eb8979c83a43b45bf295af1381f915d8f522129be56f850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bff82d9f7f82cb12eb8979c83a43b45bf295af1381f915d8f522129be56f850->leave($__internal_3bff82d9f7f82cb12eb8979c83a43b45bf295af1381f915d8f522129be56f850_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa4f3c3468281b1470d1f6b2f3f5378c7ad5aace213aecc5e9303dc94ed4a948 = $this->env->getExtension("native_profiler");
        $__internal_aa4f3c3468281b1470d1f6b2f3f5378c7ad5aace213aecc5e9303dc94ed4a948->enter($__internal_aa4f3c3468281b1470d1f6b2f3f5378c7ad5aace213aecc5e9303dc94ed4a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_aa4f3c3468281b1470d1f6b2f3f5378c7ad5aace213aecc5e9303dc94ed4a948->leave($__internal_aa4f3c3468281b1470d1f6b2f3f5378c7ad5aace213aecc5e9303dc94ed4a948_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
