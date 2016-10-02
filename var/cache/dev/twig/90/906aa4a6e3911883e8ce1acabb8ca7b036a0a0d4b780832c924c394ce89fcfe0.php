<?php

/* BladeTesterCalendarBundle:Event:listItem.html.twig */
class __TwigTemplate_7a24653a99026fb879c5eee863d34f1689d2115fff7fbe41602a28e715a13b97 extends Twig_Template
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
        $__internal_0b887026d6c2ffbb4b04b998986dbc6e6fa22f4f247b5e84b698afa8fd78ff8c = $this->env->getExtension("native_profiler");
        $__internal_0b887026d6c2ffbb4b04b998986dbc6e6fa22f4f247b5e84b698afa8fd78ff8c->enter($__internal_0b887026d6c2ffbb4b04b998986dbc6e6fa22f4f247b5e84b698afa8fd78ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:listItem.html.twig"));

        // line 1
        echo "<li class=\"appointment ";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array())) {
            echo "appointment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "color", array()), "html", null, true);
        }
        echo "\">";
        $this->loadTemplate("BladeTesterCalendarBundle:Event:event.html.twig", "BladeTesterCalendarBundle:Event:listItem.html.twig", 1)->display(array_merge($context, array("event" => (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")))));
        echo "</li>";
        
        $__internal_0b887026d6c2ffbb4b04b998986dbc6e6fa22f4f247b5e84b698afa8fd78ff8c->leave($__internal_0b887026d6c2ffbb4b04b998986dbc6e6fa22f4f247b5e84b698afa8fd78ff8c_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listItem.html.twig";
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
