<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_3f99ee49761b2f0316eb44fbd994d27a42a57dd6b28a8f41d8b55842ea1e13c9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9f0dcd84e09fec788e3802c3bda394b80437a6526867cdd3335df0bcb8fb6f2 = $this->env->getExtension("native_profiler");
        $__internal_a9f0dcd84e09fec788e3802c3bda394b80437a6526867cdd3335df0bcb8fb6f2->enter($__internal_a9f0dcd84e09fec788e3802c3bda394b80437a6526867cdd3335df0bcb8fb6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f0dcd84e09fec788e3802c3bda394b80437a6526867cdd3335df0bcb8fb6f2->leave($__internal_a9f0dcd84e09fec788e3802c3bda394b80437a6526867cdd3335df0bcb8fb6f2_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_9423a8a6a136a3aae0b79145a15119412e0f41d06799acbbd7b278f36bcc2597 = $this->env->getExtension("native_profiler");
        $__internal_9423a8a6a136a3aae0b79145a15119412e0f41d06799acbbd7b278f36bcc2597->enter($__internal_9423a8a6a136a3aae0b79145a15119412e0f41d06799acbbd7b278f36bcc2597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_9423a8a6a136a3aae0b79145a15119412e0f41d06799acbbd7b278f36bcc2597->leave($__internal_9423a8a6a136a3aae0b79145a15119412e0f41d06799acbbd7b278f36bcc2597_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ec30c02b5d7d729bb55de7c0e0f91fe7887e280308ea3d144ce0c3b72efb9d23 = $this->env->getExtension("native_profiler");
        $__internal_ec30c02b5d7d729bb55de7c0e0f91fe7887e280308ea3d144ce0c3b72efb9d23->enter($__internal_ec30c02b5d7d729bb55de7c0e0f91fe7887e280308ea3d144ce0c3b72efb9d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ec30c02b5d7d729bb55de7c0e0f91fe7887e280308ea3d144ce0c3b72efb9d23->leave($__internal_ec30c02b5d7d729bb55de7c0e0f91fe7887e280308ea3d144ce0c3b72efb9d23_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0c5028822b5921ebe3d65ca096230b39d8f0b780a1830bbbf786dfc717a9bfd1 = $this->env->getExtension("native_profiler");
        $__internal_0c5028822b5921ebe3d65ca096230b39d8f0b780a1830bbbf786dfc717a9bfd1->enter($__internal_0c5028822b5921ebe3d65ca096230b39d8f0b780a1830bbbf786dfc717a9bfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0c5028822b5921ebe3d65ca096230b39d8f0b780a1830bbbf786dfc717a9bfd1->leave($__internal_0c5028822b5921ebe3d65ca096230b39d8f0b780a1830bbbf786dfc717a9bfd1_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_699a8d07b920b90d9040634b83bed0fbaa52ea25d1e0e241a291884faa635d5b = $this->env->getExtension("native_profiler");
        $__internal_699a8d07b920b90d9040634b83bed0fbaa52ea25d1e0e241a291884faa635d5b->enter($__internal_699a8d07b920b90d9040634b83bed0fbaa52ea25d1e0e241a291884faa635d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_699a8d07b920b90d9040634b83bed0fbaa52ea25d1e0e241a291884faa635d5b->leave($__internal_699a8d07b920b90d9040634b83bed0fbaa52ea25d1e0e241a291884faa635d5b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1d8f2917ce7c238d9fd402a538da62b2e0cbe07524cb39207476bf0a93836f5 = $this->env->getExtension("native_profiler");
        $__internal_b1d8f2917ce7c238d9fd402a538da62b2e0cbe07524cb39207476bf0a93836f5->enter($__internal_b1d8f2917ce7c238d9fd402a538da62b2e0cbe07524cb39207476bf0a93836f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b1d8f2917ce7c238d9fd402a538da62b2e0cbe07524cb39207476bf0a93836f5->leave($__internal_b1d8f2917ce7c238d9fd402a538da62b2e0cbe07524cb39207476bf0a93836f5_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ac5c17f4d06d555d8d5479916b935b6c3282bd313447e80070bb00c8b371d457 = $this->env->getExtension("native_profiler");
        $__internal_ac5c17f4d06d555d8d5479916b935b6c3282bd313447e80070bb00c8b371d457->enter($__internal_ac5c17f4d06d555d8d5479916b935b6c3282bd313447e80070bb00c8b371d457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_ac5c17f4d06d555d8d5479916b935b6c3282bd313447e80070bb00c8b371d457->leave($__internal_ac5c17f4d06d555d8d5479916b935b6c3282bd313447e80070bb00c8b371d457_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5244f48b1ae2036a0fd76564f39db41572f9b109e1871816e9dc1649fea6879e = $this->env->getExtension("native_profiler");
        $__internal_5244f48b1ae2036a0fd76564f39db41572f9b109e1871816e9dc1649fea6879e->enter($__internal_5244f48b1ae2036a0fd76564f39db41572f9b109e1871816e9dc1649fea6879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_5244f48b1ae2036a0fd76564f39db41572f9b109e1871816e9dc1649fea6879e->leave($__internal_5244f48b1ae2036a0fd76564f39db41572f9b109e1871816e9dc1649fea6879e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
