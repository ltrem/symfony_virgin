<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_41f0ff94ae0e66c520e2f85ab5dd112e3c848c01eba638cca4db04cd908be3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9114b6c96002cc6e7bc7e3ea8e42cde92e7e7bf168142407a6ea1bef291a057 = $this->env->getExtension("native_profiler");
        $__internal_f9114b6c96002cc6e7bc7e3ea8e42cde92e7e7bf168142407a6ea1bef291a057->enter($__internal_f9114b6c96002cc6e7bc7e3ea8e42cde92e7e7bf168142407a6ea1bef291a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_f9114b6c96002cc6e7bc7e3ea8e42cde92e7e7bf168142407a6ea1bef291a057->leave($__internal_f9114b6c96002cc6e7bc7e3ea8e42cde92e7e7bf168142407a6ea1bef291a057_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_5bd22593c8f6f617be2a5d1e801a3013b43734cd2824482563a18c9d61dbe0e9 = $this->env->getExtension("native_profiler");
        $__internal_5bd22593c8f6f617be2a5d1e801a3013b43734cd2824482563a18c9d61dbe0e9->enter($__internal_5bd22593c8f6f617be2a5d1e801a3013b43734cd2824482563a18c9d61dbe0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_5bd22593c8f6f617be2a5d1e801a3013b43734cd2824482563a18c9d61dbe0e9->leave($__internal_5bd22593c8f6f617be2a5d1e801a3013b43734cd2824482563a18c9d61dbe0e9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
