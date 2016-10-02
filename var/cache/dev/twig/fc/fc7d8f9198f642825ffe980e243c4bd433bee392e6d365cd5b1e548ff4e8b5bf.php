<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_9eaa431c7e548e7cd234b04dfd679e5b09235d96d72c03342657a5d8b3a89ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6f7eedd6a915dd0c85580bbb7da048ddc3f77f2cfba6ba15d6f04e36afa3570 = $this->env->getExtension("native_profiler");
        $__internal_c6f7eedd6a915dd0c85580bbb7da048ddc3f77f2cfba6ba15d6f04e36afa3570->enter($__internal_c6f7eedd6a915dd0c85580bbb7da048ddc3f77f2cfba6ba15d6f04e36afa3570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_c6f7eedd6a915dd0c85580bbb7da048ddc3f77f2cfba6ba15d6f04e36afa3570->leave($__internal_c6f7eedd6a915dd0c85580bbb7da048ddc3f77f2cfba6ba15d6f04e36afa3570_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_e48e4723a0fb9b4df9eb55b63ba05faf685b526de5f11b9ca34d2225ed2e1597 = $this->env->getExtension("native_profiler");
        $__internal_e48e4723a0fb9b4df9eb55b63ba05faf685b526de5f11b9ca34d2225ed2e1597->enter($__internal_e48e4723a0fb9b4df9eb55b63ba05faf685b526de5f11b9ca34d2225ed2e1597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_e48e4723a0fb9b4df9eb55b63ba05faf685b526de5f11b9ca34d2225ed2e1597->leave($__internal_e48e4723a0fb9b4df9eb55b63ba05faf685b526de5f11b9ca34d2225ed2e1597_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_bf4961b0011efbd6a08754e0f0601d2f14f505d5f858e53b2750388ea43d6787 = $this->env->getExtension("native_profiler");
        $__internal_bf4961b0011efbd6a08754e0f0601d2f14f505d5f858e53b2750388ea43d6787->enter($__internal_bf4961b0011efbd6a08754e0f0601d2f14f505d5f858e53b2750388ea43d6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_bf4961b0011efbd6a08754e0f0601d2f14f505d5f858e53b2750388ea43d6787->leave($__internal_bf4961b0011efbd6a08754e0f0601d2f14f505d5f858e53b2750388ea43d6787_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_f25ce352a98745a0151e2cf596398e1de3aa0869f4c39253acc8d62b710eff0e = $this->env->getExtension("native_profiler");
        $__internal_f25ce352a98745a0151e2cf596398e1de3aa0869f4c39253acc8d62b710eff0e->enter($__internal_f25ce352a98745a0151e2cf596398e1de3aa0869f4c39253acc8d62b710eff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_f25ce352a98745a0151e2cf596398e1de3aa0869f4c39253acc8d62b710eff0e->leave($__internal_f25ce352a98745a0151e2cf596398e1de3aa0869f4c39253acc8d62b710eff0e_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_c3d1b623942723cdccb4f16d8045ec8b32777c5dd9bc17bb62f45e9753de30f3 = $this->env->getExtension("native_profiler");
        $__internal_c3d1b623942723cdccb4f16d8045ec8b32777c5dd9bc17bb62f45e9753de30f3->enter($__internal_c3d1b623942723cdccb4f16d8045ec8b32777c5dd9bc17bb62f45e9753de30f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_c3d1b623942723cdccb4f16d8045ec8b32777c5dd9bc17bb62f45e9753de30f3->leave($__internal_c3d1b623942723cdccb4f16d8045ec8b32777c5dd9bc17bb62f45e9753de30f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
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
/* <div class="form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}" id="sonata-ba-field-container-{{ field_element.vars.id }}">*/
/*     {% block label %}*/
/*         {% if field_description.options.name is defined %}*/
/*             {{ form_label(field_element, field_description.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(field_element) }}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     <div class="col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/* */
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*         {% if field_description.help %}*/
/*             <span class="help-block">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>*/
/*         {% endif %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
