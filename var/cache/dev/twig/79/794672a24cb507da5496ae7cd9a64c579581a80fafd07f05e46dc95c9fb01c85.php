<?php

/* ::user.html.twig */
class __TwigTemplate_6df1041236f6b066bf9816acbcf89567c424ada3417f835582eefa41e19719ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::user.html.twig", 1);
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
        $__internal_1398881a2aec0ef2a4ba1449bb32e6746ec7534d5b17afb66f5fc843da3e49dc = $this->env->getExtension("native_profiler");
        $__internal_1398881a2aec0ef2a4ba1449bb32e6746ec7534d5b17afb66f5fc843da3e49dc->enter($__internal_1398881a2aec0ef2a4ba1449bb32e6746ec7534d5b17afb66f5fc843da3e49dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1398881a2aec0ef2a4ba1449bb32e6746ec7534d5b17afb66f5fc843da3e49dc->leave($__internal_1398881a2aec0ef2a4ba1449bb32e6746ec7534d5b17afb66f5fc843da3e49dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_597cb5f394c0f39cd9ac039dca058f504f1f13f41a4abe753da21cb10174cd25 = $this->env->getExtension("native_profiler");
        $__internal_597cb5f394c0f39cd9ac039dca058f504f1f13f41a4abe753da21cb10174cd25->enter($__internal_597cb5f394c0f39cd9ac039dca058f504f1f13f41a4abe753da21cb10174cd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_597cb5f394c0f39cd9ac039dca058f504f1f13f41a4abe753da21cb10174cd25->leave($__internal_597cb5f394c0f39cd9ac039dca058f504f1f13f41a4abe753da21cb10174cd25_prof);

    }

    public function getTemplateName()
    {
        return "::user.html.twig";
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
