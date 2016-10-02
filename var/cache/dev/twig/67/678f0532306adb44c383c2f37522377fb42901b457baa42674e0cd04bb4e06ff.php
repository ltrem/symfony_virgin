<?php

/* ::base.html.twig */
class __TwigTemplate_e4d7f0f110ccb43182f9e83b913f660ee7dc2cb810159e03220a67354d917e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentready' => array($this, 'block_documentready'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2cb914b7453be35ea7ca7d7a6794ba0bf5c1cde55cbc2dacc47722e2c5e5aae = $this->env->getExtension("native_profiler");
        $__internal_d2cb914b7453be35ea7ca7d7a6794ba0bf5c1cde55cbc2dacc47722e2c5e5aae->enter($__internal_d2cb914b7453be35ea7ca7d7a6794ba0bf5c1cde55cbc2dacc47722e2c5e5aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugin/bootstrap-3.3.6-dist/css/bootstrap.css"), "html", null, true);
        echo "\" />

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugin/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />

    </head>

    <body>

        <nav class=\"navbar navbar-inverse\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navitation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">Clinique Coderre</a>
                </div>

                ";
        // line 43
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "

            </div>
        </nav>

        <div class=\"container\">

            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"alert alert-success\"> ";
            // line 53
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "                </div>
            </div>
        </div><!-- /.container -->


        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugin/bootstrap-3.3.6-dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/calendar-settings.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugin/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>


        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "        <script>
            \$( document ).ready(function() {

                \$(\".basedatetime\").datetimepicker({
                    bootcssVer: 3,
                    format: 'yyyy-mm-dd',
                    autoclose: true,
                    minView: 'month'
                });

                ";
        // line 92
        $this->displayBlock('documentready', $context, $blocks);
        // line 94
        echo "            });
        </script>

    </body>
</html>
";
        
        $__internal_d2cb914b7453be35ea7ca7d7a6794ba0bf5c1cde55cbc2dacc47722e2c5e5aae->leave($__internal_d2cb914b7453be35ea7ca7d7a6794ba0bf5c1cde55cbc2dacc47722e2c5e5aae_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_9256866b919257630eec94fe0d633d52ef632563aed79ee3133524c439566753 = $this->env->getExtension("native_profiler");
        $__internal_9256866b919257630eec94fe0d633d52ef632563aed79ee3133524c439566753->enter($__internal_9256866b919257630eec94fe0d633d52ef632563aed79ee3133524c439566753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9256866b919257630eec94fe0d633d52ef632563aed79ee3133524c439566753->leave($__internal_9256866b919257630eec94fe0d633d52ef632563aed79ee3133524c439566753_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a8f2c58290f5fb8ec2788282b0b17a86346629d0063823d096ba826223e7760 = $this->env->getExtension("native_profiler");
        $__internal_9a8f2c58290f5fb8ec2788282b0b17a86346629d0063823d096ba826223e7760->enter($__internal_9a8f2c58290f5fb8ec2788282b0b17a86346629d0063823d096ba826223e7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a8f2c58290f5fb8ec2788282b0b17a86346629d0063823d096ba826223e7760->leave($__internal_9a8f2c58290f5fb8ec2788282b0b17a86346629d0063823d096ba826223e7760_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_c13250fa7f7549f17395708f41eb6223bf42bfdf5d22b91b8fe41b24a60ce6b5 = $this->env->getExtension("native_profiler");
        $__internal_c13250fa7f7549f17395708f41eb6223bf42bfdf5d22b91b8fe41b24a60ce6b5->enter($__internal_c13250fa7f7549f17395708f41eb6223bf42bfdf5d22b91b8fe41b24a60ce6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c13250fa7f7549f17395708f41eb6223bf42bfdf5d22b91b8fe41b24a60ce6b5->leave($__internal_c13250fa7f7549f17395708f41eb6223bf42bfdf5d22b91b8fe41b24a60ce6b5_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd26089fbdd1f2c4bfdb80d463e0abc19f621ca6cd3ca0df5d4cc8150006c2ef = $this->env->getExtension("native_profiler");
        $__internal_fd26089fbdd1f2c4bfdb80d463e0abc19f621ca6cd3ca0df5d4cc8150006c2ef->enter($__internal_fd26089fbdd1f2c4bfdb80d463e0abc19f621ca6cd3ca0df5d4cc8150006c2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "        ";
        
        $__internal_fd26089fbdd1f2c4bfdb80d463e0abc19f621ca6cd3ca0df5d4cc8150006c2ef->leave($__internal_fd26089fbdd1f2c4bfdb80d463e0abc19f621ca6cd3ca0df5d4cc8150006c2ef_prof);

    }

    // line 92
    public function block_documentready($context, array $blocks = array())
    {
        $__internal_487dce99225de74cc1b6298bdcd547e5edac53d3b8519594f120c1e54618642f = $this->env->getExtension("native_profiler");
        $__internal_487dce99225de74cc1b6298bdcd547e5edac53d3b8519594f120c1e54618642f->enter($__internal_487dce99225de74cc1b6298bdcd547e5edac53d3b8519594f120c1e54618642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentready"));

        // line 93
        echo "                ";
        
        $__internal_487dce99225de74cc1b6298bdcd547e5edac53d3b8519594f120c1e54618642f->leave($__internal_487dce99225de74cc1b6298bdcd547e5edac53d3b8519594f120c1e54618642f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 93,  237 => 92,  230 => 81,  224 => 80,  213 => 60,  202 => 20,  190 => 12,  178 => 94,  176 => 92,  164 => 82,  162 => 80,  156 => 77,  151 => 75,  147 => 74,  142 => 72,  134 => 67,  130 => 66,  123 => 61,  121 => 60,  116 => 57,  106 => 53,  102 => 51,  98 => 50,  88 => 43,  67 => 25,  62 => 23,  56 => 21,  54 => 20,  46 => 15,  40 => 12,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="../../favicon.ico">*/
/* */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <!-- Bootstrap core CSS -->*/
/*         <link rel="stylesheet" href="{{ asset('plugin/bootstrap-3.3.6-dist/css/bootstrap.css') }}" />*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset('js/fullcalendar.css') }}" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset('plugin/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css') }}" />*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <nav class="navbar navbar-inverse">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navitation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/">Clinique Coderre</a>*/
/*                 </div>*/
/* */
/*                 {{ include('menu.html.twig') }}*/
/* */
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="container">*/
/* */
/*             {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12">*/
/*                         <div class="alert alert-success"> {{ flash_message }} </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- /.container -->*/
/* */
/* */
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* */
/* */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="{{ asset('plugin/bootstrap-3.3.6-dist/js/bootstrap.js') }}"></script>*/
/*         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/fullcalendar.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/calendar-settings.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('plugin/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js') }}"></script>*/
/* */
/* */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*         <script>*/
/*             $( document ).ready(function() {*/
/* */
/*                 $(".basedatetime").datetimepicker({*/
/*                     bootcssVer: 3,*/
/*                     format: 'yyyy-mm-dd',*/
/*                     autoclose: true,*/
/*                     minView: 'month'*/
/*                 });*/
/* */
/*                 {% block documentready %}*/
/*                 {% endblock %}*/
/*             });*/
/*         </script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
