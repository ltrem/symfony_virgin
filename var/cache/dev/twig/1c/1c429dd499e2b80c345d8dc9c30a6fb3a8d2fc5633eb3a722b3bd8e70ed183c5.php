<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_2e14cad4f4b94ce1725ae76f4a4133b4c38842ff41f29ce7c37381bce280cd7b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7324c3c038cb5fbe879236e53e902e396b8ae3a859a3fad87e9fd6e042cb5937 = $this->env->getExtension("native_profiler");
        $__internal_7324c3c038cb5fbe879236e53e902e396b8ae3a859a3fad87e9fd6e042cb5937->enter($__internal_7324c3c038cb5fbe879236e53e902e396b8ae3a859a3fad87e9fd6e042cb5937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7324c3c038cb5fbe879236e53e902e396b8ae3a859a3fad87e9fd6e042cb5937->leave($__internal_7324c3c038cb5fbe879236e53e902e396b8ae3a859a3fad87e9fd6e042cb5937_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3ba2fc08cbc1d5afdc74a37a424e1d96706db1ec0c0b9dbf12b6cdc526ad6507 = $this->env->getExtension("native_profiler");
        $__internal_3ba2fc08cbc1d5afdc74a37a424e1d96706db1ec0c0b9dbf12b6cdc526ad6507->enter($__internal_3ba2fc08cbc1d5afdc74a37a424e1d96706db1ec0c0b9dbf12b6cdc526ad6507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_3ba2fc08cbc1d5afdc74a37a424e1d96706db1ec0c0b9dbf12b6cdc526ad6507->leave($__internal_3ba2fc08cbc1d5afdc74a37a424e1d96706db1ec0c0b9dbf12b6cdc526ad6507_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_88247617e2a1b49973f424f24d1b284e5c51e6a47bd0aeb9174f3074ca73857c = $this->env->getExtension("native_profiler");
        $__internal_88247617e2a1b49973f424f24d1b284e5c51e6a47bd0aeb9174f3074ca73857c->enter($__internal_88247617e2a1b49973f424f24d1b284e5c51e6a47bd0aeb9174f3074ca73857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_88247617e2a1b49973f424f24d1b284e5c51e6a47bd0aeb9174f3074ca73857c->leave($__internal_88247617e2a1b49973f424f24d1b284e5c51e6a47bd0aeb9174f3074ca73857c_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_e95cbb7c28fb0764de59bf6e36f7a42a12656ecc4a4bbb18d310699bf0cce6cd = $this->env->getExtension("native_profiler");
        $__internal_e95cbb7c28fb0764de59bf6e36f7a42a12656ecc4a4bbb18d310699bf0cce6cd->enter($__internal_e95cbb7c28fb0764de59bf6e36f7a42a12656ecc4a4bbb18d310699bf0cce6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e95cbb7c28fb0764de59bf6e36f7a42a12656ecc4a4bbb18d310699bf0cce6cd->leave($__internal_e95cbb7c28fb0764de59bf6e36f7a42a12656ecc4a4bbb18d310699bf0cce6cd_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_25c1248c8741b4445969d326ed82b76389873c70ba657c22bb8210401b60a515 = $this->env->getExtension("native_profiler");
        $__internal_25c1248c8741b4445969d326ed82b76389873c70ba657c22bb8210401b60a515->enter($__internal_25c1248c8741b4445969d326ed82b76389873c70ba657c22bb8210401b60a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_25c1248c8741b4445969d326ed82b76389873c70ba657c22bb8210401b60a515->leave($__internal_25c1248c8741b4445969d326ed82b76389873c70ba657c22bb8210401b60a515_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
