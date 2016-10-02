<?php

/* BladeTesterCalendarBundle:Event:listByWeek.html.twig */
class __TwigTemplate_f95bf9123f057a5bc506c01ae24f310db219bc50228086988fb4e390fb3b835a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:listByWeek.html.twig", 1);
        $this->blocks = array(
            'calendar_date_selector' => array($this, 'block_calendar_date_selector'),
            'calendar_body' => array($this, 'block_calendar_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6247e1555e3593116c0aea088533bb7defafd2b0403db090d61424d6bd1a4357 = $this->env->getExtension("native_profiler");
        $__internal_6247e1555e3593116c0aea088533bb7defafd2b0403db090d61424d6bd1a4357->enter($__internal_6247e1555e3593116c0aea088533bb7defafd2b0403db090d61424d6bd1a4357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:listByWeek.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6247e1555e3593116c0aea088533bb7defafd2b0403db090d61424d6bd1a4357->leave($__internal_6247e1555e3593116c0aea088533bb7defafd2b0403db090d61424d6bd1a4357_prof);

    }

    // line 3
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        $__internal_54e1570e1f561a6aac3bb8440d883e426910625179eb4cf5633d6bfbfc0c9859 = $this->env->getExtension("native_profiler");
        $__internal_54e1570e1f561a6aac3bb8440d883e426910625179eb4cf5633d6bfbfc0c9859->enter($__internal_54e1570e1f561a6aac3bb8440d883e426910625179eb4cf5633d6bfbfc0c9859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_date_selector"));

        // line 4
        echo "    <table class=\"dp-monthtable\" role=\"presentation\">
        <tbody>
        <tr id=\"dp_0_header\" class=\"monthtableHeader\">
            <td colspan=\"5\" id=\"dp_0_cur\" class=\"dp-cell dp-sb-cur\">
                <span class=\"calendar-date-current-date\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Week from %from_day%, %from_month% of %from_year% to %to_day%, %to_month% of %to_year%", array("%from_day%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d"), "%from_month%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "F")), "%from_year%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "Y"), "%to_day%" => twig_date_format_filter($this->env, $this->getAttribute(        // line 10
(isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates"))) - 1), array(), "array"), "d"), "%to_month%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates"))) - 1), array(), "array"), "F")), "%to_year%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates"))) - 1), array(), "array"), "Y"))), "html", null, true);
        echo "
                </span>
            </td>
            <td colspan=\"2\" class=\"dp-cell dp-sb-nav\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_week", array("year" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "m"), "day" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "d"))), "html", null, true);
        echo "\" class=\"btn\">&lt;</a>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_week", array("year" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "m"), "day" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "d"))), "html", null, true);
        echo "\" class=\"btn\">&gt;</a>
            </td>
        </tr>
        </tbody>
    </table>
";
        
        $__internal_54e1570e1f561a6aac3bb8440d883e426910625179eb4cf5633d6bfbfc0c9859->leave($__internal_54e1570e1f561a6aac3bb8440d883e426910625179eb4cf5633d6bfbfc0c9859_prof);

    }

    // line 22
    public function block_calendar_body($context, array $blocks = array())
    {
        $__internal_403c45ea53ad39648fa273f2b0e0ff4ed60fb713054f86b73e9dc8105aba0b95 = $this->env->getExtension("native_profiler");
        $__internal_403c45ea53ad39648fa273f2b0e0ff4ed60fb713054f86b73e9dc8105aba0b95->enter($__internal_403c45ea53ad39648fa273f2b0e0ff4ed60fb713054f86b73e9dc8105aba0b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_body"));

        // line 23
        echo "    <section class=\"schedule-content schedule-view-week\">
        <ul class=\"list-table\">
            <li class=\"list-table-header list-table-days\">
                <ul class=\"list-table-row\">
                    <li class=\"list-table-header-cell\"></li>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 29
            echo "                        <li class=\"list-table-header-cell\">
                            <abbr title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $context["date"], "l")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $context["date"], "D")), "html", null, true);
            echo "</abbr>
                            <time datetime=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y-m-d"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%month%-%day%", array("%day%" => twig_date_format_filter($this->env, $context["date"], "d"), "%month%" => twig_date_format_filter($this->env, $context["date"], "m"))), "html", null, true);
            echo "</time>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </ul>
            </li>

            <li class=\"list-table-body list-table-hours\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 39
            echo "                    <ul class=\"list-table-row\">
                        <li class=\"list-table-cell list-table-hour\">";
            // line 40
            echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
            echo ":00</li>
                        ";
            // line 41
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
                // line 42
                echo "                            <li class=\"list-table-cell\">
                                ";
                // line 43
                $this->loadTemplate("BladeTesterCalendarBundle:Event:group.html.twig", "BladeTesterCalendarBundle:Event:listByWeek.html.twig", 43)->display(array_merge($context, array("events" => $this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "allByDateAndTime", array(0 => $context["date"], 1 => $context["hour"]), "method"))));
                // line 44
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("calendar_event_add");
                echo "?year=";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y"), "html", null, true);
                echo "&month=";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "m"), "html", null, true);
                echo "&day=";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
                echo "&hour=";
                echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
                echo "&destination=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
                echo "\" class=\"full-link\"></a>
                            </li>
                        ";
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
            // line 47
            echo "                    </ul>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </li>
        </ul>
    </section>

