<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_f4deb16e6118c2473ec61729f909f4b844b33b8180c9e7c126613d45e2a5c93f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66094dcfdc27d2ad6c3a29683b2aeecb33213298160a94fe867ea7ef71504465 = $this->env->getExtension("native_profiler");
        $__internal_66094dcfdc27d2ad6c3a29683b2aeecb33213298160a94fe867ea7ef71504465->enter($__internal_66094dcfdc27d2ad6c3a29683b2aeecb33213298160a94fe867ea7ef71504465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66094dcfdc27d2ad6c3a29683b2aeecb33213298160a94fe867ea7ef71504465->leave($__internal_66094dcfdc27d2ad6c3a29683b2aeecb33213298160a94fe867ea7ef71504465_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_694ca8ecd6bbe4b29d6df3117154dcac19247438c1710245a64efe1db4df4762 = $this->env->getExtension("native_profiler");
        $__internal_694ca8ecd6bbe4b29d6df3117154dcac19247438c1710245a64efe1db4df4762->enter($__internal_694ca8ecd6bbe4b29d6df3117154dcac19247438c1710245a64efe1db4df4762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_694ca8ecd6bbe4b29d6df3117154dcac19247438c1710245a64efe1db4df4762->leave($__internal_694ca8ecd6bbe4b29d6df3117154dcac19247438c1710245a64efe1db4df4762_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
