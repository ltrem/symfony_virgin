<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_e243aeb9fd3db8babcdf74f2664e4278fa50607030bffed7984b908465b77c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd34e0e102a8753237e15c95e2d9b129a4251d702aded6863cb584f9c7bb962a = $this->env->getExtension("native_profiler");
        $__internal_bd34e0e102a8753237e15c95e2d9b129a4251d702aded6863cb584f9c7bb962a->enter($__internal_bd34e0e102a8753237e15c95e2d9b129a4251d702aded6863cb584f9c7bb962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd34e0e102a8753237e15c95e2d9b129a4251d702aded6863cb584f9c7bb962a->leave($__internal_bd34e0e102a8753237e15c95e2d9b129a4251d702aded6863cb584f9c7bb962a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e09076f4084f6ddbc4661540ecf21bfb7d6bd7bf14102ecb50f996aa55f3b64 = $this->env->getExtension("native_profiler");
        $__internal_9e09076f4084f6ddbc4661540ecf21bfb7d6bd7bf14102ecb50f996aa55f3b64->enter($__internal_9e09076f4084f6ddbc4661540ecf21bfb7d6bd7bf14102ecb50f996aa55f3b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_9e09076f4084f6ddbc4661540ecf21bfb7d6bd7bf14102ecb50f996aa55f3b64->leave($__internal_9e09076f4084f6ddbc4661540ecf21bfb7d6bd7bf14102ecb50f996aa55f3b64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
