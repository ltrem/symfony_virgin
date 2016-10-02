<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_6ddc66e2956d6fd676c43fffb5d5c096f3166e9d70bf382305e9b987ccf3ad33 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f52e8906a25bc6aefc45f4ca894063a49ef17bdf1558e904aab8f7997cf661 = $this->env->getExtension("native_profiler");
        $__internal_a8f52e8906a25bc6aefc45f4ca894063a49ef17bdf1558e904aab8f7997cf661->enter($__internal_a8f52e8906a25bc6aefc45f4ca894063a49ef17bdf1558e904aab8f7997cf661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f52e8906a25bc6aefc45f4ca894063a49ef17bdf1558e904aab8f7997cf661->leave($__internal_a8f52e8906a25bc6aefc45f4ca894063a49ef17bdf1558e904aab8f7997cf661_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8953086cb68c742cb1d192f730b8df4af815178ba0935fc778f97fd3ef317d8d = $this->env->getExtension("native_profiler");
        $__internal_8953086cb68c742cb1d192f730b8df4af815178ba0935fc778f97fd3ef317d8d->enter($__internal_8953086cb68c742cb1d192f730b8df4af815178ba0935fc778f97fd3ef317d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_8953086cb68c742cb1d192f730b8df4af815178ba0935fc778f97fd3ef317d8d->leave($__internal_8953086cb68c742cb1d192f730b8df4af815178ba0935fc778f97fd3ef317d8d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
