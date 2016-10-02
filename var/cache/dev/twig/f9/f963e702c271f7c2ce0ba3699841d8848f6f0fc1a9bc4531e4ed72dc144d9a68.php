<?php

/* @BladeTesterCalendar/Event/listItem.html.twig */
class __TwigTemplate_20bc95f7cf20d7903ca9c039c1029192b3b37d616b4a5a6ce1dc6c517bfdfa9a extends Twig_Template
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
        $__internal_4526bc1f264f7906d6817911f2014bd7f2fc07c06e998566e45bad2b1bdf4ee2 = $this->env->getExtension("native_profiler");
        $__internal_4526bc1f264f7906d6817911f2014bd7f2fc07c06e998566e45bad2b1bdf4ee2->enter($__internal_4526bc1f264f7906d6817911f2014bd7f2fc07c06e998566e45bad2b1bdf4ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BladeTesterCalendar/Event/listItem.html.twig"));

        // line 1
        echo "<li class=\"appointment ";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array())) {
            echo "appointment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "color", array()), "html", null, true);
        }
        echo "\">";
        $this->loadTemplate("BladeTesterCalendarBundle:Event:event.html.twig", "@BladeTesterCalendar/Event/listItem.html.twig", 1)->display(array_merge($context, array("event" => (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")))));
        echo "</li>";
        
        $__internal_4526bc1f264f7906d6817911f2014bd7f2fc07c06e998566e45bad2b1bdf4ee2->leave($__internal_4526bc1f264f7906d6817911f2014bd7f2fc07c06e998566e45bad2b1bdf4ee2_prof);

    }

    public function getTemplateName()
    {
        return "@BladeTesterCalendar/Event/listItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <li class="appointment {% if event.category %}appointment-{{ event.category.color }}{% endif %}">{% include 'BladeTesterCalendarBundle:Event:event.html.twig' with { 'event' : event } %}</li>*/
