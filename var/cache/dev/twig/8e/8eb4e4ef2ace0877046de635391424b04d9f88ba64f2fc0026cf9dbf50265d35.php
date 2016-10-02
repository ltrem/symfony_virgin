<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_9033e6d2fd0b87fa04199992cff55907b7208a81b1d5e22c7f26b95023ca11f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45f1497b59280e790ab1ef1eaa399825adce53b719ed50415a331bcc780c3793 = $this->env->getExtension("native_profiler");
        $__internal_45f1497b59280e790ab1ef1eaa399825adce53b719ed50415a331bcc780c3793->enter($__internal_45f1497b59280e790ab1ef1eaa399825adce53b719ed50415a331bcc780c3793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45f1497b59280e790ab1ef1eaa399825adce53b719ed50415a331bcc780c3793->leave($__internal_45f1497b59280e790ab1ef1eaa399825adce53b719ed50415a331bcc780c3793_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_21d3d8e804d661d43edfe7d5de612d16b584f1b9b54f14a802c75df9db9330ab = $this->env->getExtension("native_profiler");
        $__internal_21d3d8e804d661d43edfe7d5de612d16b584f1b9b54f14a802c75df9db9330ab->enter($__internal_21d3d8e804d661d43edfe7d5de612d16b584f1b9b54f14a802c75df9db9330ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_21d3d8e804d661d43edfe7d5de612d16b584f1b9b54f14a802c75df9db9330ab->leave($__internal_21d3d8e804d661d43edfe7d5de612d16b584f1b9b54f14a802c75df9db9330ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
