<?php

/* login_success.html.twig */
class __TwigTemplate_8e70c71a03de03433dd0eac29b3c36b272d737145117dab6411ab27cb0612206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login_success.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5484003c3f470951588d9d7d5e5c16bffedae74dc57e2dec4d12979bc80f5222 = $this->env->getExtension("native_profiler");
        $__internal_5484003c3f470951588d9d7d5e5c16bffedae74dc57e2dec4d12979bc80f5222->enter($__internal_5484003c3f470951588d9d7d5e5c16bffedae74dc57e2dec4d12979bc80f5222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5484003c3f470951588d9d7d5e5c16bffedae74dc57e2dec4d12979bc80f5222->leave($__internal_5484003c3f470951588d9d7d5e5c16bffedae74dc57e2dec4d12979bc80f5222_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e67a92f4ed3dce8355c8c1a36f08861e7fe780a856ee2c7e440ebe75efa0c9ed = $this->env->getExtension("native_profiler");
        $__internal_e67a92f4ed3dce8355c8c1a36f08861e7fe780a856ee2c7e440ebe75efa0c9ed->enter($__internal_e67a92f4ed3dce8355c8c1a36f08861e7fe780a856ee2c7e440ebe75efa0c9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>Vous vous êtes correctement authentifié</p>
    <p>Bonjour,</p>

    <p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("client_page");
        echo "\">Accéder à l'espace réservé aux clients</a></p>

    <p><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_page");
        echo "\">Accéder à l'espace réservé aux administrateurs</a></p>

";
        
        $__internal_e67a92f4ed3dce8355c8c1a36f08861e7fe780a856ee2c7e440ebe75efa0c9ed->leave($__internal_e67a92f4ed3dce8355c8c1a36f08861e7fe780a856ee2c7e440ebe75efa0c9ed_prof);

    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <p>Vous vous êtes correctement authentifié</p>*/
/*     <p>Bonjour,</p>*/
/* */
/*     <p><a href="{{ path('client_page') }}">Accéder à l'espace réservé aux clients</a></p>*/
/* */
/*     <p><a href="{{ path('admin_page') }}">Accéder à l'espace réservé aux administrateurs</a></p>*/
/* */
/* {% endblock %}*/
