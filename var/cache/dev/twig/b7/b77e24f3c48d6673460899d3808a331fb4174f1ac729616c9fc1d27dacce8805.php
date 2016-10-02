<?php

/* @BladeTesterCalendar/Base/base.html.twig */
class __TwigTemplate_4e12172e91da5bdc65809fb968d9ebc9908ae3bc9b647626456ca707d3780e2b extends Twig_Template
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
        $__internal_c022cbf8c030c07660869e7e4ae5630ff152ea275f8312bf468f21694de6f4e1 = $this->env->getExtension("native_profiler");
        $__internal_c022cbf8c030c07660869e7e4ae5630ff152ea275f8312bf468f21694de6f4e1->enter($__internal_c022cbf8c030c07660869e7e4ae5630ff152ea275f8312bf468f21694de6f4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BladeTesterCalendar/Base/base.html.twig"));

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
        
        $__internal_c022cbf8c030c07660869e7e4ae5630ff152ea275f8312bf468f21694de6f4e1->leave($__internal_c022cbf8c030c07660869e7e4ae5630ff152ea275f8312bf468f21694de6f4e1_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_d09d69b7aa8381b847a505c40e365ec2842b943e21f3dfbd8e62288f02cd9f5a = $this->env->getExtension("native_profiler");
        $__internal_d09d69b7aa8381b847a505c40e365ec2842b943e21f3dfbd8e62288f02cd9f5a->enter($__internal_d09d69b7aa8381b847a505c40e365ec2842b943e21f3dfbd8e62288f02cd9f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "                    ";
        
        $__internal_d09d69b7aa8381b847a505c40e365ec2842b943e21f3dfbd8e62288f02cd9f5a->leave($__internal_d09d69b7aa8381b847a505c40e365ec2842b943e21f3dfbd8e62288f02cd9f5a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f33b422b3ba2645ddeceac6e3bcf4c190aa19515964b73d20b5c8b2e2d5fd54 = $this->env->getExtension("native_profiler");
        $__internal_8f33b422b3ba2645ddeceac6e3bcf4c190aa19515964b73d20b5c8b2e2d5fd54->enter($__internal_8f33b422b3ba2645ddeceac6e3bcf4c190aa19515964b73d20b5c8b2e2d5fd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "                    ";
        
        $__internal_8f33b422b3ba2645ddeceac6e3bcf4c190aa19515964b73d20b5c8b2e2d5fd54->leave($__internal_8f33b422b3ba2645ddeceac6e3bcf4c190aa19515964b73d20b5c8b2e2d5fd54_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_986c1bdc0b994787998b67039420e898ec282be63127ceba1382d78611e5b777 = $this->env->getExtension("native_profiler");
        $__internal_986c1bdc0b994787998b67039420e898ec282be63127ceba1382d78611e5b777->enter($__internal_986c1bdc0b994787998b67039420e898ec282be63127ceba1382d78611e5b777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                        <p>Opensourced by <a href=\"#\">&reg;Vetaminic</a></p>
                    ";
        
        $__internal_986c1bdc0b994787998b67039420e898ec282be63127ceba1382d78611e5b777->leave($__internal_986c1bdc0b994787998b67039420e898ec282be63127ceba1382d78611e5b777_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d28826f8ac006c97b7134de04fedf9f12baaa906c7a6ba7163f2567276088bca = $this->env->getExtension("native_profiler");
        $__internal_d28826f8ac006c97b7134de04fedf9f12baaa906c7a6ba7163f2567276088bca->enter($__internal_d28826f8ac006c97b7134de04fedf9f12baaa906c7a6ba7163f2567276088bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/calendar.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_d28826f8ac006c97b7134de04fedf9f12baaa906c7a6ba7163f2567276088bca->leave($__internal_d28826f8ac006c97b7134de04fedf9f12baaa906c7a6ba7163f2567276088bca_prof);

    }

    public function getTemplateName()
    {
        return "@BladeTesterCalendar/Base/base.html.twig";
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
