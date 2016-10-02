<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_01697f1016baf329845ec2313af864c6ec73be12d1b8256235d04b83820b23e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa64eca76d2e6791472e30d6c5bf1358aa0a7b7f5824ff821da2b5aa3b9e1f7c = $this->env->getExtension("native_profiler");
        $__internal_aa64eca76d2e6791472e30d6c5bf1358aa0a7b7f5824ff821da2b5aa3b9e1f7c->enter($__internal_aa64eca76d2e6791472e30d6c5bf1358aa0a7b7f5824ff821da2b5aa3b9e1f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_aa64eca76d2e6791472e30d6c5bf1358aa0a7b7f5824ff821da2b5aa3b9e1f7c->leave($__internal_aa64eca76d2e6791472e30d6c5bf1358aa0a7b7f5824ff821da2b5aa3b9e1f7c_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
