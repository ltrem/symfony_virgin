<?php

/* user.html.twig */
class __TwigTemplate_9aed18dda2ccfd245525f2c818933786bdc24629e24af90db950aeb21e536839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
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
        $__internal_6dea67a05b192ad8386716b21a724a64a7f18828d0dfa386a8b04a0fe441ef92 = $this->env->getExtension("native_profiler");
        $__internal_6dea67a05b192ad8386716b21a724a64a7f18828d0dfa386a8b04a0fe441ef92->enter($__internal_6dea67a05b192ad8386716b21a724a64a7f18828d0dfa386a8b04a0fe441ef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dea67a05b192ad8386716b21a724a64a7f18828d0dfa386a8b04a0fe441ef92->leave($__internal_6dea67a05b192ad8386716b21a724a64a7f18828d0dfa386a8b04a0fe441ef92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d381acfa93d5a97eb763c3795ddaa6205699b3f4fba245ebaee7e372a629ce6e = $this->env->getExtension("native_profiler");
        $__internal_d381acfa93d5a97eb763c3795ddaa6205699b3f4fba245ebaee7e372a629ce6e->enter($__internal_d381acfa93d5a97eb763c3795ddaa6205699b3f4fba245ebaee7e372a629ce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Page d'utilisateur</h1>

    <p>Vous êtes un :
    \t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "
    \t\t<b>administrateur</b>

    \t";
        }
        // line 13
        echo "
    \t";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_CLIENT")) {
            // line 15
            echo "
    \t\t<b>client</b>

    \t";
        }
        // line 19
        echo "    </p>
 
    ";
        // line 21
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "

    <p><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a></p>

";
        
        $__internal_d381acfa93d5a97eb763c3795ddaa6205699b3f4fba245ebaee7e372a629ce6e->leave($__internal_d381acfa93d5a97eb763c3795ddaa6205699b3f4fba245ebaee7e372a629ce6e_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  69 => 21,  65 => 19,  59 => 15,  57 => 14,  54 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Page d'utilisateur</h1>*/
/* */
/*     <p>Vous êtes un :*/
/*     	{% if is_granted('ROLE_ADMIN') %}*/
/* */
/*     		<b>administrateur</b>*/
/* */
/*     	{% endif %}*/
/* */
/*     	{% if is_granted('ROLE_CLIENT') %}*/
/* */
/*     		<b>client</b>*/
/* */
/*     	{% endif %}*/
/*     </p>*/
/*  */
/*     {{ dump(app.user) }}*/
/* */
/*     <p><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></p>*/
/* */
/* {% endblock %}*/
