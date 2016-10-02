<?php

/* :todo:edit.html.twig */
class __TwigTemplate_e9bd61ae084adf90d6d471f41b91c0bf21b595a1308832df998cdf26f59c4e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90a3d77feb031215ffc2b2aadc998ac8323b5d7ef93e8cb5de034826123b276e = $this->env->getExtension("native_profiler");
        $__internal_90a3d77feb031215ffc2b2aadc998ac8323b5d7ef93e8cb5de034826123b276e->enter($__internal_90a3d77feb031215ffc2b2aadc998ac8323b5d7ef93e8cb5de034826123b276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a3d77feb031215ffc2b2aadc998ac8323b5d7ef93e8cb5de034826123b276e->leave($__internal_90a3d77feb031215ffc2b2aadc998ac8323b5d7ef93e8cb5de034826123b276e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d79c3bae91e6ada3db49ecaa13f20ca2de3504246579c4abab66ab77f2988b7f = $this->env->getExtension("native_profiler");
        $__internal_d79c3bae91e6ada3db49ecaa13f20ca2de3504246579c4abab66ab77f2988b7f->enter($__internal_d79c3bae91e6ada3db49ecaa13f20ca2de3504246579c4abab66ab77f2988b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"page-header\">Edit Todo</h2>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_d79c3bae91e6ada3db49ecaa13f20ca2de3504246579c4abab66ab77f2988b7f->leave($__internal_d79c3bae91e6ada3db49ecaa13f20ca2de3504246579c4abab66ab77f2988b7f_prof);

    }

    public function getTemplateName()
    {
        return ":todo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h2 class="page-header">Edit Todo</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock body %}*/
