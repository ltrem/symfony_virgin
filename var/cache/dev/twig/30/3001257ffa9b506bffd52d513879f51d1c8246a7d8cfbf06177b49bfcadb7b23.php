<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_d7d0bc46520a97f3f6912a2c61e1370dd15a0b43cc4e6025eaae56f6ba1aa57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef3b5a4613e01359036be91f13a10beb3d15b72dcb89fd330785ec4be740ca4d = $this->env->getExtension("native_profiler");
        $__internal_ef3b5a4613e01359036be91f13a10beb3d15b72dcb89fd330785ec4be740ca4d->enter($__internal_ef3b5a4613e01359036be91f13a10beb3d15b72dcb89fd330785ec4be740ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_ef3b5a4613e01359036be91f13a10beb3d15b72dcb89fd330785ec4be740ca4d->leave($__internal_ef3b5a4613e01359036be91f13a10beb3d15b72dcb89fd330785ec4be740ca4d_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_384e880e48e968ec2d1fdfb685d023a40479e2f23a66cf95208e2ba565b56563 = $this->env->getExtension("native_profiler");
        $__internal_384e880e48e968ec2d1fdfb685d023a40479e2f23a66cf95208e2ba565b56563->enter($__internal_384e880e48e968ec2d1fdfb685d023a40479e2f23a66cf95208e2ba565b56563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_384e880e48e968ec2d1fdfb685d023a40479e2f23a66cf95208e2ba565b56563->leave($__internal_384e880e48e968ec2d1fdfb685d023a40479e2f23a66cf95208e2ba565b56563_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_0ed7d6f28d2f996ea612c68b1eea5b337d99b0b198959e3470dfca68ef75c572 = $this->env->getExtension("native_profiler");
        $__internal_0ed7d6f28d2f996ea612c68b1eea5b337d99b0b198959e3470dfca68ef75c572->enter($__internal_0ed7d6f28d2f996ea612c68b1eea5b337d99b0b198959e3470dfca68ef75c572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_0ed7d6f28d2f996ea612c68b1eea5b337d99b0b198959e3470dfca68ef75c572->leave($__internal_0ed7d6f28d2f996ea612c68b1eea5b337d99b0b198959e3470dfca68ef75c572_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_852c1c2d50bff4b5643f1c4e26bce1940d1f495a6eea7c0feb8cca2824608173 = $this->env->getExtension("native_profiler");
        $__internal_852c1c2d50bff4b5643f1c4e26bce1940d1f495a6eea7c0feb8cca2824608173->enter($__internal_852c1c2d50bff4b5643f1c4e26bce1940d1f495a6eea7c0feb8cca2824608173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_852c1c2d50bff4b5643f1c4e26bce1940d1f495a6eea7c0feb8cca2824608173->leave($__internal_852c1c2d50bff4b5643f1c4e26bce1940d1f495a6eea7c0feb8cca2824608173_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
