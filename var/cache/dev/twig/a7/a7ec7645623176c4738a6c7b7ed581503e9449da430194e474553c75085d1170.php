<?php

/* @BladeTesterCalendar/Event/event.html.twig */
class __TwigTemplate_471d00e4ec4e39fa154a0f04e2bf421ef0f573dc88a7c13077687c0ed5aec00f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e7f6488386938a6a239c75d04218b06193dc49c06218e25f5560772d31f1634 = $this->env->getExtension("native_profiler");
        $__internal_7e7f6488386938a6a239c75d04218b06193dc49c06218e25f5560772d31f1634->enter($__internal_7e7f6488386938a6a239c75d04218b06193dc49c06218e25f5560772d31f1634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BladeTesterCalendar/Event/event.html.twig"));

        // line 1
        echo "<p>
  <time datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "start", array()), "Y-m-d H:i"), "html", null, true);
        echo "\" class=\"appointment-date\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "start", array()), "H:i"), "html", null, true);
        echo "</time>
  <a href=\"#\" class=\"appointment-issue\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "</a>
</p>
<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
        echo "\" class=\"full-link\" title=\"";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "name", array()), "html", null, true);
            echo " :: ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "\"></a>
";
        
        $__internal_7e7f6488386938a6a239c75d04218b06193dc49c06218e25f5560772d31f1634->leave($__internal_7e7f6488386938a6a239c75d04218b06193dc49c06218e25f5560772d31f1634_prof);

    }

    public function getTemplateName()
    {
        return "@BladeTesterCalendar/Event/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <p>*/
/*   <time datetime="{{ event.start|date('Y-m-d H:i') }}" class="appointment-date">{{ event.start|date('H:i') }}</time>*/
/*   <a href="#" class="appointment-issue">{{ event.title }}</a>*/
/* </p>*/
/* <a href="{{ path('calendar_event_edit', { id: event.id })}}?destination={{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}" class="full-link" title="{% if event.category %}{{ event.category.name }} :: {% endif %}{{ event.title }}"></a>*/
/* */
