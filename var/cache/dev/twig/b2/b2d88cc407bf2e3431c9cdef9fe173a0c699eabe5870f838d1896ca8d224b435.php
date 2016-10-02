<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_74e5e5224cd2497af2b427321640a339dfbc743e0999663a82a78f547b2b8460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c7664fa2414b3b1f2e7fffd7212682ec59e7ae1e2d43ed3305b996184f812de = $this->env->getExtension("native_profiler");
        $__internal_3c7664fa2414b3b1f2e7fffd7212682ec59e7ae1e2d43ed3305b996184f812de->enter($__internal_3c7664fa2414b3b1f2e7fffd7212682ec59e7ae1e2d43ed3305b996184f812de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7664fa2414b3b1f2e7fffd7212682ec59e7ae1e2d43ed3305b996184f812de->leave($__internal_3c7664fa2414b3b1f2e7fffd7212682ec59e7ae1e2d43ed3305b996184f812de_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_712554073a036431143b2258e9a62e84627be1bd94b404ad7a29bf8aceb60f2d = $this->env->getExtension("native_profiler");
        $__internal_712554073a036431143b2258e9a62e84627be1bd94b404ad7a29bf8aceb60f2d->enter($__internal_712554073a036431143b2258e9a62e84627be1bd94b404ad7a29bf8aceb60f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_712554073a036431143b2258e9a62e84627be1bd94b404ad7a29bf8aceb60f2d->leave($__internal_712554073a036431143b2258e9a62e84627be1bd94b404ad7a29bf8aceb60f2d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
