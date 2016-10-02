<?php

/* BladeTesterCalendarBundle:Base:base.html.twig */
class __TwigTemplate_4557a19faf89f0cd8a1dcafec3a3b82dec0c5bb336ddacd7b81993d454db401e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5b53d44b182c8f3ab80dff40b927adb34f10f376f521a917c1cfd0c6014814a = $this->env->getExtension("native_profiler");
        $__internal_a5b53d44b182c8f3ab80dff40b927adb34f10f376f521a917c1cfd0c6014814a->enter($__internal_a5b53d44b182c8f3ab80dff40b927adb34f10f376f521a917c1cfd0c6014814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Base:base.html.twig"));

        // line 1
        echo "<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/css/calendar-header.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/css/calendar.css"), "html", null, true);
        echo "\">
    </head>
    <body>
            <div class=\"app\">
                <header class=\"main-header\">
                    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "                </header>


                <div class=\"main-body\">
                    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "                </div>

                <footer class=\"main-footer\">
                    ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "                </footer>
            </div>

    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>

";
        
        $__internal_a5b53d44b182c8f3ab80dff40b927adb34f10f376f521a917c1cfd0c6014814a->leave($__internal_a5b53d44b182c8f3ab80dff40b927adb34f10f376f521a917c1cfd0c6014814a_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_882eb00b42d2c70e162bd5fe895ea2851e789b1adf4ef96ff258cd997671f80c = $this->env->getExtension("native_profiler");
        $__internal_882eb00b42d2c70e162bd5fe895ea2851e789b1adf4ef96ff258cd997671f80c->enter($__internal_882eb00b42d2c70e162bd5fe895ea2851e789b1adf4ef96ff258cd997671f80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "                    ";
        
        $__internal_882eb00b42d2c70e162bd5fe895ea2851e789b1adf4ef96ff258cd997671f80c->leave($__internal_882eb00b42d2c70e162bd5fe895ea2851e789b1adf4ef96ff258cd997671f80c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_325c7a4e7c42a12a73c351c3e559dcfb5284021e9977e4da375af0e1ba1c1440 = $this->env->getExtension("native_profiler");
        $__internal_325c7a4e7c42a12a73c351c3e559dcfb5284021e9977e4da375af0e1ba1c1440->enter($__internal_325c7a4e7c42a12a73c351c3e559dcfb5284021e9977e4da375af0e1ba1c1440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "                    ";
        
        $__internal_325c7a4e7c42a12a73c351c3e559dcfb5284021e9977e4da375af0e1ba1c1440->leave($__internal_325c7a4e7c42a12a73c351c3e559dcfb5284021e9977e4da375af0e1ba1c1440_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d04f2ef9c89003490b72bd65ff059b0874ba21f78babf02680c51a881bc0081b = $this->env->getExtension("native_profiler");
        $__internal_d04f2ef9c89003490b72bd65ff059b0874ba21f78babf02680c51a881bc0081b->enter($__internal_d04f2ef9c89003490b72bd65ff059b0874ba21f78babf02680c51a881bc0081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                        <p>Opensourced by <a href=\"#\">&reg;Vetaminic</a></p>
                    ";
        
        $__internal_d04f2ef9c89003490b72bd65ff059b0874ba21f78babf02680c51a881bc0081b->leave($__internal_d04f2ef9c89003490b72bd65ff059b0874ba21f78babf02680c51a881bc0081b_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ff254396bfbe27a3254f0a2c299509bae26d5bdf4d4462734557b445e08cd6d = $this->env->getExtension("native_profiler");
        $__internal_5ff254396bfbe27a3254f0a2c299509bae26d5bdf4d4462734557b445e08cd6d->enter($__internal_5ff254396bfbe27a3254f0a2c299509bae26d5bdf4d4462734557b445e08cd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/calendar.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_5ff254396bfbe27a3254f0a2c299509bae26d5bdf4d4462734557b445e08cd6d->leave($__internal_5ff254396bfbe27a3254f0a2c299509bae26d5bdf4d4462734557b445e08cd6d_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  122 => 27,  116 => 26,  108 => 21,  102 => 20,  95 => 16,  89 => 15,  82 => 10,  76 => 9,  66 => 30,  64 => 26,  59 => 23,  57 => 20,  52 => 17,  50 => 15,  44 => 11,  42 => 9,  34 => 4,  30 => 3,  26 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/bladetestercalendar/css/calendar-header.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/bladetestercalendar/css/calendar.css') }}">*/
/*     </head>*/
/*     <body>*/
/*             <div class="app">*/
/*                 <header class="main-header">*/
/*                     {% block header %}*/
/*                     {% endblock %}*/
/*                 </header>*/
/* */
/* */
/*                 <div class="main-body">*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <footer class="main-footer">*/
/*                     {% block footer %}*/
/*                         <p>Opensourced by <a href="#">&reg;Vetaminic</a></p>*/
/*                     {% endblock %}*/
/*                 </footer>*/
/*             </div>*/
/* */
/*     {% block javascripts %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/bladetestercalendar/js/jquery-1.9.1.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/bladetestercalendar/js/calendar.js') }}"></script>*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
/* */
