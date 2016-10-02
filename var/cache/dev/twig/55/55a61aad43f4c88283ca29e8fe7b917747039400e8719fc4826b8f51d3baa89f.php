<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8584dc6db0040a13288f3c747bb8beac9400eee2b92f8c131c5ee315aa9b8469 extends Twig_Template
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
        $__internal_245be8b43746102e13f1b8c42fd52bb8bc70d711549a0c84681c59a43fba0e73 = $this->env->getExtension("native_profiler");
        $__internal_245be8b43746102e13f1b8c42fd52bb8bc70d711549a0c84681c59a43fba0e73->enter($__internal_245be8b43746102e13f1b8c42fd52bb8bc70d711549a0c84681c59a43fba0e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_245be8b43746102e13f1b8c42fd52bb8bc70d711549a0c84681c59a43fba0e73->leave($__internal_245be8b43746102e13f1b8c42fd52bb8bc70d711549a0c84681c59a43fba0e73_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_fe02ce1d5444a07b5ae97f2b1ed6bb38f5f84f241e49331a0c0eea7ec765b4e7 = $this->env->getExtension("native_profiler");
        $__internal_fe02ce1d5444a07b5ae97f2b1ed6bb38f5f84f241e49331a0c0eea7ec765b4e7->enter($__internal_fe02ce1d5444a07b5ae97f2b1ed6bb38f5f84f241e49331a0c0eea7ec765b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_fe02ce1d5444a07b5ae97f2b1ed6bb38f5f84f241e49331a0c0eea7ec765b4e7->leave($__internal_fe02ce1d5444a07b5ae97f2b1ed6bb38f5f84f241e49331a0c0eea7ec765b4e7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
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
