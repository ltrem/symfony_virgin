<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_cd71d3e610a903cabbfaf83fbb8013b7389183c11b2449bdd0cc66df373c4e5a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8398c2d8305bf4cad153d52b2197e3aed53d9e7ce689a89c4647cd39e3a50e7d = $this->env->getExtension("native_profiler");
        $__internal_8398c2d8305bf4cad153d52b2197e3aed53d9e7ce689a89c4647cd39e3a50e7d->enter($__internal_8398c2d8305bf4cad153d52b2197e3aed53d9e7ce689a89c4647cd39e3a50e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8398c2d8305bf4cad153d52b2197e3aed53d9e7ce689a89c4647cd39e3a50e7d->leave($__internal_8398c2d8305bf4cad153d52b2197e3aed53d9e7ce689a89c4647cd39e3a50e7d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c6b497ac33ca59355d33ea23eb813962086f717d3edff33bfe574faeb244a50a = $this->env->getExtension("native_profiler");
        $__internal_c6b497ac33ca59355d33ea23eb813962086f717d3edff33bfe574faeb244a50a->enter($__internal_c6b497ac33ca59355d33ea23eb813962086f717d3edff33bfe574faeb244a50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_c6b497ac33ca59355d33ea23eb813962086f717d3edff33bfe574faeb244a50a->leave($__internal_c6b497ac33ca59355d33ea23eb813962086f717d3edff33bfe574faeb244a50a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
