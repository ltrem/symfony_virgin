<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_133315d813d196eef172c5a42e02498465187ef8c12e19bd13345a3f63f14f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_535255553caaa397986c87d1efc9fd972bdafc9a0cc71330e3bb1599e015509f = $this->env->getExtension("native_profiler");
        $__internal_535255553caaa397986c87d1efc9fd972bdafc9a0cc71330e3bb1599e015509f->enter($__internal_535255553caaa397986c87d1efc9fd972bdafc9a0cc71330e3bb1599e015509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535255553caaa397986c87d1efc9fd972bdafc9a0cc71330e3bb1599e015509f->leave($__internal_535255553caaa397986c87d1efc9fd972bdafc9a0cc71330e3bb1599e015509f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8052d6a9e00960fef64366064da423debee32b88451f3225d0dbce429add312 = $this->env->getExtension("native_profiler");
        $__internal_b8052d6a9e00960fef64366064da423debee32b88451f3225d0dbce429add312->enter($__internal_b8052d6a9e00960fef64366064da423debee32b88451f3225d0dbce429add312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b8052d6a9e00960fef64366064da423debee32b88451f3225d0dbce429add312->leave($__internal_b8052d6a9e00960fef64366064da423debee32b88451f3225d0dbce429add312_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
