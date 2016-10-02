<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_24bdf2ecf45b08b5a6f00c720f4f11c24ffd4441ab62cd45ed09b100b47ee071 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b64dc66bb5caee7a631c42a1c505b1c82d8ac8944d30c831d5c64d225182e3e = $this->env->getExtension("native_profiler");
        $__internal_8b64dc66bb5caee7a631c42a1c505b1c82d8ac8944d30c831d5c64d225182e3e->enter($__internal_8b64dc66bb5caee7a631c42a1c505b1c82d8ac8944d30c831d5c64d225182e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b64dc66bb5caee7a631c42a1c505b1c82d8ac8944d30c831d5c64d225182e3e->leave($__internal_8b64dc66bb5caee7a631c42a1c505b1c82d8ac8944d30c831d5c64d225182e3e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_567b9db33b3990922de3ba4c3702c90f2e546505a8a722ee07947c5b89196158 = $this->env->getExtension("native_profiler");
        $__internal_567b9db33b3990922de3ba4c3702c90f2e546505a8a722ee07947c5b89196158->enter($__internal_567b9db33b3990922de3ba4c3702c90f2e546505a8a722ee07947c5b89196158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_567b9db33b3990922de3ba4c3702c90f2e546505a8a722ee07947c5b89196158->leave($__internal_567b9db33b3990922de3ba4c3702c90f2e546505a8a722ee07947c5b89196158_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
