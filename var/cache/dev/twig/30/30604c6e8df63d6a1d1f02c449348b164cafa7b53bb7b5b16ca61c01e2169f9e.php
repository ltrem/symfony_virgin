<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_05bc6e2cb8c2f4b88054f7ecc7c6c059217db2308461dcfca635755f532601c8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e66ab1c851a99ffb6f86e40bc98cb96cd8cf73a6937865bdef5dfadf56cc07b = $this->env->getExtension("native_profiler");
        $__internal_9e66ab1c851a99ffb6f86e40bc98cb96cd8cf73a6937865bdef5dfadf56cc07b->enter($__internal_9e66ab1c851a99ffb6f86e40bc98cb96cd8cf73a6937865bdef5dfadf56cc07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e66ab1c851a99ffb6f86e40bc98cb96cd8cf73a6937865bdef5dfadf56cc07b->leave($__internal_9e66ab1c851a99ffb6f86e40bc98cb96cd8cf73a6937865bdef5dfadf56cc07b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e4f3414905b7e782fba7740d37748ec875c591b951a580b01410cdac44df13eb = $this->env->getExtension("native_profiler");
        $__internal_e4f3414905b7e782fba7740d37748ec875c591b951a580b01410cdac44df13eb->enter($__internal_e4f3414905b7e782fba7740d37748ec875c591b951a580b01410cdac44df13eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_e4f3414905b7e782fba7740d37748ec875c591b951a580b01410cdac44df13eb->leave($__internal_e4f3414905b7e782fba7740d37748ec875c591b951a580b01410cdac44df13eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
