<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_d86496a5cfa9a2347b9c64c19ee41b0f5d907d5080305e1d89b1007d1b64e83f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88d7892df93e3db29c8f3edb9e2f4ec361691ed9965efa51a3db6350957660e8 = $this->env->getExtension("native_profiler");
        $__internal_88d7892df93e3db29c8f3edb9e2f4ec361691ed9965efa51a3db6350957660e8->enter($__internal_88d7892df93e3db29c8f3edb9e2f4ec361691ed9965efa51a3db6350957660e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d7892df93e3db29c8f3edb9e2f4ec361691ed9965efa51a3db6350957660e8->leave($__internal_88d7892df93e3db29c8f3edb9e2f4ec361691ed9965efa51a3db6350957660e8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5fc94aec6d80d6d150b76226ddf72f8c8f75bc788a48b324d5e6a714e09e2e0b = $this->env->getExtension("native_profiler");
        $__internal_5fc94aec6d80d6d150b76226ddf72f8c8f75bc788a48b324d5e6a714e09e2e0b->enter($__internal_5fc94aec6d80d6d150b76226ddf72f8c8f75bc788a48b324d5e6a714e09e2e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_5fc94aec6d80d6d150b76226ddf72f8c8f75bc788a48b324d5e6a714e09e2e0b->leave($__internal_5fc94aec6d80d6d150b76226ddf72f8c8f75bc788a48b324d5e6a714e09e2e0b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
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
