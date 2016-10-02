<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_1ceef61c70a2a2618e5d93b5b42724bf94ad286055ec2e37819bc511d597ed37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_78db472316a5a4c4a791236622c971003a6cf99fa8c65d0dbb8edba5d7b068e8 = $this->env->getExtension("native_profiler");
        $__internal_78db472316a5a4c4a791236622c971003a6cf99fa8c65d0dbb8edba5d7b068e8->enter($__internal_78db472316a5a4c4a791236622c971003a6cf99fa8c65d0dbb8edba5d7b068e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78db472316a5a4c4a791236622c971003a6cf99fa8c65d0dbb8edba5d7b068e8->leave($__internal_78db472316a5a4c4a791236622c971003a6cf99fa8c65d0dbb8edba5d7b068e8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8f0c5d88df768924c98e6f169c3d04e65a153c4722078ec5f3ba34c14e2022c5 = $this->env->getExtension("native_profiler");
        $__internal_8f0c5d88df768924c98e6f169c3d04e65a153c4722078ec5f3ba34c14e2022c5->enter($__internal_8f0c5d88df768924c98e6f169c3d04e65a153c4722078ec5f3ba34c14e2022c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8f0c5d88df768924c98e6f169c3d04e65a153c4722078ec5f3ba34c14e2022c5->leave($__internal_8f0c5d88df768924c98e6f169c3d04e65a153c4722078ec5f3ba34c14e2022c5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
