<?php

/* BladeTesterCalendarBundle:Category:list.html.twig */
class __TwigTemplate_6f51c348433608e44e3e0676851f2a1454342825c1444bb8529437dfdb289b1c extends Twig_Template
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
        $__internal_c06ab1f54ffe3c2cb395d0ffab7093dff26a9f056999d6ec436d75c32bdec3ef = $this->env->getExtension("native_profiler");
        $__internal_c06ab1f54ffe3c2cb395d0ffab7093dff26a9f056999d6ec436d75c32bdec3ef->enter($__internal_c06ab1f54ffe3c2cb395d0ffab7093dff26a9f056999d6ec436d75c32bdec3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Category:list.html.twig"));

        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.title.category.list"), "html", null, true);
        echo "</h2>

";
        // line 3
        if ((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) {
            // line 4
            echo "    <ul>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "            <li class=\"event-category event-color-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "color", array()), "html", null, true);
                echo "\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>
                (<a class=\"alert\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.event_category.delete_warning"), "html", null, true);
                echo "');\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.delete"), "html", null, true);
                echo "</a>)
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
";
        } else {
            // line 13
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.list.no_categories"), "html", null, true);
            echo "</p>
";
        }
        // line 15
        echo "
<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("calendar_category_add");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.category.add"), "html", null, true);
        echo "</a>
";
        
        $__internal_c06ab1f54ffe3c2cb395d0ffab7093dff26a9f056999d6ec436d75c32bdec3ef->leave($__internal_c06ab1f54ffe3c2cb395d0ffab7093dff26a9f056999d6ec436d75c32bdec3ef_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  71 => 15,  65 => 13,  61 => 11,  48 => 8,  42 => 7,  37 => 6,  33 => 5,  30 => 4,  28 => 3,  22 => 1,);
    }
}
/* <h2>{{ "bladetester_calendar.title.category.list"|trans }}</h2>*/
/* */
/* {% if categories %}*/
/*     <ul>*/
/*         {% for category in categories %}*/
/*             <li class="event-category event-color-{{ category.color }}">*/
/*                 <a href="{{ path('calendar_category_edit', {'id': category.id}) }}">{{ category.name }}</a>*/
/*                 (<a class="alert" href="{{ path('calendar_category_delete', {'id': category.id}) }}" onclick="return confirm('{{ 'bladetester_calendar.label.event_category.delete_warning'|trans }}');">{{ 'bladetester_calendar.label.delete'|trans }}</a>)*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% else %}*/
/*     <p>{{ "bladetester_calendar.list.no_categories"|trans }}</p>*/
/* {% endif %}*/
/* */
/* <a href="{{ path('calendar_category_add') }}">{{ 'bladetester_calendar.label.category.add'|trans }}</a>*/
/* */
