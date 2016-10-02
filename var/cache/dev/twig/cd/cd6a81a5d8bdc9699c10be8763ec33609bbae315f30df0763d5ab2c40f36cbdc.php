<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_4ca1e259394603fe5d9a72b5ea3f634e3011bcc24d9b737eca81c7168dca0e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_550af258f3f9d2725c7e723c3ed3565d9415d5fc20e2873433b01a7dc6bfa297 = $this->env->getExtension("native_profiler");
        $__internal_550af258f3f9d2725c7e723c3ed3565d9415d5fc20e2873433b01a7dc6bfa297->enter($__internal_550af258f3f9d2725c7e723c3ed3565d9415d5fc20e2873433b01a7dc6bfa297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550af258f3f9d2725c7e723c3ed3565d9415d5fc20e2873433b01a7dc6bfa297->leave($__internal_550af258f3f9d2725c7e723c3ed3565d9415d5fc20e2873433b01a7dc6bfa297_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_20a1453e42fab4b568182659de5d19d63190e5d79c688d4fbf57352b264d409c = $this->env->getExtension("native_profiler");
        $__internal_20a1453e42fab4b568182659de5d19d63190e5d79c688d4fbf57352b264d409c->enter($__internal_20a1453e42fab4b568182659de5d19d63190e5d79c688d4fbf57352b264d409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_20a1453e42fab4b568182659de5d19d63190e5d79c688d4fbf57352b264d409c->leave($__internal_20a1453e42fab4b568182659de5d19d63190e5d79c688d4fbf57352b264d409c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2355a13805c3c1fd5e82781229a4c06d571a16a65504baa57933e45bf6833601 = $this->env->getExtension("native_profiler");
        $__internal_2355a13805c3c1fd5e82781229a4c06d571a16a65504baa57933e45bf6833601->enter($__internal_2355a13805c3c1fd5e82781229a4c06d571a16a65504baa57933e45bf6833601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2355a13805c3c1fd5e82781229a4c06d571a16a65504baa57933e45bf6833601->leave($__internal_2355a13805c3c1fd5e82781229a4c06d571a16a65504baa57933e45bf6833601_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e3a483ad32b742968950ca9149a643c47a86f52e06febfddc4a6675cde305255 = $this->env->getExtension("native_profiler");
        $__internal_e3a483ad32b742968950ca9149a643c47a86f52e06febfddc4a6675cde305255->enter($__internal_e3a483ad32b742968950ca9149a643c47a86f52e06febfddc4a6675cde305255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e3a483ad32b742968950ca9149a643c47a86f52e06febfddc4a6675cde305255->leave($__internal_e3a483ad32b742968950ca9149a643c47a86f52e06febfddc4a6675cde305255_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_10978069679fe8253c53eacaee9fb13e6392ad4878e8d0a494d003a0c4f6c92b = $this->env->getExtension("native_profiler");
        $__internal_10978069679fe8253c53eacaee9fb13e6392ad4878e8d0a494d003a0c4f6c92b->enter($__internal_10978069679fe8253c53eacaee9fb13e6392ad4878e8d0a494d003a0c4f6c92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_10978069679fe8253c53eacaee9fb13e6392ad4878e8d0a494d003a0c4f6c92b->leave($__internal_10978069679fe8253c53eacaee9fb13e6392ad4878e8d0a494d003a0c4f6c92b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54a4acd24094b268d9b790f9c22267c9dde2f33372d855e763acde48fcdd3a7e = $this->env->getExtension("native_profiler");
        $__internal_54a4acd24094b268d9b790f9c22267c9dde2f33372d855e763acde48fcdd3a7e->enter($__internal_54a4acd24094b268d9b790f9c22267c9dde2f33372d855e763acde48fcdd3a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_54a4acd24094b268d9b790f9c22267c9dde2f33372d855e763acde48fcdd3a7e->leave($__internal_54a4acd24094b268d9b790f9c22267c9dde2f33372d855e763acde48fcdd3a7e_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_7f0af61bf4208b0b88296f112f37fcabc6ca7adb78c1e8c4798c6d121de116fa = $this->env->getExtension("native_profiler");
        $__internal_7f0af61bf4208b0b88296f112f37fcabc6ca7adb78c1e8c4798c6d121de116fa->enter($__internal_7f0af61bf4208b0b88296f112f37fcabc6ca7adb78c1e8c4798c6d121de116fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_7f0af61bf4208b0b88296f112f37fcabc6ca7adb78c1e8c4798c6d121de116fa->leave($__internal_7f0af61bf4208b0b88296f112f37fcabc6ca7adb78c1e8c4798c6d121de116fa_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_ec14da5829b47557c41ef636dfe6529ae8e32be427eb19dffa0ae309d01cee85 = $this->env->getExtension("native_profiler");
        $__internal_ec14da5829b47557c41ef636dfe6529ae8e32be427eb19dffa0ae309d01cee85->enter($__internal_ec14da5829b47557c41ef636dfe6529ae8e32be427eb19dffa0ae309d01cee85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_ec14da5829b47557c41ef636dfe6529ae8e32be427eb19dffa0ae309d01cee85->leave($__internal_ec14da5829b47557c41ef636dfe6529ae8e32be427eb19dffa0ae309d01cee85_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
