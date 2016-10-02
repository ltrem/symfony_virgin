<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_869451e67589268394a36373bd1ced6772a054e97a0b9248bcd94c08f15cf057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc062a6a2da52901a6398ededa65df260263c16fe5b3cc8117b3c0f2064259c1 = $this->env->getExtension("native_profiler");
        $__internal_cc062a6a2da52901a6398ededa65df260263c16fe5b3cc8117b3c0f2064259c1->enter($__internal_cc062a6a2da52901a6398ededa65df260263c16fe5b3cc8117b3c0f2064259c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc062a6a2da52901a6398ededa65df260263c16fe5b3cc8117b3c0f2064259c1->leave($__internal_cc062a6a2da52901a6398ededa65df260263c16fe5b3cc8117b3c0f2064259c1_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_7484ab1632f616c56dfbe6b4bbff516476ecfe7b9a447a3eea5f6485be9c570a = $this->env->getExtension("native_profiler");
        $__internal_7484ab1632f616c56dfbe6b4bbff516476ecfe7b9a447a3eea5f6485be9c570a->enter($__internal_7484ab1632f616c56dfbe6b4bbff516476ecfe7b9a447a3eea5f6485be9c570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_7484ab1632f616c56dfbe6b4bbff516476ecfe7b9a447a3eea5f6485be9c570a->leave($__internal_7484ab1632f616c56dfbe6b4bbff516476ecfe7b9a447a3eea5f6485be9c570a_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_9f490ee827b90bb2a676d2f90bb10ce336216d83203f3445f0afca03b47b432f = $this->env->getExtension("native_profiler");
        $__internal_9f490ee827b90bb2a676d2f90bb10ce336216d83203f3445f0afca03b47b432f->enter($__internal_9f490ee827b90bb2a676d2f90bb10ce336216d83203f3445f0afca03b47b432f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_9f490ee827b90bb2a676d2f90bb10ce336216d83203f3445f0afca03b47b432f->leave($__internal_9f490ee827b90bb2a676d2f90bb10ce336216d83203f3445f0afca03b47b432f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
