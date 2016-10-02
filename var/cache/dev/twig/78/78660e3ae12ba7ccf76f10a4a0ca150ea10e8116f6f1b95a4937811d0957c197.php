<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_62cd4b9d189db92f49cf4915918b3f79150eb4bb129b0d0e47c4bded1ffaec53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7080da25a191a610d99643ab8ba8d41f054396d103eab52461ed2b82f9c0b24 = $this->env->getExtension("native_profiler");
        $__internal_d7080da25a191a610d99643ab8ba8d41f054396d103eab52461ed2b82f9c0b24->enter($__internal_d7080da25a191a610d99643ab8ba8d41f054396d103eab52461ed2b82f9c0b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7080da25a191a610d99643ab8ba8d41f054396d103eab52461ed2b82f9c0b24->leave($__internal_d7080da25a191a610d99643ab8ba8d41f054396d103eab52461ed2b82f9c0b24_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_46137b3a262d1426239b724b06dd64ace1948c4b91fc99130c14c4f2082116f3 = $this->env->getExtension("native_profiler");
        $__internal_46137b3a262d1426239b724b06dd64ace1948c4b91fc99130c14c4f2082116f3->enter($__internal_46137b3a262d1426239b724b06dd64ace1948c4b91fc99130c14c4f2082116f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_46137b3a262d1426239b724b06dd64ace1948c4b91fc99130c14c4f2082116f3->leave($__internal_46137b3a262d1426239b724b06dd64ace1948c4b91fc99130c14c4f2082116f3_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_bec90b5a00f1baf79564a6024015f3e123c494c0a41562d7eb83e85baa3e51f3 = $this->env->getExtension("native_profiler");
        $__internal_bec90b5a00f1baf79564a6024015f3e123c494c0a41562d7eb83e85baa3e51f3->enter($__internal_bec90b5a00f1baf79564a6024015f3e123c494c0a41562d7eb83e85baa3e51f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bec90b5a00f1baf79564a6024015f3e123c494c0a41562d7eb83e85baa3e51f3->leave($__internal_bec90b5a00f1baf79564a6024015f3e123c494c0a41562d7eb83e85baa3e51f3_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e71081bc6b76ca3441f528cab2927ee8e4fbcc2d38d58174f11799c7ed297432 = $this->env->getExtension("native_profiler");
        $__internal_e71081bc6b76ca3441f528cab2927ee8e4fbcc2d38d58174f11799c7ed297432->enter($__internal_e71081bc6b76ca3441f528cab2927ee8e4fbcc2d38d58174f11799c7ed297432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_e71081bc6b76ca3441f528cab2927ee8e4fbcc2d38d58174f11799c7ed297432->leave($__internal_e71081bc6b76ca3441f528cab2927ee8e4fbcc2d38d58174f11799c7ed297432_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d23556ed79badd3e86758d9a40602586d2cd86166e0f2e87055269ff3cdb5f29 = $this->env->getExtension("native_profiler");
        $__internal_d23556ed79badd3e86758d9a40602586d2cd86166e0f2e87055269ff3cdb5f29->enter($__internal_d23556ed79badd3e86758d9a40602586d2cd86166e0f2e87055269ff3cdb5f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_d23556ed79badd3e86758d9a40602586d2cd86166e0f2e87055269ff3cdb5f29->leave($__internal_d23556ed79badd3e86758d9a40602586d2cd86166e0f2e87055269ff3cdb5f29_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_cde9decbe9b9bec84cc0d88aaa992549700501c778a850a27ea6de5dfd5ef542 = $this->env->getExtension("native_profiler");
        $__internal_cde9decbe9b9bec84cc0d88aaa992549700501c778a850a27ea6de5dfd5ef542->enter($__internal_cde9decbe9b9bec84cc0d88aaa992549700501c778a850a27ea6de5dfd5ef542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_cde9decbe9b9bec84cc0d88aaa992549700501c778a850a27ea6de5dfd5ef542->leave($__internal_cde9decbe9b9bec84cc0d88aaa992549700501c778a850a27ea6de5dfd5ef542_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
