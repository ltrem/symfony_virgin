<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c6966cec57c60be59367eecb568777b8d457ad8f70c00fc997ef347c9d1fabe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3f12c9aa51b7463bbc4b4456229c4b98122c5464df07d7c101c367ff8bd30fef = $this->env->getExtension("native_profiler");
        $__internal_3f12c9aa51b7463bbc4b4456229c4b98122c5464df07d7c101c367ff8bd30fef->enter($__internal_3f12c9aa51b7463bbc4b4456229c4b98122c5464df07d7c101c367ff8bd30fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f12c9aa51b7463bbc4b4456229c4b98122c5464df07d7c101c367ff8bd30fef->leave($__internal_3f12c9aa51b7463bbc4b4456229c4b98122c5464df07d7c101c367ff8bd30fef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7af0080f9d6f5af5ea2fe3a1a9d896377b7515e93128406d4f1c4148dc91a737 = $this->env->getExtension("native_profiler");
        $__internal_7af0080f9d6f5af5ea2fe3a1a9d896377b7515e93128406d4f1c4148dc91a737->enter($__internal_7af0080f9d6f5af5ea2fe3a1a9d896377b7515e93128406d4f1c4148dc91a737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7af0080f9d6f5af5ea2fe3a1a9d896377b7515e93128406d4f1c4148dc91a737->leave($__internal_7af0080f9d6f5af5ea2fe3a1a9d896377b7515e93128406d4f1c4148dc91a737_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24ac03388af662645c754f83c8068a5548b77d63e854cfeb719631235aaf9278 = $this->env->getExtension("native_profiler");
        $__internal_24ac03388af662645c754f83c8068a5548b77d63e854cfeb719631235aaf9278->enter($__internal_24ac03388af662645c754f83c8068a5548b77d63e854cfeb719631235aaf9278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24ac03388af662645c754f83c8068a5548b77d63e854cfeb719631235aaf9278->leave($__internal_24ac03388af662645c754f83c8068a5548b77d63e854cfeb719631235aaf9278_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e1808f8b49cd850ffb6aecfb5155de4c5b6152f278085f3d3daee1a0212d301 = $this->env->getExtension("native_profiler");
        $__internal_7e1808f8b49cd850ffb6aecfb5155de4c5b6152f278085f3d3daee1a0212d301->enter($__internal_7e1808f8b49cd850ffb6aecfb5155de4c5b6152f278085f3d3daee1a0212d301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7e1808f8b49cd850ffb6aecfb5155de4c5b6152f278085f3d3daee1a0212d301->leave($__internal_7e1808f8b49cd850ffb6aecfb5155de4c5b6152f278085f3d3daee1a0212d301_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
