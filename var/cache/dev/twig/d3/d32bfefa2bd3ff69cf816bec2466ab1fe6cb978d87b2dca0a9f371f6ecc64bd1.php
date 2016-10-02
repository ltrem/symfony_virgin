<?php

/* todo/details.html.twig */
class __TwigTemplate_8ea237824790dee98e2f6007d1d18036714752f7589788a6bc9d031a11a80b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/details.html.twig", 1);
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
        $__internal_9432f57e55bc912dc26241ddb6ea44336166ffc5bf2f693f6a8e94eec3a00779 = $this->env->getExtension("native_profiler");
        $__internal_9432f57e55bc912dc26241ddb6ea44336166ffc5bf2f693f6a8e94eec3a00779->enter($__internal_9432f57e55bc912dc26241ddb6ea44336166ffc5bf2f693f6a8e94eec3a00779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9432f57e55bc912dc26241ddb6ea44336166ffc5bf2f693f6a8e94eec3a00779->leave($__internal_9432f57e55bc912dc26241ddb6ea44336166ffc5bf2f693f6a8e94eec3a00779_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d0f9ad24918856f01fd43c35879250d614b94a1d04721d7e1983307443749d9 = $this->env->getExtension("native_profiler");
        $__internal_9d0f9ad24918856f01fd43c35879250d614b94a1d04721d7e1983307443749d9->enter($__internal_9d0f9ad24918856f01fd43c35879250d614b94a1d04721d7e1983307443749d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <a class=\"btn btn-default\" href=\"/\">Back To Todos</a>
    <hr />

    <h2 class=\"page-header\">
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "
    </h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Description: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due Date: <strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>

";
        
        $__internal_9d0f9ad24918856f01fd43c35879250d614b94a1d04721d7e1983307443749d9->leave($__internal_9d0f9ad24918856f01fd43c35879250d614b94a1d04721d7e1983307443749d9_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  57 => 13,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <a class="btn btn-default" href="/">Back To Todos</a>*/
/*     <hr />*/
/* */
/*     <h2 class="page-header">*/
/*         {{ todo.name }}*/
/*     </h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{ todo.category }}</li>*/
/*         <li class="list-group-item">Priority: {{ todo.priority }}</li>*/
/*         <li class="list-group-item">Description: {{ todo.description }}</li>*/
/*         <li class="list-group-item">Due Date: <strong>{{ todo.dueDate|date('F j, Y, g:i a') }}</strong></li>*/
/*     </ul>*/
/* */
/* {% endblock body %}*/
