<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_2146e003f9565c500d43ed32d97e77d22a0084ba529621b2dc61b77dd7b457a4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05981687ab9e94079a6637d74328a56bd7aa115c51cbf0a549d1143f98bb6319 = $this->env->getExtension("native_profiler");
        $__internal_05981687ab9e94079a6637d74328a56bd7aa115c51cbf0a549d1143f98bb6319->enter($__internal_05981687ab9e94079a6637d74328a56bd7aa115c51cbf0a549d1143f98bb6319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05981687ab9e94079a6637d74328a56bd7aa115c51cbf0a549d1143f98bb6319->leave($__internal_05981687ab9e94079a6637d74328a56bd7aa115c51cbf0a549d1143f98bb6319_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
