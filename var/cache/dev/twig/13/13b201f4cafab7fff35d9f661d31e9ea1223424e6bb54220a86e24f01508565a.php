<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5f74f9a508b4ac3723684b298e1590b1df518f82fd8f36d0f86bd970ed695551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_870aaff97c04db4f5eb74ed7657fd9dca03635766233f2160e8c2284a79dad9f = $this->env->getExtension("native_profiler");
        $__internal_870aaff97c04db4f5eb74ed7657fd9dca03635766233f2160e8c2284a79dad9f->enter($__internal_870aaff97c04db4f5eb74ed7657fd9dca03635766233f2160e8c2284a79dad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870aaff97c04db4f5eb74ed7657fd9dca03635766233f2160e8c2284a79dad9f->leave($__internal_870aaff97c04db4f5eb74ed7657fd9dca03635766233f2160e8c2284a79dad9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97b2cee125bfeaf69f4cbd96f6d12be5d462a9925a63a4c987a6cd62fb8842df = $this->env->getExtension("native_profiler");
        $__internal_97b2cee125bfeaf69f4cbd96f6d12be5d462a9925a63a4c987a6cd62fb8842df->enter($__internal_97b2cee125bfeaf69f4cbd96f6d12be5d462a9925a63a4c987a6cd62fb8842df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_97b2cee125bfeaf69f4cbd96f6d12be5d462a9925a63a4c987a6cd62fb8842df->leave($__internal_97b2cee125bfeaf69f4cbd96f6d12be5d462a9925a63a4c987a6cd62fb8842df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1e13e33f18f20cfe80219c7598845d79e8709590b3118e014f300c6b30ec54b = $this->env->getExtension("native_profiler");
        $__internal_b1e13e33f18f20cfe80219c7598845d79e8709590b3118e014f300c6b30ec54b->enter($__internal_b1e13e33f18f20cfe80219c7598845d79e8709590b3118e014f300c6b30ec54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1e13e33f18f20cfe80219c7598845d79e8709590b3118e014f300c6b30ec54b->leave($__internal_b1e13e33f18f20cfe80219c7598845d79e8709590b3118e014f300c6b30ec54b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
