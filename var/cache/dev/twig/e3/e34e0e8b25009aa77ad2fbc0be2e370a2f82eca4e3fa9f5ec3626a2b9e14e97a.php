<?php

/* BladeTesterCalendarBundle:Event:listByDay.html.twig */
class __TwigTemplate_8363c2ee0ff384c898f2918e4247c754e4b6419ad1f00188dccdd87c8c1e5a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:listByDay.html.twig", 1);
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
        $__internal_fe7a82a7e89a9817cec66d6446992229c1900c5f917a2204dd213b48739b83fb = $this->env->getExtension("native_profiler");
        $__internal_fe7a82a7e89a9817cec66d6446992229c1900c5f917a2204dd213b48739b83fb->enter($__internal_fe7a82a7e89a9817cec66d6446992229c1900c5f917a2204dd213b48739b83fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:listByDay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7a82a7e89a9817cec66d6446992229c1900c5f917a2204dd213b48739b83fb->leave($__internal_fe7a82a7e89a9817cec66d6446992229c1900c5f917a2204dd213b48739b83fb_prof);

    }

    // line 3
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        $__internal_aadd825327a0a3d892057368416c97e3e68a527a3bf249d6f470e375b72550b0 = $this->env->getExtension("native_profiler");
        $__internal_aadd825327a0a3d892057368416c97e3e68a527a3bf249d6f470e375b72550b0->enter($__internal_aadd825327a0a3d892057368416c97e3e68a527a3bf249d6f470e375b72550b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_date_selector"));

        // line 4
        echo "    <table class=\"dp-monthtable\" role=\"presentation\">
        <tbody>
        <tr id=\"dp_0_header\" class=\"monthtableHeader\">
            <td colspan=\"5\" id=\"dp_0_cur\" class=\"dp-cell dp-sb-cur\">
                <span class=\"calHeaderSpace\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%week_day%, %month% %day%th of %year%", array("%week_day%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "l")), "%day%" => twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "%month%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "F")), "%year%" => twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"))), "html", null, true);
        echo "
                </span>
            </td>
            <td colspan=\"2\" class=\"dp-cell dp-sb-nav\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "m"), "day" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "d"))), "html", null, true);
        echo "\" class=\"btn\">&lt;</a>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "m"), "day" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "d"))), "html", null, true);
        echo "\" class=\"btn\">&gt;</a>
            </td>
        </tr>
        </tbody>
    </table>
";
        
        $__internal_aadd825327a0a3d892057368416c97e3e68a527a3bf249d6f470e375b72550b0->leave($__internal_aadd825327a0a3d892057368416c97e3e68a527a3bf249d6f470e375b72550b0_prof);

    }

    // line 21
    public function block_calendar_body($context, array $blocks = array())
    {
        $__internal_d7b079ad7469ae951ec5885fa2d068a52752a156dfc681674e211d5950ffa9a3 = $this->env->getExtension("native_profiler");
        $__internal_d7b079ad7469ae951ec5885fa2d068a52752a156dfc681674e211d5950ffa9a3->enter($__internal_d7b079ad7469ae951ec5885fa2d068a52752a156dfc681674e211d5950ffa9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_body"));

        // line 22
        echo "    <section class=\"schedule-content schedule-view-day\">
        <ul class=\"timetable\">
            ";
        // line 24
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
            // line 25
            echo "            <li class=\"timetable-hour-block\">
                <time datetime=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
            echo ":00\" class=\"timetable-hour\">";
            echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
            echo ":00</time>
                ";
            // line 27
            $this->loadTemplate("BladeTesterCalendarBundle:Event:group.html.twig", "BladeTesterCalendarBundle:Event:listByDay.html.twig", 27)->display(array_merge($context, array("events" => $this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "allByDateAndTime", array(0 => (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), 1 => $context["hour"]), "method"))));
            // line 28
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("calendar_event_add");
            echo "?year=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"), "html", null, true);
            echo "&month=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"), "html", null, true);
            echo "&day=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
    </section>
";
        
        $__internal_d7b079ad7469ae951ec5885fa2d068a52752a156dfc681674e211d5950ffa9a3->leave($__internal_d7b079ad7469ae951ec5885fa2d068a52752a156dfc681674e211d5950ffa9a3_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listByDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  112 => 28,  110 => 27,  102 => 26,  99 => 25,  82 => 24,  78 => 22,  72 => 21,  59 => 14,  55 => 13,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Event:base.html.twig' %}*/
/* */
/* {% block calendar_date_selector %}*/
/*     <table class="dp-monthtable" role="presentation">*/
/*         <tbody>*/
/*         <tr id="dp_0_header" class="monthtableHeader">*/
/*             <td colspan="5" id="dp_0_cur" class="dp-cell dp-sb-cur">*/
/*                 <span class="calHeaderSpace">*/
/*                     {{ '%week_day%, %month% %day%th of %year%'|trans({'%week_day%': current|date('l')|trans, '%day%': current|date('d'), '%month%': current|date('F')|trans, '%year%': current|date('Y')}) }}*/
/*                 </span>*/
/*             </td>*/
/*             <td colspan="2" class="dp-cell dp-sb-nav">*/
/*                 <a href="{{ path('calendar_event_list_by_day', {'year': previous|date('Y'), 'month': previous|date('m'), 'day':previous|date('d')}) }}" class="btn">&lt;</a>*/
/*                 <a href="{{ path('calendar_event_list_by_day', {'year': next|date('Y'), 'month': next|date('m'), 'day':next|date('d')}) }}" class="btn">&gt;</a>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block calendar_body %}*/
/*     <section class="schedule-content schedule-view-day">*/
/*         <ul class="timetable">*/
/*             {% for hour in 0..23 %}*/
/*             <li class="timetable-hour-block">*/
/*                 <time datetime="{{ current|date('Y-m-d') }} {{ hour }}:00" class="timetable-hour">{{ hour }}:00</time>*/
/*                 {% include 'BladeTesterCalendarBundle:Event:group.html.twig' with {'events': events.allByDateAndTime(current, hour)} %}*/
/*                 <a href="{{ path('calendar_event_add') }}?year={{ current|date('Y')}}&month={{ current|date('m') }}&day={{ current|date('d') }}&hour={{ hour }}&destination={{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}" class="full-link"></a>*/
/*             </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </section>*/
/* {% endblock %}*/
