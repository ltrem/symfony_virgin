<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_6da510fd3d927ba1813bf81aba8231f6beb8f12ebe96adcc5360108186e23517 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_750e2e3883b50935475fab195f5b28f6649a61ccf9464feee2a17e4b2f623e6c = $this->env->getExtension("native_profiler");
        $__internal_750e2e3883b50935475fab195f5b28f6649a61ccf9464feee2a17e4b2f623e6c->enter($__internal_750e2e3883b50935475fab195f5b28f6649a61ccf9464feee2a17e4b2f623e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750e2e3883b50935475fab195f5b28f6649a61ccf9464feee2a17e4b2f623e6c->leave($__internal_750e2e3883b50935475fab195f5b28f6649a61ccf9464feee2a17e4b2f623e6c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dedd278191df91e25ed0765f2c588ab908cc8e10cf9c8167e5dab0eac1ba4b41 = $this->env->getExtension("native_profiler");
        $__internal_dedd278191df91e25ed0765f2c588ab908cc8e10cf9c8167e5dab0eac1ba4b41->enter($__internal_dedd278191df91e25ed0765f2c588ab908cc8e10cf9c8167e5dab0eac1ba4b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_dedd278191df91e25ed0765f2c588ab908cc8e10cf9c8167e5dab0eac1ba4b41->leave($__internal_dedd278191df91e25ed0765f2c588ab908cc8e10cf9c8167e5dab0eac1ba4b41_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1d502cd9ae297e8f89fbcc883cfc7b6a3757ed19fa89b53b15fa57b5d1b89ec2 = $this->env->getExtension("native_profiler");
        $__internal_1d502cd9ae297e8f89fbcc883cfc7b6a3757ed19fa89b53b15fa57b5d1b89ec2->enter($__internal_1d502cd9ae297e8f89fbcc883cfc7b6a3757ed19fa89b53b15fa57b5d1b89ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_1d502cd9ae297e8f89fbcc883cfc7b6a3757ed19fa89b53b15fa57b5d1b89ec2->leave($__internal_1d502cd9ae297e8f89fbcc883cfc7b6a3757ed19fa89b53b15fa57b5d1b89ec2_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bd2c3451055d345254630b76fcf158f9164b9601c9f0519138a566c595a12c7 = $this->env->getExtension("native_profiler");
        $__internal_8bd2c3451055d345254630b76fcf158f9164b9601c9f0519138a566c595a12c7->enter($__internal_8bd2c3451055d345254630b76fcf158f9164b9601c9f0519138a566c595a12c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_8bd2c3451055d345254630b76fcf158f9164b9601c9f0519138a566c595a12c7->leave($__internal_8bd2c3451055d345254630b76fcf158f9164b9601c9f0519138a566c595a12c7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
