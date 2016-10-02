<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_824f6e1765e4e6676821566d71fdc755e15d4109216ccb6ea54246949ba0b702 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec44517cecd8f94f382a1c0e3ac1b9b575cc9a201c60eea2d62f15f427e250dc = $this->env->getExtension("native_profiler");
        $__internal_ec44517cecd8f94f382a1c0e3ac1b9b575cc9a201c60eea2d62f15f427e250dc->enter($__internal_ec44517cecd8f94f382a1c0e3ac1b9b575cc9a201c60eea2d62f15f427e250dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec44517cecd8f94f382a1c0e3ac1b9b575cc9a201c60eea2d62f15f427e250dc->leave($__internal_ec44517cecd8f94f382a1c0e3ac1b9b575cc9a201c60eea2d62f15f427e250dc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_77d934c7296e759450e502103842c566b7dddfa0c3d41d03600dc3822fe7e364 = $this->env->getExtension("native_profiler");
        $__internal_77d934c7296e759450e502103842c566b7dddfa0c3d41d03600dc3822fe7e364->enter($__internal_77d934c7296e759450e502103842c566b7dddfa0c3d41d03600dc3822fe7e364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_77d934c7296e759450e502103842c566b7dddfa0c3d41d03600dc3822fe7e364->leave($__internal_77d934c7296e759450e502103842c566b7dddfa0c3d41d03600dc3822fe7e364_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
