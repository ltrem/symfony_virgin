<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_a683240ed7d9851d2049321ddf5e767d761e69dbb1140f585fe057d44db3be66 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83a7d39959bc9c0523d4c797755d2ff7606f6465bf6c6707a17eff3ced6c7d40 = $this->env->getExtension("native_profiler");
        $__internal_83a7d39959bc9c0523d4c797755d2ff7606f6465bf6c6707a17eff3ced6c7d40->enter($__internal_83a7d39959bc9c0523d4c797755d2ff7606f6465bf6c6707a17eff3ced6c7d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a7d39959bc9c0523d4c797755d2ff7606f6465bf6c6707a17eff3ced6c7d40->leave($__internal_83a7d39959bc9c0523d4c797755d2ff7606f6465bf6c6707a17eff3ced6c7d40_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fa4a83fcf8591abfedc0c4cdb01ad6754d340cb7e63aed1234c63e23a4d84e1d = $this->env->getExtension("native_profiler");
        $__internal_fa4a83fcf8591abfedc0c4cdb01ad6754d340cb7e63aed1234c63e23a4d84e1d->enter($__internal_fa4a83fcf8591abfedc0c4cdb01ad6754d340cb7e63aed1234c63e23a4d84e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_fa4a83fcf8591abfedc0c4cdb01ad6754d340cb7e63aed1234c63e23a4d84e1d->leave($__internal_fa4a83fcf8591abfedc0c4cdb01ad6754d340cb7e63aed1234c63e23a4d84e1d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
