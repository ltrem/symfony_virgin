<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_c47e7cd738f5273b77d9736322ad489774aa1bf887e599b85c4fb2a2c7a74637 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e6c46183a85435babcc597ce722659fd283a1092a3e6bcd38d7bfb7c3275e3e = $this->env->getExtension("native_profiler");
        $__internal_4e6c46183a85435babcc597ce722659fd283a1092a3e6bcd38d7bfb7c3275e3e->enter($__internal_4e6c46183a85435babcc597ce722659fd283a1092a3e6bcd38d7bfb7c3275e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e6c46183a85435babcc597ce722659fd283a1092a3e6bcd38d7bfb7c3275e3e->leave($__internal_4e6c46183a85435babcc597ce722659fd283a1092a3e6bcd38d7bfb7c3275e3e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7631564aad0628d3f7162ad0f33f0a4efd044df651d919bab5b5719f69b70eb = $this->env->getExtension("native_profiler");
        $__internal_a7631564aad0628d3f7162ad0f33f0a4efd044df651d919bab5b5719f69b70eb->enter($__internal_a7631564aad0628d3f7162ad0f33f0a4efd044df651d919bab5b5719f69b70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_a7631564aad0628d3f7162ad0f33f0a4efd044df651d919bab5b5719f69b70eb->leave($__internal_a7631564aad0628d3f7162ad0f33f0a4efd044df651d919bab5b5719f69b70eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
