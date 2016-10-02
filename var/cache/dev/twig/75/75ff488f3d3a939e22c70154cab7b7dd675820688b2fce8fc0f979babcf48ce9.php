<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e560b9979f23ef7f005f9f1f5b58107d220d89616ef7ff26dc3a3f73284de469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_bcedad7e88bb2b48dfaaee95d5a8f5e0e43f537a1214d4e980b63ef80aab7c20 = $this->env->getExtension("native_profiler");
        $__internal_bcedad7e88bb2b48dfaaee95d5a8f5e0e43f537a1214d4e980b63ef80aab7c20->enter($__internal_bcedad7e88bb2b48dfaaee95d5a8f5e0e43f537a1214d4e980b63ef80aab7c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcedad7e88bb2b48dfaaee95d5a8f5e0e43f537a1214d4e980b63ef80aab7c20->leave($__internal_bcedad7e88bb2b48dfaaee95d5a8f5e0e43f537a1214d4e980b63ef80aab7c20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd861e5f8376fe37ea9847e90e3a214d39bb544a6eaa8405d2e5fe58bff5b9bd = $this->env->getExtension("native_profiler");
        $__internal_bd861e5f8376fe37ea9847e90e3a214d39bb544a6eaa8405d2e5fe58bff5b9bd->enter($__internal_bd861e5f8376fe37ea9847e90e3a214d39bb544a6eaa8405d2e5fe58bff5b9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd861e5f8376fe37ea9847e90e3a214d39bb544a6eaa8405d2e5fe58bff5b9bd->leave($__internal_bd861e5f8376fe37ea9847e90e3a214d39bb544a6eaa8405d2e5fe58bff5b9bd_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20621e2e7da94be3c559a5ad445f7e0e9f8ed51b20461383cb5b0375bd9d1cf8 = $this->env->getExtension("native_profiler");
        $__internal_20621e2e7da94be3c559a5ad445f7e0e9f8ed51b20461383cb5b0375bd9d1cf8->enter($__internal_20621e2e7da94be3c559a5ad445f7e0e9f8ed51b20461383cb5b0375bd9d1cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "            ";
        
        $__internal_20621e2e7da94be3c559a5ad445f7e0e9f8ed51b20461383cb5b0375bd9d1cf8->leave($__internal_20621e2e7da94be3c559a5ad445f7e0e9f8ed51b20461383cb5b0375bd9d1cf8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
