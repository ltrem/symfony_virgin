<?php

/* @SonataAdmin/CRUD/_email_link.html.twig */
class __TwigTemplate_66f9d112e4686e037916017100f3b3af469391268fafddcdd1e6a45db4570ca7 extends Twig_Template
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
        $__internal_590094c512aee2bd546bf5324ef23efc915d59cfa778316765e4f8f5033d36d5 = $this->env->getExtension("native_profiler");
        $__internal_590094c512aee2bd546bf5324ef23efc915d59cfa778316765e4f8f5033d36d5->enter($__internal_590094c512aee2bd546bf5324ef23efc915d59cfa778316765e4f8f5033d36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/_email_link.html.twig"));

        // line 2
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 3
            echo "&nbsp;";
        } elseif (($this->getAttribute($this->getAttribute(        // line 4
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "as_string", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "as_string", array()))) {
            // line 5
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        } else {
            // line 7
            $context["parameters"] = array();
            // line 8
            echo "    ";
            $context["subject"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "subject", array()), "")) : (""));
            // line 9
            echo "    ";
            $context["body"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "body", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "body", array()), "")) : (""));
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_test_empty((isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")))) {
                // line 12
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("subject" => (isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject"))));
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")))) {
                // line 15
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("body" => (isset($context["body"]) ? $context["body"] : $this->getContext($context, "body"))));
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <a href=\"mailto:";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            if ((twig_length_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))) > 0)) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "html", null, true);
            }
            echo "\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            // line 20
            echo "</a>";
        }
        
        $__internal_590094c512aee2bd546bf5324ef23efc915d59cfa778316765e4f8f5033d36d5->leave($__internal_590094c512aee2bd546bf5324ef23efc915d59cfa778316765e4f8f5033d36d5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/_email_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  69 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  50 => 14,  47 => 13,  44 => 12,  42 => 11,  39 => 10,  36 => 9,  33 => 8,  31 => 7,  28 => 5,  26 => 4,  24 => 3,  22 => 2,);
    }
}
/* */
/* {%- if value is empty -%}*/
/*     &nbsp;*/
/* {%- elseif field_description.options.as_string is defined and field_description.options.as_string -%}*/
/*     {{ value }}*/
/* {%- else -%}*/
/*     {% set parameters = {} %}*/
/*     {% set subject = field_description.options.subject|default('') %}*/
/*     {% set body = field_description.options.body|default('') %}*/
/* */
/*     {% if subject is not empty %}*/
/*         {% set parameters = parameters|merge({'subject': subject}) %}*/
/*     {% endif %}*/
/*     {% if body is not empty %}*/
/*         {% set parameters = parameters|merge({'body': body}) %}*/
/*     {% endif %}*/
/* */
/*     <a href="mailto:{{ value }}{% if parameters|length > 0 %}?{{- parameters|url_encode -}}{% endif %}">*/
/*         {{- value -}}*/
/*     </a>*/
/* {%- endif -%}*/
/* */
