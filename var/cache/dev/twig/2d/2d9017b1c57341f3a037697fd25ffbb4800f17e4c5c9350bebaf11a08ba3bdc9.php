<?php

/* BladeTesterCalendarBundle:Event:listByMonth.html.twig */
class __TwigTemplate_0c3ab9415df2a29631af5725189d917829fcb5bc70477a78547040d7c657b93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:listByMonth.html.twig", 1);
        $this->blocks = array(
            'calendar_date_selector' => array($this, 'block_calendar_date_selector'),
            'calendar_body' => array($this, 'block_calendar_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_533ec80837d42ffd244303d8d4e16754b7cddf46eb769d0dcb518ae1769232bb = $this->env->getExtension("native_profiler");
        $__internal_533ec80837d42ffd244303d8d4e16754b7cddf46eb769d0dcb518ae1769232bb->enter($__internal_533ec80837d42ffd244303d8d4e16754b7cddf46eb769d0dcb518ae1769232bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:listByMonth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533ec80837d42ffd244303d8d4e16754b7cddf46eb769d0dcb518ae1769232bb->leave($__internal_533ec80837d42ffd244303d8d4e16754b7cddf46eb769d0dcb518ae1769232bb_prof);

    }

    // line 4
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        $__internal_55fd2e92026bccba1719266f0cb236a3fa3ebc422a0605edcc3d6543f495faeb = $this->env->getExtension("native_profiler");
        $__internal_55fd2e92026bccba1719266f0cb236a3fa3ebc422a0605edcc3d6543f495faeb->enter($__internal_55fd2e92026bccba1719266f0cb236a3fa3ebc422a0605edcc3d6543f495faeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_date_selector"));

        // line 5
        echo "    <table class=\"dp-monthtable\" role=\"presentation\">
        <tbody>
        <tr id=\"dp_0_header\" class=\"monthtableHeader\">
            <td colspan=\"5\" id=\"dp_0_cur\" class=\"dp-cell dp-sb-cur\">
                <span class=\"calendar-date-current-date\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%month% of %year%", array("%month%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "F")), "%year%" => twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"))), "html", null, true);
        echo "
                </span>
            </td>
            <td colspan=\"2\" class=\"dp-cell dp-sb-nav\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_month", array("year" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "m"))), "html", null, true);
        echo "\" class=\"btn\">&lt;</a>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_month", array("year" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "m"))), "html", null, true);
        echo "\" class=\"btn\">&gt;</a>
            </td>
        </tr>
        </tbody>
    </table>
";
        
        $__internal_55fd2e92026bccba1719266f0cb236a3fa3ebc422a0605edcc3d6543f495faeb->leave($__internal_55fd2e92026bccba1719266f0cb236a3fa3ebc422a0605edcc3d6543f495faeb_prof);

    }

    // line 23
    public function block_calendar_body($context, array $blocks = array())
    {
        $__internal_6d1009ef6be44789757006b79b853b76956f45af2f5f139cbe94c565df9c3a3e = $this->env->getExtension("native_profiler");
        $__internal_6d1009ef6be44789757006b79b853b76956f45af2f5f139cbe94c565df9c3a3e->enter($__internal_6d1009ef6be44789757006b79b853b76956f45af2f5f139cbe94c565df9c3a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_body"));

        // line 24
        echo "    <section class=\"schedule-content schedule-view-month\">

        <ul class=\"list-table\">
            <li class=\"list-table-header\">
                <ul class=\"list-table-row\">
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("monday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.monday"), "html", null, true);
        echo "</abbr></li>
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tuesday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.tuesday"), "html", null, true);
        echo "</abbr></li>
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("wednesday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.wednesday"), "html", null, true);
        echo "</abbr></li>
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("thursday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.thursday"), "html", null, true);
        echo "</abbr></li>
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("friday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.friday"), "html", null, true);
        echo "</abbr></li>
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("saturday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.saturday"), "html", null, true);
        echo "</abbr></li>
                    <li class=\"list-table-header-cell\"><abbr title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sunday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.sunday"), "html", null, true);
        echo "</abbr></li>
                </ul>
            </li>
            <li class=\"list-table-body\">
                ";
        // line 39
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
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 40
            echo "                    ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 7) == 0)) {
                echo "<ul class=\"list-table-row\">";
            }
            // line 41
            echo "                        <li class=\"list-table-cell";
            if ((twig_date_format_filter($this->env, $context["date"], "Y-m-d") == twig_date_format_filter($this->env, "today", "Y-m-d"))) {
                echo " today";
            }
            if ((twig_date_format_filter($this->env, $context["date"], "m") != twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"))) {
                echo " day-other-month";
            }
            echo "\">
                            <time class=\"day-number\" datetime=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
            echo "</time>
                            ";
            // line 43
            $this->loadTemplate("BladeTesterCalendarBundle:Event:group.html.twig", "BladeTesterCalendarBundle:Event:listByMonth.html.twig", 43)->display(array_merge($context, array("events" => $this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "allByDate", array(0 => $context["date"]), "method"))));
            // line 44
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("calendar_event_add");
            echo "?year=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y"), "html", null, true);
            echo "&month=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "m"), "html", null, true);
            echo "&day=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
            echo "&destination=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
            echo "\" class=\"full-link\"></a>
                        </li>
                        ";
            // line 46
            if ((($this->getAttribute($context["loop"], "index0", array()) % 7) == 6)) {
                echo "</ul>";
            }
            // line 47
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </ul>
            </li>
        </ul>
    </section>
