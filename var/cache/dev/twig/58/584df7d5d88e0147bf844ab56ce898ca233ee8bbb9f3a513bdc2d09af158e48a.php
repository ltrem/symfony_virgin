<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3ae9582617e519aff388fa9c4829899183e808165d92665e277ad9e3be790f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_b2c1abce493804f69196cfc7bda5210428af23344c6971c281c472fb2f1b1909 = $this->env->getExtension("native_profiler");
        $__internal_b2c1abce493804f69196cfc7bda5210428af23344c6971c281c472fb2f1b1909->enter($__internal_b2c1abce493804f69196cfc7bda5210428af23344c6971c281c472fb2f1b1909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2c1abce493804f69196cfc7bda5210428af23344c6971c281c472fb2f1b1909->leave($__internal_b2c1abce493804f69196cfc7bda5210428af23344c6971c281c472fb2f1b1909_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcd2863e78f2d80966bc898cd863d599367d6cf37cf057bb923eff0729e7b80f = $this->env->getExtension("native_profiler");
        $__internal_fcd2863e78f2d80966bc898cd863d599367d6cf37cf057bb923eff0729e7b80f->enter($__internal_fcd2863e78f2d80966bc898cd863d599367d6cf37cf057bb923eff0729e7b80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fcd2863e78f2d80966bc898cd863d599367d6cf37cf057bb923eff0729e7b80f->leave($__internal_fcd2863e78f2d80966bc898cd863d599367d6cf37cf057bb923eff0729e7b80f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
