<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_158b6ec30f9018e82b70c69abcba5a96298136ecc76f38b699b623f1a8750e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0561dd205459dff5131d9e98604bf2087bc3d4f5e634dd594eb4e15b4f8312b = $this->env->getExtension("native_profiler");
        $__internal_a0561dd205459dff5131d9e98604bf2087bc3d4f5e634dd594eb4e15b4f8312b->enter($__internal_a0561dd205459dff5131d9e98604bf2087bc3d4f5e634dd594eb4e15b4f8312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0561dd205459dff5131d9e98604bf2087bc3d4f5e634dd594eb4e15b4f8312b->leave($__internal_a0561dd205459dff5131d9e98604bf2087bc3d4f5e634dd594eb4e15b4f8312b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6364555c739a03bbd403a9d054723e22bfff0017bfe58a42b59c0ec6473fd76a = $this->env->getExtension("native_profiler");
        $__internal_6364555c739a03bbd403a9d054723e22bfff0017bfe58a42b59c0ec6473fd76a->enter($__internal_6364555c739a03bbd403a9d054723e22bfff0017bfe58a42b59c0ec6473fd76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_6364555c739a03bbd403a9d054723e22bfff0017bfe58a42b59c0ec6473fd76a->leave($__internal_6364555c739a03bbd403a9d054723e22bfff0017bfe58a42b59c0ec6473fd76a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
