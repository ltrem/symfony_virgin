<?php

/* :todo:details.html.twig */
class __TwigTemplate_c1a71f0f26818ca03101b655d55a9936f3df9087e31c200fd0805cccadacad71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:details.html.twig", 1);
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
        $__internal_55190691d2cb063d3f122eda14a333ebbaa5ddfbd6de5a5f25b6e82239666cc7 = $this->env->getExtension("native_profiler");
        $__internal_55190691d2cb063d3f122eda14a333ebbaa5ddfbd6de5a5f25b6e82239666cc7->enter($__internal_55190691d2cb063d3f122eda14a333ebbaa5ddfbd6de5a5f25b6e82239666cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55190691d2cb063d3f122eda14a333ebbaa5ddfbd6de5a5f25b6e82239666cc7->leave($__internal_55190691d2cb063d3f122eda14a333ebbaa5ddfbd6de5a5f25b6e82239666cc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6f0b13cfb63aa8e53ae6aa00d90bd072e5e1eee545be4c470b5afda4430a63 = $this->env->getExtension("native_profiler");
        $__internal_3d6f0b13cfb63aa8e53ae6aa00d90bd072e5e1eee545be4c470b5afda4430a63->enter($__internal_3d6f0b13cfb63aa8e53ae6aa00d90bd072e5e1eee545be4c470b5afda4430a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d6f0b13cfb63aa8e53ae6aa00d90bd072e5e1eee545be4c470b5afda4430a63->leave($__internal_3d6f0b13cfb63aa8e53ae6aa00d90bd072e5e1eee545be4c470b5afda4430a63_prof);

    }

    public function getTemplateName()
    {
        return ":todo:details.html.twig";
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
