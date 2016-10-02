<?php

/* BladeTesterCalendarBundle:Calendar:showMini.html.twig */
class __TwigTemplate_2d8a0f9ab215f3adab69bd3044a0395623a88c10cd884e16c8ec1b9259c1f4f5 extends Twig_Template
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
        $__internal_5f83fd3c1a32fe22c49b2ce0269320c6680f512dcaae04b02847bcd6d12cd966 = $this->env->getExtension("native_profiler");
        $__internal_5f83fd3c1a32fe22c49b2ce0269320c6680f512dcaae04b02847bcd6d12cd966->enter($__internal_5f83fd3c1a32fe22c49b2ce0269320c6680f512dcaae04b02847bcd6d12cd966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Calendar:showMini.html.twig"));

        // line 1
        echo "<div id=\"mini-calendar\" class=\"dpdiv goog-zippy-expanded goog-zippy-content\">
    <div class=\"dp-monthtablediv monthtableSpace\">
        <table></table>
        <table class=\"dp-monthtable monthtableBody\" summary=\"Minicalendario - marzo de 2013\" cellspacing=\"0\" cellpadding=\"0\" id=\"dp_0_tbl\">
            <tbody>
                <tr class=\"dp-days\">
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Monday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.monday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tuesday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.tuesday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Wednesday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.wednesday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thursday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.thursday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Friday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.friday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh dp-cell dp-weekendh\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Saturday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.saturday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh dp-cell dp-weekendh\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sunday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.sunday"), "html", null, true);
        echo "</th>
                </tr>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 16
            echo "                    ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 7) == 0)) {
                echo "<tr>";
            }
            // line 17
            echo "                        <td class=\"day";
            if ((twig_date_format_filter($this->env, $context["day"], "Y-m-d") == twig_date_format_filter($this->env, "today", "Y-m-d"))) {
                echo " today";
            }
            if ((twig_date_format_filter($this->env, $context["day"], "m") != twig_date_format_filter($this->env, "today", "m"))) {
                echo " offmonth";
            }
            echo "\">
                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, $context["day"], "Y"), "month" => twig_date_format_filter($this->env, $context["day"], "m"), "day" => twig_date_format_filter($this->env, $context["day"], "d"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["day"], "d"), "html", null, true);
            echo "</a>
                        </td>
                    ";
            // line 20
            if ((($this->getAttribute($context["loop"], "index0", array()) % 7) == 6)) {
                echo "</tr>";
            }
            // line 21
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_5f83fd3c1a32fe22c49b2ce0269320c6680f512dcaae04b02847bcd6d12cd966->leave($__internal_5f83fd3c1a32fe22c49b2ce0269320c6680f512dcaae04b02847bcd6d12cd966_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Calendar:showMini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 22,  116 => 21,  112 => 20,  105 => 18,  95 => 17,  90 => 16,  73 => 15,  66 => 13,  60 => 12,  54 => 11,  48 => 10,  42 => 9,  36 => 8,  30 => 7,  22 => 1,);
    }
}
/* <div id="mini-calendar" class="dpdiv goog-zippy-expanded goog-zippy-content">*/
/*     <div class="dp-monthtablediv monthtableSpace">*/
/*         <table></table>*/
/*         <table class="dp-monthtable monthtableBody" summary="Minicalendario - marzo de 2013" cellspacing="0" cellpadding="0" id="dp_0_tbl">*/
/*             <tbody>*/
/*                 <tr class="dp-days">*/
/*                     <th scope="col" class="dp-cell dp-dayh" title="{{ 'Monday'|trans }}">{{ 'bladetester_calendar.abbr.monday'|trans }}</th>*/
/*                     <th scope="col" class="dp-cell dp-dayh" title="{{ 'Tuesday'|trans }}">{{ 'bladetester_calendar.abbr.tuesday'|trans }}</th>*/
/*                     <th scope="col" class="dp-cell dp-dayh" title="{{ 'Wednesday'|trans }}">{{ 'bladetester_calendar.abbr.wednesday'|trans }}</th>*/
/*                     <th scope="col" class="dp-cell dp-dayh" title="{{ 'Thursday'|trans }}">{{ 'bladetester_calendar.abbr.thursday'|trans }}</th>*/
/*                     <th scope="col" class="dp-cell dp-dayh" title="{{ 'Friday'|trans }}">{{ 'bladetester_calendar.abbr.friday'|trans }}</th>*/
/*                     <th scope="col" class="dp-cell dp-dayh dp-cell dp-weekendh" title="{{ 'Saturday'|trans }}">{{ 'bladetester_calendar.abbr.saturday'|trans }}</th>*/
/*                     <th scope="col" class="dp-cell dp-dayh dp-cell dp-weekendh" title="{{ 'Sunday'|trans }}">{{ 'bladetester_calendar.abbr.sunday'|trans }}</th>*/
/*                 </tr>*/
/*                 {% for day in dates %}*/
/*                     {% if loop.index0%7 == 0 %}<tr>{% endif %}*/
/*                         <td class="day{% if day|date('Y-m-d') == "today"|date('Y-m-d') %} today{% endif %}{% if day|date('m') != "today"|date('m') %} offmonth{% endif %}">*/
/*                             <a href="{{ path('calendar_event_list_by_day', {'year': day|date('Y'), 'month': day|date('m'), 'day': day|date('d') }) }}">{{ day|date('d') }}</a>*/
/*                         </td>*/
/*                     {% if loop.index0%7 == 6 %}</tr>{% endif %}*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
