<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8916f3a4ca8dc7c6efb33fce8844f038b9c3617d4dfa7d48213f6a71a0ab53ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3be8e561a591f161963f681733e3b09de11f1a7b266fb707eae7af9ef4f2f18e = $this->env->getExtension("native_profiler");
        $__internal_3be8e561a591f161963f681733e3b09de11f1a7b266fb707eae7af9ef4f2f18e->enter($__internal_3be8e561a591f161963f681733e3b09de11f1a7b266fb707eae7af9ef4f2f18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be8e561a591f161963f681733e3b09de11f1a7b266fb707eae7af9ef4f2f18e->leave($__internal_3be8e561a591f161963f681733e3b09de11f1a7b266fb707eae7af9ef4f2f18e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d2fd6b2e20535ee916eb8c0fac99c096ee519020791cc01d6d883f019890bef = $this->env->getExtension("native_profiler");
        $__internal_3d2fd6b2e20535ee916eb8c0fac99c096ee519020791cc01d6d883f019890bef->enter($__internal_3d2fd6b2e20535ee916eb8c0fac99c096ee519020791cc01d6d883f019890bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 15
        echo "
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <div class=\"row\">
            ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "        </div>

";
        
        $__internal_3d2fd6b2e20535ee916eb8c0fac99c096ee519020791cc01d6d883f019890bef->leave($__internal_3d2fd6b2e20535ee916eb8c0fac99c096ee519020791cc01d6d883f019890bef_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d7f8d5dff4d1a19513436b353086406aedc91cc740811342e3998e93e58273e = $this->env->getExtension("native_profiler");
        $__internal_3d7f8d5dff4d1a19513436b353086406aedc91cc740811342e3998e93e58273e->enter($__internal_3d7f8d5dff4d1a19513436b353086406aedc91cc740811342e3998e93e58273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "            ";
        
        $__internal_3d7f8d5dff4d1a19513436b353086406aedc91cc740811342e3998e93e58273e->leave($__internal_3d7f8d5dff4d1a19513436b353086406aedc91cc740811342e3998e93e58273e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  91 => 25,  82 => 27,  80 => 25,  76 => 23,  70 => 22,  61 => 19,  56 => 18,  51 => 17,  47 => 16,  44 => 15,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* {#         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div> #}*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="alert alert-{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div class="row">*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/* {% endblock %}*/
