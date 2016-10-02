<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_d38771a4c46181da873c733f7ebbbdf3ee66f215d729429b167b5a9816521f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f0432d59efa3c2ce431883506d05d7fadeb4c3bf078a446adec5f2698704eab = $this->env->getExtension("native_profiler");
        $__internal_4f0432d59efa3c2ce431883506d05d7fadeb4c3bf078a446adec5f2698704eab->enter($__internal_4f0432d59efa3c2ce431883506d05d7fadeb4c3bf078a446adec5f2698704eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0432d59efa3c2ce431883506d05d7fadeb4c3bf078a446adec5f2698704eab->leave($__internal_4f0432d59efa3c2ce431883506d05d7fadeb4c3bf078a446adec5f2698704eab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
