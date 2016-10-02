<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d0a8bf004dae68bdd623ea1573d0a6ec1f187455bd258b439a7f261293c3c8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd141972f066ec4bf81136aeea9e89256763081409b3bb3a37109d3a30fa4289 = $this->env->getExtension("native_profiler");
        $__internal_bd141972f066ec4bf81136aeea9e89256763081409b3bb3a37109d3a30fa4289->enter($__internal_bd141972f066ec4bf81136aeea9e89256763081409b3bb3a37109d3a30fa4289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd141972f066ec4bf81136aeea9e89256763081409b3bb3a37109d3a30fa4289->leave($__internal_bd141972f066ec4bf81136aeea9e89256763081409b3bb3a37109d3a30fa4289_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68125f59f9f876d20e2e62a8719c4ce91caf0adb223f3868f3fc85cfbe9efa10 = $this->env->getExtension("native_profiler");
        $__internal_68125f59f9f876d20e2e62a8719c4ce91caf0adb223f3868f3fc85cfbe9efa10->enter($__internal_68125f59f9f876d20e2e62a8719c4ce91caf0adb223f3868f3fc85cfbe9efa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_68125f59f9f876d20e2e62a8719c4ce91caf0adb223f3868f3fc85cfbe9efa10->leave($__internal_68125f59f9f876d20e2e62a8719c4ce91caf0adb223f3868f3fc85cfbe9efa10_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
