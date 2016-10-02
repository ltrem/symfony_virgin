<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_30733319100372e85b2a1f2cc92374e8390bb0b0aa005845073f123c2eb46584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_82443643ed2dd64b99c01b9026dac549d96a9524f2e998a834926ee5f47c6fe9 = $this->env->getExtension("native_profiler");
        $__internal_82443643ed2dd64b99c01b9026dac549d96a9524f2e998a834926ee5f47c6fe9->enter($__internal_82443643ed2dd64b99c01b9026dac549d96a9524f2e998a834926ee5f47c6fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82443643ed2dd64b99c01b9026dac549d96a9524f2e998a834926ee5f47c6fe9->leave($__internal_82443643ed2dd64b99c01b9026dac549d96a9524f2e998a834926ee5f47c6fe9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceb98798dd1c86950c99f5339a78925b79fdd8fa18780aab021df4dc8c0d1b6a = $this->env->getExtension("native_profiler");
        $__internal_ceb98798dd1c86950c99f5339a78925b79fdd8fa18780aab021df4dc8c0d1b6a->enter($__internal_ceb98798dd1c86950c99f5339a78925b79fdd8fa18780aab021df4dc8c0d1b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ceb98798dd1c86950c99f5339a78925b79fdd8fa18780aab021df4dc8c0d1b6a->leave($__internal_ceb98798dd1c86950c99f5339a78925b79fdd8fa18780aab021df4dc8c0d1b6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
