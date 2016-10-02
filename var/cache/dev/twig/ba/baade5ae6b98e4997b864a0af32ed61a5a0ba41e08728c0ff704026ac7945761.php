<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_eb897984351558d305b3929a12481a728050fe0fc6de98443472a5e6ce484fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_9557ac6347c5228725c9c97bf723acf7cf9202acfae684c82478334c8e4d4ee7 = $this->env->getExtension("native_profiler");
        $__internal_9557ac6347c5228725c9c97bf723acf7cf9202acfae684c82478334c8e4d4ee7->enter($__internal_9557ac6347c5228725c9c97bf723acf7cf9202acfae684c82478334c8e4d4ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9557ac6347c5228725c9c97bf723acf7cf9202acfae684c82478334c8e4d4ee7->leave($__internal_9557ac6347c5228725c9c97bf723acf7cf9202acfae684c82478334c8e4d4ee7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4586214fa24181692fbc09a0e9b5b102e000fd35d24a913c0e926e4995f59127 = $this->env->getExtension("native_profiler");
        $__internal_4586214fa24181692fbc09a0e9b5b102e000fd35d24a913c0e926e4995f59127->enter($__internal_4586214fa24181692fbc09a0e9b5b102e000fd35d24a913c0e926e4995f59127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4586214fa24181692fbc09a0e9b5b102e000fd35d24a913c0e926e4995f59127->leave($__internal_4586214fa24181692fbc09a0e9b5b102e000fd35d24a913c0e926e4995f59127_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
