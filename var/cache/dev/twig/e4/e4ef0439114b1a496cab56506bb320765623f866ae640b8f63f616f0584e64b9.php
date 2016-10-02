<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_664fb872bcf086cd32fb7820c86c55e8469beaa7d42d94ae86062c2db367605e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1677a35dd814adcd599c69e519c105d2f54d4ed1e011793e5862535233b43d3 = $this->env->getExtension("native_profiler");
        $__internal_c1677a35dd814adcd599c69e519c105d2f54d4ed1e011793e5862535233b43d3->enter($__internal_c1677a35dd814adcd599c69e519c105d2f54d4ed1e011793e5862535233b43d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1677a35dd814adcd599c69e519c105d2f54d4ed1e011793e5862535233b43d3->leave($__internal_c1677a35dd814adcd599c69e519c105d2f54d4ed1e011793e5862535233b43d3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_088245b29ef913038f67aad47a30fbcb63e6b7d8894ba866c3fb9a84031340aa = $this->env->getExtension("native_profiler");
        $__internal_088245b29ef913038f67aad47a30fbcb63e6b7d8894ba866c3fb9a84031340aa->enter($__internal_088245b29ef913038f67aad47a30fbcb63e6b7d8894ba866c3fb9a84031340aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_088245b29ef913038f67aad47a30fbcb63e6b7d8894ba866c3fb9a84031340aa->leave($__internal_088245b29ef913038f67aad47a30fbcb63e6b7d8894ba866c3fb9a84031340aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
