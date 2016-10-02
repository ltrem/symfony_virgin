<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_4fe051908ea0baa574ccf78e518fcf604662afafc4d16a319e7219a853729c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da13f6c387b362b3176b32d995b1c30632a1223ac2e23e124d6a5956cfb6548 = $this->env->getExtension("native_profiler");
        $__internal_4da13f6c387b362b3176b32d995b1c30632a1223ac2e23e124d6a5956cfb6548->enter($__internal_4da13f6c387b362b3176b32d995b1c30632a1223ac2e23e124d6a5956cfb6548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da13f6c387b362b3176b32d995b1c30632a1223ac2e23e124d6a5956cfb6548->leave($__internal_4da13f6c387b362b3176b32d995b1c30632a1223ac2e23e124d6a5956cfb6548_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
