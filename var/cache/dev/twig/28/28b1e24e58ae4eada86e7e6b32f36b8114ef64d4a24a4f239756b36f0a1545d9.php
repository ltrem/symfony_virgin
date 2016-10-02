<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_b58c851361f26d2f9535dab5950834f14317f156915e5e17e4485ecce7ff659f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce17f14566ae88b1ff553aae3de4f34bca21f10943409baa954ddeaf19b3be11 = $this->env->getExtension("native_profiler");
        $__internal_ce17f14566ae88b1ff553aae3de4f34bca21f10943409baa954ddeaf19b3be11->enter($__internal_ce17f14566ae88b1ff553aae3de4f34bca21f10943409baa954ddeaf19b3be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce17f14566ae88b1ff553aae3de4f34bca21f10943409baa954ddeaf19b3be11->leave($__internal_ce17f14566ae88b1ff553aae3de4f34bca21f10943409baa954ddeaf19b3be11_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_99d36e92faadd4463d498ad247f782ffe90877c80bc3062657cbcd5f48cecc21 = $this->env->getExtension("native_profiler");
        $__internal_99d36e92faadd4463d498ad247f782ffe90877c80bc3062657cbcd5f48cecc21->enter($__internal_99d36e92faadd4463d498ad247f782ffe90877c80bc3062657cbcd5f48cecc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_99d36e92faadd4463d498ad247f782ffe90877c80bc3062657cbcd5f48cecc21->leave($__internal_99d36e92faadd4463d498ad247f782ffe90877c80bc3062657cbcd5f48cecc21_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
