<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_a521d92d6ee4607f0a493fb2740841a2b994219a08669e560c00565f77e958cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
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
        $__internal_4487419dcaded03c7a7c447c297baffd2e7f1e912ca2159eddc8ad740addde39 = $this->env->getExtension("native_profiler");
        $__internal_4487419dcaded03c7a7c447c297baffd2e7f1e912ca2159eddc8ad740addde39->enter($__internal_4487419dcaded03c7a7c447c297baffd2e7f1e912ca2159eddc8ad740addde39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4487419dcaded03c7a7c447c297baffd2e7f1e912ca2159eddc8ad740addde39->leave($__internal_4487419dcaded03c7a7c447c297baffd2e7f1e912ca2159eddc8ad740addde39_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_b7ede989bd87dfa3ef50e3b03d41478fc678e3dda076e825916cfa5966dd61a8 = $this->env->getExtension("native_profiler");
        $__internal_b7ede989bd87dfa3ef50e3b03d41478fc678e3dda076e825916cfa5966dd61a8->enter($__internal_b7ede989bd87dfa3ef50e3b03d41478fc678e3dda076e825916cfa5966dd61a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_b7ede989bd87dfa3ef50e3b03d41478fc678e3dda076e825916cfa5966dd61a8->leave($__internal_b7ede989bd87dfa3ef50e3b03d41478fc678e3dda076e825916cfa5966dd61a8_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_858cef7009d62bc6506da773971b03e79b045de3c52bdb0b8c4bf721f3b1de46 = $this->env->getExtension("native_profiler");
        $__internal_858cef7009d62bc6506da773971b03e79b045de3c52bdb0b8c4bf721f3b1de46->enter($__internal_858cef7009d62bc6506da773971b03e79b045de3c52bdb0b8c4bf721f3b1de46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_858cef7009d62bc6506da773971b03e79b045de3c52bdb0b8c4bf721f3b1de46->leave($__internal_858cef7009d62bc6506da773971b03e79b045de3c52bdb0b8c4bf721f3b1de46_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
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