";
        
        $__internal_403c45ea53ad39648fa273f2b0e0ff4ed60fb713054f86b73e9dc8105aba0b95->leave($__internal_403c45ea53ad39648fa273f2b0e0ff4ed60fb713054f86b73e9dc8105aba0b95_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listByWeek.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 49,  190 => 47,  162 => 44,  160 => 43,  157 => 42,  140 => 41,  136 => 40,  133 => 39,  116 => 38,  110 => 34,  99 => 31,  93 => 30,  90 => 29,  86 => 28,  79 => 23,  73 => 22,  60 => 15,  56 => 14,  49 => 10,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Event:base.html.twig' %}*/
/* */
/* {% block calendar_date_selector %}*/
/*     <table class="dp-monthtable" role="presentation">*/
/*         <tbody>*/
/*         <tr id="dp_0_header" class="monthtableHeader">*/
/*             <td colspan="5" id="dp_0_cur" class="dp-cell dp-sb-cur">*/
/*                 <span class="calendar-date-current-date">*/
/*                     {{ 'Week from %from_day%, %from_month% of %from_year% to %to_day%, %to_month% of %to_year%'|trans({'%from_day%': dates[0]|date('d'), '%from_month%': dates[0]|date('F')|trans, '%from_year%': dates[0]|date('Y'),*/
/*      '%to_day%': dates[dates|length - 1]|date('d'), '%to_month%': dates[dates|length - 1]|date('F')|trans, '%to_year%': dates[dates|length - 1]|date('Y')}) }}*/
/*                 </span>*/
/*             </td>*/
/*             <td colspan="2" class="dp-cell dp-sb-nav">*/
/*                 <a href="{{ path('calendar_event_list_by_week', {'year': previous|date('Y'), 'month': previous|date('m'), 'day':previous|date('d')}) }}" class="btn">&lt;</a>*/
/*                 <a href="{{ path('calendar_event_list_by_week', {'year': next|date('Y'), 'month': next|date('m'), 'day':next|date('d')}) }}" class="btn">&gt;</a>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block calendar_body %}*/
/*     <section class="schedule-content schedule-view-week">*/
/*         <ul class="list-table">*/
/*             <li class="list-table-header list-table-days">*/
/*                 <ul class="list-table-row">*/
/*                     <li class="list-table-header-cell"></li>*/
/*                     {% for date in dates %}*/
/*                         <li class="list-table-header-cell">*/
/*                             <abbr title="{{ date|date('l')|trans }}">{{ date|date('D')|trans }}</abbr>*/
/*                             <time datetime="{{ date|date('Y-m-d')}}">{{ '%month%-%day%'|trans({'%day%': date|date('d'), '%month%': date|date('m')}) }}</time>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li class="list-table-body list-table-hours">*/
/*                 {% for hour in 0..23 %}*/
/*                     <ul class="list-table-row">*/
/*                         <li class="list-table-cell list-table-hour">{{ hour }}:00</li>*/
/*                         {% for date in dates %}*/
/*                             <li class="list-table-cell">*/
/*                                 {% include 'BladeTesterCalendarBundle:Event:group.html.twig' with {'events': events.allByDateAndTime(date, hour)} %}*/
/*                                 <a href="{{ path('calendar_event_add') }}?year={{ date|date('Y')}}&month={{ date|date('m') }}&day={{ date|date('d') }}&hour={{ hour }}&destination={{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}" class="full-link"></a>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endfor %}*/
/*             </li>*/
/*         </ul>*/
/*     </section>*/
/* */
/* {% endblock %}*/
