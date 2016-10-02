<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_12d4762f9c23e7f300232d016808c98c69e9690724bf628f4382368eabb076af extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7330719ba40ea2a3d606bc16b53e901355975e29b3a171d47713fed46b99f53 = $this->env->getExtension("native_profiler");
        $__internal_a7330719ba40ea2a3d606bc16b53e901355975e29b3a171d47713fed46b99f53->enter($__internal_a7330719ba40ea2a3d606bc16b53e901355975e29b3a171d47713fed46b99f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7330719ba40ea2a3d606bc16b53e901355975e29b3a171d47713fed46b99f53->leave($__internal_a7330719ba40ea2a3d606bc16b53e901355975e29b3a171d47713fed46b99f53_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_808706a03e818a635b4386d80a5ce1074c2b64594a87df6f8e632f56b72f2113 = $this->env->getExtension("native_profiler");
        $__internal_808706a03e818a635b4386d80a5ce1074c2b64594a87df6f8e632f56b72f2113->enter($__internal_808706a03e818a635b4386d80a5ce1074c2b64594a87df6f8e632f56b72f2113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_808706a03e818a635b4386d80a5ce1074c2b64594a87df6f8e632f56b72f2113->leave($__internal_808706a03e818a635b4386d80a5ce1074c2b64594a87df6f8e632f56b72f2113_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
