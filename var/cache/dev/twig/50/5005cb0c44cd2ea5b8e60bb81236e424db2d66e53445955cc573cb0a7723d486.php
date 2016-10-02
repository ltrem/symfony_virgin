<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_c258f20d5d5de95af2f15f88bc67aaa7c3f40873105026b01771945f9e347738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56741a582d89627689f653fa97e2df256df6ff8a10a3dbb8e95ef8ea7819eb87 = $this->env->getExtension("native_profiler");
        $__internal_56741a582d89627689f653fa97e2df256df6ff8a10a3dbb8e95ef8ea7819eb87->enter($__internal_56741a582d89627689f653fa97e2df256df6ff8a10a3dbb8e95ef8ea7819eb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56741a582d89627689f653fa97e2df256df6ff8a10a3dbb8e95ef8ea7819eb87->leave($__internal_56741a582d89627689f653fa97e2df256df6ff8a10a3dbb8e95ef8ea7819eb87_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b2d783221a9de6f7af322c6c24b00b27e44458d41dc5c8978225753b2fba6d8e = $this->env->getExtension("native_profiler");
        $__internal_b2d783221a9de6f7af322c6c24b00b27e44458d41dc5c8978225753b2fba6d8e->enter($__internal_b2d783221a9de6f7af322c6c24b00b27e44458d41dc5c8978225753b2fba6d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_b2d783221a9de6f7af322c6c24b00b27e44458d41dc5c8978225753b2fba6d8e->leave($__internal_b2d783221a9de6f7af322c6c24b00b27e44458d41dc5c8978225753b2fba6d8e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 33,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <h3>Sonata Block Template</h3>*/
/*     If you want to use the <code>sonata.block.template</code> block type, you need to create a template :*/
/* */
/*     <pre>*/
/*         {%- verbatim -%}*/
/* {# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}*/
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     &lt;h3&gt;The block title&lt;/h3&gt;*/
/*     &lt;p&gt;*/
/*         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus*/
/*         vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,*/
/*         mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet*/
/*         massa volutpat auctor.*/
/*     &lt;/p&gt;*/
/* {% endblock %}*/
/*         {%- endverbatim -%}*/
/*     </pre>*/
/* */
/*     And then call it from a template with the <code>sonata_block_render</code> helper:*/
/* */
/*     <pre>*/
/* {%- verbatim -%}*/
/* {{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {*/
/*     'template': 'MyBundle:Block:my_block_feature_1.html.twig',*/
/* }) }}*/
/* {%- endverbatim -%}*/
/*     </pre>*/
/* {% endblock %}*/
/* */
