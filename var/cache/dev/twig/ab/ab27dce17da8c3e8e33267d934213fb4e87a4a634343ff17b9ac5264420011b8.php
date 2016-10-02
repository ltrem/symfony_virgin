<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_0e85f37db248b5f4b17946e2cd17e84e3f4d45537ca8c85f1f6bd93a37d5be5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_8245f27c7c347363eeacc62af49320b400e94b85908a3f7798af8f708160e90e = $this->env->getExtension("native_profiler");
        $__internal_8245f27c7c347363eeacc62af49320b400e94b85908a3f7798af8f708160e90e->enter($__internal_8245f27c7c347363eeacc62af49320b400e94b85908a3f7798af8f708160e90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8245f27c7c347363eeacc62af49320b400e94b85908a3f7798af8f708160e90e->leave($__internal_8245f27c7c347363eeacc62af49320b400e94b85908a3f7798af8f708160e90e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_19e9e4771edcd29a9683b15d8bfb7d443843f933b9ed0649ddc45b53644b1bc0 = $this->env->getExtension("native_profiler");
        $__internal_19e9e4771edcd29a9683b15d8bfb7d443843f933b9ed0649ddc45b53644b1bc0->enter($__internal_19e9e4771edcd29a9683b15d8bfb7d443843f933b9ed0649ddc45b53644b1bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_19e9e4771edcd29a9683b15d8bfb7d443843f933b9ed0649ddc45b53644b1bc0->leave($__internal_19e9e4771edcd29a9683b15d8bfb7d443843f933b9ed0649ddc45b53644b1bc0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
