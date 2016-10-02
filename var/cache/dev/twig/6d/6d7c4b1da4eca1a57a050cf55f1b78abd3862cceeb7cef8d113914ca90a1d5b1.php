<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig */
class __TwigTemplate_e89de6499a3b141fcb3008cc37cf52d2a591a6a27d97039a59cd5a66ff443548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b8ca649ba6a1df6a55638559e9b9e86eb33e81e16ec6b9962bb75ce64d0e420 = $this->env->getExtension("native_profiler");
        $__internal_4b8ca649ba6a1df6a55638559e9b9e86eb33e81e16ec6b9962bb75ce64d0e420->enter($__internal_4b8ca649ba6a1df6a55638559e9b9e86eb33e81e16ec6b9962bb75ce64d0e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8ca649ba6a1df6a55638559e9b9e86eb33e81e16ec6b9962bb75ce64d0e420->leave($__internal_4b8ca649ba6a1df6a55638559e9b9e86eb33e81e16ec6b9962bb75ce64d0e420_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ade69258738dade55b78aa263a6dc340561272bc1bab786bcaecc427b2d22624 = $this->env->getExtension("native_profiler");
        $__internal_ade69258738dade55b78aa263a6dc340561272bc1bab786bcaecc427b2d22624->enter($__internal_ade69258738dade55b78aa263a6dc340561272bc1bab786bcaecc427b2d22624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 18
        echo "    ";
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 20
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        // line 27
        echo "    </ul>
";
        
        $__internal_ade69258738dade55b78aa263a6dc340561272bc1bab786bcaecc427b2d22624->leave($__internal_ade69258738dade55b78aa263a6dc340561272bc1bab786bcaecc427b2d22624_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  84 => 26,  75 => 24,  70 => 23,  67 => 22,  56 => 20,  51 => 19,  48 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     <ul class="sonata-ba-show-one-to-many">*/
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasassociationadmin and field_description.associationadmin.isGranted(route_role) and field_description.associationadmin.hasRoute(route_name) %}*/
/*         {% for element in value%}*/
/*             <li><a href="{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}">{{ element|render_relation_element(field_description) }}</a></li>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for element in value%}*/
/*             <li>{{ element|render_relation_element(field_description) }}</li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
