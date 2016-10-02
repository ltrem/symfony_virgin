<?php

/* BladeTesterCalendarBundle:Event:group.html.twig */
class __TwigTemplate_86e0a113838dcd59bfb3c5433b5f3f5c263eb9906c5e4e4281f37ec95d95c6d8 extends Twig_Template
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
        $__internal_f60f0c8b33f64652c31c6e57a5e41e61767f77c3d17a3919b0483b45de999a9d = $this->env->getExtension("native_profiler");
        $__internal_f60f0c8b33f64652c31c6e57a5e41e61767f77c3d17a3919b0483b45de999a9d->enter($__internal_f60f0c8b33f64652c31c6e57a5e41e61767f77c3d17a3919b0483b45de999a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:group.html.twig"));

        // line 1
        if ((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))) {
            // line 2
            echo "    <ul class=\"schedule-group-appointments\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 4
                echo "            ";
                $this->loadTemplate("BladeTesterCalendarBundle:Event:listItem.html.twig", "BladeTesterCalendarBundle:Event:group.html.twig", 4)->display(array_merge($context, array("event" => $context["event"])));
                // line 5
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>
";
        }
        
        $__internal_f60f0c8b33f64652c31c6e57a5e41e61767f77c3d17a3919b0483b45de999a9d->leave($__internal_f60f0c8b33f64652c31c6e57a5e41e61767f77c3d17a3919b0483b45de999a9d_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  47 => 5,  44 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if events %}*/
/*     <ul class="schedule-group-appointments">*/
/*         {% for event in events %}*/
/*             {% include 'BladeTesterCalendarBundle:Event:listItem.html.twig' with { 'event' : event } %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
