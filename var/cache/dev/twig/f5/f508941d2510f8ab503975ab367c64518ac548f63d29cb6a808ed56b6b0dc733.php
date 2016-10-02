<?php

/* @BladeTesterCalendar/Category/form.html.twig */
class __TwigTemplate_c6971947772636abc4ac32a235d67e61f5c769f1c98732e04b3ed4538e715b6b extends Twig_Template
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
        $__internal_b516b872d7d2da0f32b348a3d5d63224d159e6802b30d46532e848ebb7b5207e = $this->env->getExtension("native_profiler");
        $__internal_b516b872d7d2da0f32b348a3d5d63224d159e6802b30d46532e848ebb7b5207e->enter($__internal_b516b872d7d2da0f32b348a3d5d63224d159e6802b30d46532e848ebb7b5207e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BladeTesterCalendar/Category/form.html.twig"));

        // line 1
        echo "<ul>
    <li>
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </li>
    <li>
        <ul class=\"calendar-colors\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 10
            echo "                <li id=\"";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\" class=\"calendar-color event-color-";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "color", array()) == $context["color"])) {
                echo " active";
            }
            echo "\"></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </li>
    <li style=\"display:none\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'widget');
        echo "
    </li>
</ul>
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

";
        
        $__internal_b516b872d7d2da0f32b348a3d5d63224d159e6802b30d46532e848ebb7b5207e->leave($__internal_b516b872d7d2da0f32b348a3d5d63224d159e6802b30d46532e848ebb7b5207e_prof);

    }

    public function getTemplateName()
    {
        return "@BladeTesterCalendar/Category/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  72 => 17,  68 => 16,  64 => 15,  59 => 12,  45 => 10,  41 => 9,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <ul>*/
/*     <li>*/
/*         {{ form_label(form.name) }}*/
/*         {{ form_errors(form.name) }}*/
/*         {{ form_widget(form.name) }}*/
/*     </li>*/
/*     <li>*/
/*         <ul class="calendar-colors">*/
/*             {% for color in colors %}*/
/*                 <li id="{{ color }}" class="calendar-color event-color-{{ color }}{% if category.color == color %} active{% endif %}"></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </li>*/
/*     <li style="display:none">*/
/*         {{ form_label(form.color) }}*/
/*         {{ form_errors(form.color) }}*/
/*         {{ form_widget(form.color) }}*/
/*     </li>*/
/* </ul>*/
/* {{ form_rest(form) }}*/
/* */
/* */
