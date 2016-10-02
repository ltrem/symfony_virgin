<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_57c7de077412a47a21513d8a3aa15e90d955dad5fc3091854cdcf35a2e1da12c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52d18eb01ffa1ca6534bf89bd719ab780c9750d84fcd4ca15a63f8174e1e6a3d = $this->env->getExtension("native_profiler");
        $__internal_52d18eb01ffa1ca6534bf89bd719ab780c9750d84fcd4ca15a63f8174e1e6a3d->enter($__internal_52d18eb01ffa1ca6534bf89bd719ab780c9750d84fcd4ca15a63f8174e1e6a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d18eb01ffa1ca6534bf89bd719ab780c9750d84fcd4ca15a63f8174e1e6a3d->leave($__internal_52d18eb01ffa1ca6534bf89bd719ab780c9750d84fcd4ca15a63f8174e1e6a3d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c5fdcc1e4b269b1fafd7852116a99e4ad1487b070dc1a13305500ea0e7c80fb1 = $this->env->getExtension("native_profiler");
        $__internal_c5fdcc1e4b269b1fafd7852116a99e4ad1487b070dc1a13305500ea0e7c80fb1->enter($__internal_c5fdcc1e4b269b1fafd7852116a99e4ad1487b070dc1a13305500ea0e7c80fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_c5fdcc1e4b269b1fafd7852116a99e4ad1487b070dc1a13305500ea0e7c80fb1->leave($__internal_c5fdcc1e4b269b1fafd7852116a99e4ad1487b070dc1a13305500ea0e7c80fb1_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
