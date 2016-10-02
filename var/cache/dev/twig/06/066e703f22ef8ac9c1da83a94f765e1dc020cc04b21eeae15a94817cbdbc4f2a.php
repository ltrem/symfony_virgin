<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_417edb0b7e1ed442ca042db19fa6efabba91612409e9e0f8e55179d5b6dd58ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54faada467ed562725960361395315d63b61e24c427b4db73c17a3200619f614 = $this->env->getExtension("native_profiler");
        $__internal_54faada467ed562725960361395315d63b61e24c427b4db73c17a3200619f614->enter($__internal_54faada467ed562725960361395315d63b61e24c427b4db73c17a3200619f614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54faada467ed562725960361395315d63b61e24c427b4db73c17a3200619f614->leave($__internal_54faada467ed562725960361395315d63b61e24c427b4db73c17a3200619f614_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d839dd70ef8c6669d26d239bed5f3fc03ec8b94aeeddba68f0e81b7346e5fd2f = $this->env->getExtension("native_profiler");
        $__internal_d839dd70ef8c6669d26d239bed5f3fc03ec8b94aeeddba68f0e81b7346e5fd2f->enter($__internal_d839dd70ef8c6669d26d239bed5f3fc03ec8b94aeeddba68f0e81b7346e5fd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_d839dd70ef8c6669d26d239bed5f3fc03ec8b94aeeddba68f0e81b7346e5fd2f->leave($__internal_d839dd70ef8c6669d26d239bed5f3fc03ec8b94aeeddba68f0e81b7346e5fd2f_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9e7eff74ecd191e8d45c2aaa9d533bfe58717853e4cf627a8f048392390ea6b3 = $this->env->getExtension("native_profiler");
        $__internal_9e7eff74ecd191e8d45c2aaa9d533bfe58717853e4cf627a8f048392390ea6b3->enter($__internal_9e7eff74ecd191e8d45c2aaa9d533bfe58717853e4cf627a8f048392390ea6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9e7eff74ecd191e8d45c2aaa9d533bfe58717853e4cf627a8f048392390ea6b3->leave($__internal_9e7eff74ecd191e8d45c2aaa9d533bfe58717853e4cf627a8f048392390ea6b3_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce1b2cadd71ddde9f303a3c9053dc664e7bbc46d9a25c314df6d3e3dbccf4df9 = $this->env->getExtension("native_profiler");
        $__internal_ce1b2cadd71ddde9f303a3c9053dc664e7bbc46d9a25c314df6d3e3dbccf4df9->enter($__internal_ce1b2cadd71ddde9f303a3c9053dc664e7bbc46d9a25c314df6d3e3dbccf4df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_ce1b2cadd71ddde9f303a3c9053dc664e7bbc46d9a25c314df6d3e3dbccf4df9->leave($__internal_ce1b2cadd71ddde9f303a3c9053dc664e7bbc46d9a25c314df6d3e3dbccf4df9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
