<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_cec05f6448ba27ab4608122c95914f6f22c68256e5616c50edd5c16b919d298d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebbf0ce21877755c0884f15c3c7cc2dc3d0ba79d79ebb65634901770b8728008 = $this->env->getExtension("native_profiler");
        $__internal_ebbf0ce21877755c0884f15c3c7cc2dc3d0ba79d79ebb65634901770b8728008->enter($__internal_ebbf0ce21877755c0884f15c3c7cc2dc3d0ba79d79ebb65634901770b8728008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebbf0ce21877755c0884f15c3c7cc2dc3d0ba79d79ebb65634901770b8728008->leave($__internal_ebbf0ce21877755c0884f15c3c7cc2dc3d0ba79d79ebb65634901770b8728008_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5bb024385b2dc48b121def89322e316f3da4ed614bf0117e6a1ad35b59012ed3 = $this->env->getExtension("native_profiler");
        $__internal_5bb024385b2dc48b121def89322e316f3da4ed614bf0117e6a1ad35b59012ed3->enter($__internal_5bb024385b2dc48b121def89322e316f3da4ed614bf0117e6a1ad35b59012ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_5bb024385b2dc48b121def89322e316f3da4ed614bf0117e6a1ad35b59012ed3->leave($__internal_5bb024385b2dc48b121def89322e316f3da4ed614bf0117e6a1ad35b59012ed3_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_ef8afcee7ffe22c468b613df36acaf228c718028d5c8a42787acefeae48c90c3 = $this->env->getExtension("native_profiler");
        $__internal_ef8afcee7ffe22c468b613df36acaf228c718028d5c8a42787acefeae48c90c3->enter($__internal_ef8afcee7ffe22c468b613df36acaf228c718028d5c8a42787acefeae48c90c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_ef8afcee7ffe22c468b613df36acaf228c718028d5c8a42787acefeae48c90c3->leave($__internal_ef8afcee7ffe22c468b613df36acaf228c718028d5c8a42787acefeae48c90c3_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_c6e38c0f68f2db6dbf099d73871e210bd41717646660b032343a4bf302296bf2 = $this->env->getExtension("native_profiler");
        $__internal_c6e38c0f68f2db6dbf099d73871e210bd41717646660b032343a4bf302296bf2->enter($__internal_c6e38c0f68f2db6dbf099d73871e210bd41717646660b032343a4bf302296bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_c6e38c0f68f2db6dbf099d73871e210bd41717646660b032343a4bf302296bf2->leave($__internal_c6e38c0f68f2db6dbf099d73871e210bd41717646660b032343a4bf302296bf2_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_11ac42b763762e97709fbf9cfd8f514f2934a2fdca65cc08ccd6a9c8d97915f1 = $this->env->getExtension("native_profiler");
        $__internal_11ac42b763762e97709fbf9cfd8f514f2934a2fdca65cc08ccd6a9c8d97915f1->enter($__internal_11ac42b763762e97709fbf9cfd8f514f2934a2fdca65cc08ccd6a9c8d97915f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_11ac42b763762e97709fbf9cfd8f514f2934a2fdca65cc08ccd6a9c8d97915f1->leave($__internal_11ac42b763762e97709fbf9cfd8f514f2934a2fdca65cc08ccd6a9c8d97915f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
