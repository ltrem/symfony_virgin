<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_6385457ee62a784d5c13b09911e6234d45b4e8abf1a2c8506534c7fc48ef97ff extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b854208433bbad22caad338fa9fab3ddca43d41224db00dd5ff1abfb81bb743e = $this->env->getExtension("native_profiler");
        $__internal_b854208433bbad22caad338fa9fab3ddca43d41224db00dd5ff1abfb81bb743e->enter($__internal_b854208433bbad22caad338fa9fab3ddca43d41224db00dd5ff1abfb81bb743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b854208433bbad22caad338fa9fab3ddca43d41224db00dd5ff1abfb81bb743e->leave($__internal_b854208433bbad22caad338fa9fab3ddca43d41224db00dd5ff1abfb81bb743e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
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
