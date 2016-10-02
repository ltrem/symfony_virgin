<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_a5a734f15014246cd285824b122de3c86c3870d94b621f283e690a328debbd6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad44ebb86c4d3baa1364985b07a847b0b7d4d064c3a615b7ff91e1e47256bcf6 = $this->env->getExtension("native_profiler");
        $__internal_ad44ebb86c4d3baa1364985b07a847b0b7d4d064c3a615b7ff91e1e47256bcf6->enter($__internal_ad44ebb86c4d3baa1364985b07a847b0b7d4d064c3a615b7ff91e1e47256bcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_ad44ebb86c4d3baa1364985b07a847b0b7d4d064c3a615b7ff91e1e47256bcf6->leave($__internal_ad44ebb86c4d3baa1364985b07a847b0b7d4d064c3a615b7ff91e1e47256bcf6_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_c5131a759244d1b6111dcbfed970f9b07c17faba85eb51c4748be8f26158205d = $this->env->getExtension("native_profiler");
        $__internal_c5131a759244d1b6111dcbfed970f9b07c17faba85eb51c4748be8f26158205d->enter($__internal_c5131a759244d1b6111dcbfed970f9b07c17faba85eb51c4748be8f26158205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_c5131a759244d1b6111dcbfed970f9b07c17faba85eb51c4748be8f26158205d->leave($__internal_c5131a759244d1b6111dcbfed970f9b07c17faba85eb51c4748be8f26158205d_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_79058e6ad936ac12ca7405429f91f3a4e880f124dfc74cbf03deed7fab8e3f6c = $this->env->getExtension("native_profiler");
        $__internal_79058e6ad936ac12ca7405429f91f3a4e880f124dfc74cbf03deed7fab8e3f6c->enter($__internal_79058e6ad936ac12ca7405429f91f3a4e880f124dfc74cbf03deed7fab8e3f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_79058e6ad936ac12ca7405429f91f3a4e880f124dfc74cbf03deed7fab8e3f6c->leave($__internal_79058e6ad936ac12ca7405429f91f3a4e880f124dfc74cbf03deed7fab8e3f6c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
