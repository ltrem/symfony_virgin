<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_6471ce2bcd512052e3d46e6e11e53b50904b38479ba21c28f6206719d78f9494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_765b6e2b3efedc31e85fa47aefdaed8a71f35ec45da4a4f9e44e7a3e1dde7e17 = $this->env->getExtension("native_profiler");
        $__internal_765b6e2b3efedc31e85fa47aefdaed8a71f35ec45da4a4f9e44e7a3e1dde7e17->enter($__internal_765b6e2b3efedc31e85fa47aefdaed8a71f35ec45da4a4f9e44e7a3e1dde7e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_765b6e2b3efedc31e85fa47aefdaed8a71f35ec45da4a4f9e44e7a3e1dde7e17->leave($__internal_765b6e2b3efedc31e85fa47aefdaed8a71f35ec45da4a4f9e44e7a3e1dde7e17_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
