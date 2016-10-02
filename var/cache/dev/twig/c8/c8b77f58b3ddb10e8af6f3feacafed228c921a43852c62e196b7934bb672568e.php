<?php

/* todo/create.html.twig */
class __TwigTemplate_c33ac314bf1dda12a34a4e1bf0a37e54ce7b18dd5dfbefac573dffa21cf87f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
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
        $__internal_32285c9d1425201e57877e167ed7c71104f8715750e180c352f854a442eba76a = $this->env->getExtension("native_profiler");
        $__internal_32285c9d1425201e57877e167ed7c71104f8715750e180c352f854a442eba76a->enter($__internal_32285c9d1425201e57877e167ed7c71104f8715750e180c352f854a442eba76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32285c9d1425201e57877e167ed7c71104f8715750e180c352f854a442eba76a->leave($__internal_32285c9d1425201e57877e167ed7c71104f8715750e180c352f854a442eba76a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bca162c043a443e5e66f3a85a65c2431841d1f0b7562c380c8dfefd4a777558 = $this->env->getExtension("native_profiler");
        $__internal_2bca162c043a443e5e66f3a85a65c2431841d1f0b7562c380c8dfefd4a777558->enter($__internal_2bca162c043a443e5e66f3a85a65c2431841d1f0b7562c380c8dfefd4a777558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"page-header\">Add Todo</h2>
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
        
        $__internal_2bca162c043a443e5e66f3a85a65c2431841d1f0b7562c380c8dfefd4a777558->leave($__internal_2bca162c043a443e5e66f3a85a65c2431841d1f0b7562c380c8dfefd4a777558_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
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
/*     <h2 class="page-header">Add Todo</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock body %}*/
