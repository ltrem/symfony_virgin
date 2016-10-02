<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_d42aabe18036f7265d46802f240ea28b50320ca3a654131f73428a4e428a0097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d95da6ef046495dbf8850b5998f8e84d095f4620cf218923a9faa033a9fb0db = $this->env->getExtension("native_profiler");
        $__internal_7d95da6ef046495dbf8850b5998f8e84d095f4620cf218923a9faa033a9fb0db->enter($__internal_7d95da6ef046495dbf8850b5998f8e84d095f4620cf218923a9faa033a9fb0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_7d95da6ef046495dbf8850b5998f8e84d095f4620cf218923a9faa033a9fb0db->leave($__internal_7d95da6ef046495dbf8850b5998f8e84d095f4620cf218923a9faa033a9fb0db_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2ec377d2910df8bdccc89c9c13a439480123d6635760940920bc8fae56bf9f9 = $this->env->getExtension("native_profiler");
        $__internal_e2ec377d2910df8bdccc89c9c13a439480123d6635760940920bc8fae56bf9f9->enter($__internal_e2ec377d2910df8bdccc89c9c13a439480123d6635760940920bc8fae56bf9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_e2ec377d2910df8bdccc89c9c13a439480123d6635760940920bc8fae56bf9f9->leave($__internal_e2ec377d2910df8bdccc89c9c13a439480123d6635760940920bc8fae56bf9f9_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_11274d9bd43da7d99b3dcae35f2c45ccc1de9649798f6cd333a56a4ec2cc0833 = $this->env->getExtension("native_profiler");
        $__internal_11274d9bd43da7d99b3dcae35f2c45ccc1de9649798f6cd333a56a4ec2cc0833->enter($__internal_11274d9bd43da7d99b3dcae35f2c45ccc1de9649798f6cd333a56a4ec2cc0833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_11274d9bd43da7d99b3dcae35f2c45ccc1de9649798f6cd333a56a4ec2cc0833->leave($__internal_11274d9bd43da7d99b3dcae35f2c45ccc1de9649798f6cd333a56a4ec2cc0833_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e36400f0dc7ecb30dca55894d95bc1f2c22c695890c0c4b52daf8d2a7b7f17f0 = $this->env->getExtension("native_profiler");
        $__internal_e36400f0dc7ecb30dca55894d95bc1f2c22c695890c0c4b52daf8d2a7b7f17f0->enter($__internal_e36400f0dc7ecb30dca55894d95bc1f2c22c695890c0c4b52daf8d2a7b7f17f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e36400f0dc7ecb30dca55894d95bc1f2c22c695890c0c4b52daf8d2a7b7f17f0->leave($__internal_e36400f0dc7ecb30dca55894d95bc1f2c22c695890c0c4b52daf8d2a7b7f17f0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
