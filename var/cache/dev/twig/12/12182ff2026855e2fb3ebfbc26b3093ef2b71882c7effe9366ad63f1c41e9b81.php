<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_d0c7c95addc8c64a94b1b305680175dd8093950213ed4adb3c85c8664ded26bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f74be8c4e82fecf1c9e90c5a3aec6464595b631ab0833c32591c780ba5654ef5 = $this->env->getExtension("native_profiler");
        $__internal_f74be8c4e82fecf1c9e90c5a3aec6464595b631ab0833c32591c780ba5654ef5->enter($__internal_f74be8c4e82fecf1c9e90c5a3aec6464595b631ab0833c32591c780ba5654ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f74be8c4e82fecf1c9e90c5a3aec6464595b631ab0833c32591c780ba5654ef5->leave($__internal_f74be8c4e82fecf1c9e90c5a3aec6464595b631ab0833c32591c780ba5654ef5_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_89a4cbee56b81cbba8aef71d1b51935aa6b1249c550a1ed9e9b88d8dbed42671 = $this->env->getExtension("native_profiler");
        $__internal_89a4cbee56b81cbba8aef71d1b51935aa6b1249c550a1ed9e9b88d8dbed42671->enter($__internal_89a4cbee56b81cbba8aef71d1b51935aa6b1249c550a1ed9e9b88d8dbed42671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_89a4cbee56b81cbba8aef71d1b51935aa6b1249c550a1ed9e9b88d8dbed42671->leave($__internal_89a4cbee56b81cbba8aef71d1b51935aa6b1249c550a1ed9e9b88d8dbed42671_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
