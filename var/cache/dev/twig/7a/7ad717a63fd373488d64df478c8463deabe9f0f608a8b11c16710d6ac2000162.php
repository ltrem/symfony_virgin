<?php

/* todo/edit.html.twig */
class __TwigTemplate_5202af86c2fc2b484138226a48094acc90981e07608abcda1bbb9cc277c81f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/edit.html.twig", 1);
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
        $__internal_1bc55965cdcbef21a919983737adf025849327609ce0bdc71ef50406140491dc = $this->env->getExtension("native_profiler");
        $__internal_1bc55965cdcbef21a919983737adf025849327609ce0bdc71ef50406140491dc->enter($__internal_1bc55965cdcbef21a919983737adf025849327609ce0bdc71ef50406140491dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc55965cdcbef21a919983737adf025849327609ce0bdc71ef50406140491dc->leave($__internal_1bc55965cdcbef21a919983737adf025849327609ce0bdc71ef50406140491dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de93d741a908e08f1c4cdbd9141fd653ad09d9a8cf7217708aed3aea61f8cf4b = $this->env->getExtension("native_profiler");
        $__internal_de93d741a908e08f1c4cdbd9141fd653ad09d9a8cf7217708aed3aea61f8cf4b->enter($__internal_de93d741a908e08f1c4cdbd9141fd653ad09d9a8cf7217708aed3aea61f8cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de93d741a908e08f1c4cdbd9141fd653ad09d9a8cf7217708aed3aea61f8cf4b->leave($__internal_de93d741a908e08f1c4cdbd9141fd653ad09d9a8cf7217708aed3aea61f8cf4b_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
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
