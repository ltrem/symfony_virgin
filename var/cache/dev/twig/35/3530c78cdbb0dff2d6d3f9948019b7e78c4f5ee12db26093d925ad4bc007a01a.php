<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d7d705904f9a7d7a85cf0ac14b778df56f68fee906fc5e35cac65638838cd699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95911c779c4723cb2289edec93fed937e6042845ab0c7cc2c60b69bf61a19a79 = $this->env->getExtension("native_profiler");
        $__internal_95911c779c4723cb2289edec93fed937e6042845ab0c7cc2c60b69bf61a19a79->enter($__internal_95911c779c4723cb2289edec93fed937e6042845ab0c7cc2c60b69bf61a19a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95911c779c4723cb2289edec93fed937e6042845ab0c7cc2c60b69bf61a19a79->leave($__internal_95911c779c4723cb2289edec93fed937e6042845ab0c7cc2c60b69bf61a19a79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82adc92ef9e1ef8785fd89d74482888b9c790de59f4ab27bcb73ad605c48051d = $this->env->getExtension("native_profiler");
        $__internal_82adc92ef9e1ef8785fd89d74482888b9c790de59f4ab27bcb73ad605c48051d->enter($__internal_82adc92ef9e1ef8785fd89d74482888b9c790de59f4ab27bcb73ad605c48051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_82adc92ef9e1ef8785fd89d74482888b9c790de59f4ab27bcb73ad605c48051d->leave($__internal_82adc92ef9e1ef8785fd89d74482888b9c790de59f4ab27bcb73ad605c48051d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92a9b59d665b29baa9b67e3786cc9a168655dc3b72de8a811113b7eb9a0fed2 = $this->env->getExtension("native_profiler");
        $__internal_e92a9b59d665b29baa9b67e3786cc9a168655dc3b72de8a811113b7eb9a0fed2->enter($__internal_e92a9b59d665b29baa9b67e3786cc9a168655dc3b72de8a811113b7eb9a0fed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e92a9b59d665b29baa9b67e3786cc9a168655dc3b72de8a811113b7eb9a0fed2->leave($__internal_e92a9b59d665b29baa9b67e3786cc9a168655dc3b72de8a811113b7eb9a0fed2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