";
        
        $__internal_6d1009ef6be44789757006b79b853b76956f45af2f5f139cbe94c565df9c3a3e->leave($__internal_6d1009ef6be44789757006b79b853b76956f45af2f5f139cbe94c565df9c3a3e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb2211521d7c72fd55fb8034b8dc364e68d3e04ee63ee491bde57c05a1f9e26a = $this->env->getExtension("native_profiler");
        $__internal_eb2211521d7c72fd55fb8034b8dc364e68d3e04ee63ee491bde57c05a1f9e26a->enter($__internal_eb2211521d7c72fd55fb8034b8dc364e68d3e04ee63ee491bde57c05a1f9e26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/calendar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_eb2211521d7c72fd55fb8034b8dc364e68d3e04ee63ee491bde57c05a1f9e26a->leave($__internal_eb2211521d7c72fd55fb8034b8dc364e68d3e04ee63ee491bde57c05a1f9e26a_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listByMonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  214 => 54,  203 => 48,  189 => 47,  185 => 46,  171 => 44,  169 => 43,  163 => 42,  153 => 41,  148 => 40,  131 => 39,  122 => 35,  116 => 34,  110 => 33,  104 => 32,  98 => 31,  92 => 30,  86 => 29,  79 => 24,  73 => 23,  60 => 15,  56 => 14,  49 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Event:base.html.twig' %}*/
/* */
/* */
/* {% block calendar_date_selector %}*/
/*     <table class="dp-monthtable" role="presentation">*/
/*         <tbody>*/
/*         <tr id="dp_0_header" class="monthtableHeader">*/
/*             <td colspan="5" id="dp_0_cur" class="dp-cell dp-sb-cur">*/
/*                 <span class="calendar-date-current-date">*/
/*                     {{ '%month% of %year%'|trans({ '%month%': current|date('F')|trans, '%year%': current|date('Y')}) }}*/
/*                 </span>*/
/*             </td>*/
/*             <td colspan="2" class="dp-cell dp-sb-nav">*/
/*                 <a href="{{ path('calendar_event_list_by_month', {'year': previous|date('Y'), 'month': previous|date('m')}) }}" class="btn">&lt;</a>*/
/*                 <a href="{{ path('calendar_event_list_by_month', {'year': next|date('Y'), 'month': next|date('m')}) }}" class="btn">&gt;</a>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* */
/* {% block calendar_body %}*/
/*     <section class="schedule-content schedule-view-month">*/
/* */
/*         <ul class="list-table">*/
/*             <li class="list-table-header">*/
/*                 <ul class="list-table-row">*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'monday'|trans }}">{{ 'bladetester_calendar.abbr.monday'|trans }}</abbr></li>*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'tuesday'|trans }}">{{ 'bladetester_calendar.abbr.tuesday'|trans }}</abbr></li>*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'wednesday'|trans }}">{{ 'bladetester_calendar.abbr.wednesday'|trans }}</abbr></li>*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'thursday'|trans }}">{{ 'bladetester_calendar.abbr.thursday'|trans }}</abbr></li>*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'friday'|trans }}">{{ 'bladetester_calendar.abbr.friday'|trans }}</abbr></li>*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'saturday'|trans }}">{{ 'bladetester_calendar.abbr.saturday'|trans }}</abbr></li>*/
/*                     <li class="list-table-header-cell"><abbr title="{{ 'sunday'|trans }}">{{ 'bladetester_calendar.abbr.sunday'|trans }}</abbr></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="list-table-body">*/
/*                 {% for date in dates %}*/
/*                     {% if loop.index0%7 == 0 %}<ul class="list-table-row">{% endif %}*/
/*                         <li class="list-table-cell{% if date|date('Y-m-d') == "today"|date('Y-m-d') %} today{% endif %}{% if date|date('m') != current|date('m') %} day-other-month{% endif %}">*/
/*                             <time class="day-number" datetime="{{ date|date('Y-m-d H:i') }}">{{ date|date('d') }}</time>*/
/*                             {% include 'BladeTesterCalendarBundle:Event:group.html.twig' with {'events': events.allByDate(date)} %}*/
/*                             <a href="{{ path('calendar_event_add') }}?year={{ date|date('Y')}}&month={{ date|date('m') }}&day={{ date|date('d') }}&destination={{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}" class="full-link"></a>*/
/*                         </li>*/
/*                         {% if loop.index0%7 == 6 %}</ul>{% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('bundles/bladetestercalendar/js/calendar.js') }}"></script>*/
/* {% endblock %}*/
/* */
