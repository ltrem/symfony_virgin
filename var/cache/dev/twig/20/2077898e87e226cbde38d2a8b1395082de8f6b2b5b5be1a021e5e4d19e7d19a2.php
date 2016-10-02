<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_33ea2c67dd3ac85064e64cfee8a28ed8ac7e614b70e48402f293c9580391d31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dfbb04d84091374bc6a1bdbfd1d65759a55e2730be3ffd9927c161a46769263 = $this->env->getExtension("native_profiler");
        $__internal_0dfbb04d84091374bc6a1bdbfd1d65759a55e2730be3ffd9927c161a46769263->enter($__internal_0dfbb04d84091374bc6a1bdbfd1d65759a55e2730be3ffd9927c161a46769263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_0dfbb04d84091374bc6a1bdbfd1d65759a55e2730be3ffd9927c161a46769263->leave($__internal_0dfbb04d84091374bc6a1bdbfd1d65759a55e2730be3ffd9927c161a46769263_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_332bb6d5eba6facc951e0762c3aba16489febabaa0dfa09c3aa5f03c4b5f49ee = $this->env->getExtension("native_profiler");
        $__internal_332bb6d5eba6facc951e0762c3aba16489febabaa0dfa09c3aa5f03c4b5f49ee->enter($__internal_332bb6d5eba6facc951e0762c3aba16489febabaa0dfa09c3aa5f03c4b5f49ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_332bb6d5eba6facc951e0762c3aba16489febabaa0dfa09c3aa5f03c4b5f49ee->leave($__internal_332bb6d5eba6facc951e0762c3aba16489febabaa0dfa09c3aa5f03c4b5f49ee_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
