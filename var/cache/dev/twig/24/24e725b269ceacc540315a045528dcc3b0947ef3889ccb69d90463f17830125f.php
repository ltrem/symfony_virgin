<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_19c766c32565ba06d7d19fc59641e3c481a232936c1d8e744fae40c3198e4fbe extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6ff154aa78e7acf3f8cf645decf9e9121985b41658d5fec4d07446bac0b6d44 = $this->env->getExtension("native_profiler");
        $__internal_c6ff154aa78e7acf3f8cf645decf9e9121985b41658d5fec4d07446bac0b6d44->enter($__internal_c6ff154aa78e7acf3f8cf645decf9e9121985b41658d5fec4d07446bac0b6d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ff154aa78e7acf3f8cf645decf9e9121985b41658d5fec4d07446bac0b6d44->leave($__internal_c6ff154aa78e7acf3f8cf645decf9e9121985b41658d5fec4d07446bac0b6d44_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_323041a8487b036404f84dc5ad7893a9a7db4c2e23cd116a6a82a35ec570faf3 = $this->env->getExtension("native_profiler");
        $__internal_323041a8487b036404f84dc5ad7893a9a7db4c2e23cd116a6a82a35ec570faf3->enter($__internal_323041a8487b036404f84dc5ad7893a9a7db4c2e23cd116a6a82a35ec570faf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_323041a8487b036404f84dc5ad7893a9a7db4c2e23cd116a6a82a35ec570faf3->leave($__internal_323041a8487b036404f84dc5ad7893a9a7db4c2e23cd116a6a82a35ec570faf3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
