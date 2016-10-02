<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_16111b64fd3c6422a42c229e56c7374a2ba4eff933938af0722c12adb1c64caf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19235002b9aa7c2b068c2cd167866f4ebcec2d4c034332ab5d52b1d051579732 = $this->env->getExtension("native_profiler");
        $__internal_19235002b9aa7c2b068c2cd167866f4ebcec2d4c034332ab5d52b1d051579732->enter($__internal_19235002b9aa7c2b068c2cd167866f4ebcec2d4c034332ab5d52b1d051579732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19235002b9aa7c2b068c2cd167866f4ebcec2d4c034332ab5d52b1d051579732->leave($__internal_19235002b9aa7c2b068c2cd167866f4ebcec2d4c034332ab5d52b1d051579732_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_01aa9adfeb4c2f5bc24a30a9ef4387f67fe4a48ce84cfcfe18b1b953a31bbb80 = $this->env->getExtension("native_profiler");
        $__internal_01aa9adfeb4c2f5bc24a30a9ef4387f67fe4a48ce84cfcfe18b1b953a31bbb80->enter($__internal_01aa9adfeb4c2f5bc24a30a9ef4387f67fe4a48ce84cfcfe18b1b953a31bbb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_01aa9adfeb4c2f5bc24a30a9ef4387f67fe4a48ce84cfcfe18b1b953a31bbb80->leave($__internal_01aa9adfeb4c2f5bc24a30a9ef4387f67fe4a48ce84cfcfe18b1b953a31bbb80_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
