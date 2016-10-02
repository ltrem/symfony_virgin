<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_abd433a059dd4017a0de85a27c7e971d80d2a01f02b05608e430f36b4ea768f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_c2304f3730a7366d86d540beee39660b35c3ef6f1e6263cce5057dc0da31b182 = $this->env->getExtension("native_profiler");
        $__internal_c2304f3730a7366d86d540beee39660b35c3ef6f1e6263cce5057dc0da31b182->enter($__internal_c2304f3730a7366d86d540beee39660b35c3ef6f1e6263cce5057dc0da31b182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2304f3730a7366d86d540beee39660b35c3ef6f1e6263cce5057dc0da31b182->leave($__internal_c2304f3730a7366d86d540beee39660b35c3ef6f1e6263cce5057dc0da31b182_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34b77d7cccbaec173f96bb1e1fc8fdccb117c93988b66601043f1754082bf3da = $this->env->getExtension("native_profiler");
        $__internal_34b77d7cccbaec173f96bb1e1fc8fdccb117c93988b66601043f1754082bf3da->enter($__internal_34b77d7cccbaec173f96bb1e1fc8fdccb117c93988b66601043f1754082bf3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_34b77d7cccbaec173f96bb1e1fc8fdccb117c93988b66601043f1754082bf3da->leave($__internal_34b77d7cccbaec173f96bb1e1fc8fdccb117c93988b66601043f1754082bf3da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
