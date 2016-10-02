<?php

/* :event:index.html.twig */
class __TwigTemplate_83747aac531d04758c865795d730ef078206b42f9a602a93dfc6e558382b383d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":event:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentready' => array($this, 'block_documentready'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d562467cbc1f4f5b8c6cac8ccae43ad9b086800e6aae1bacbc371c03f0cd166 = $this->env->getExtension("native_profiler");
        $__internal_9d562467cbc1f4f5b8c6cac8ccae43ad9b086800e6aae1bacbc371c03f0cd166->enter($__internal_9d562467cbc1f4f5b8c6cac8ccae43ad9b086800e6aae1bacbc371c03f0cd166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d562467cbc1f4f5b8c6cac8ccae43ad9b086800e6aae1bacbc371c03f0cd166->leave($__internal_9d562467cbc1f4f5b8c6cac8ccae43ad9b086800e6aae1bacbc371c03f0cd166_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20d4dce6e8f53da431b6fa77286892967b5690cbe6de613ad29cc357036841c7 = $this->env->getExtension("native_profiler");
        $__internal_20d4dce6e8f53da431b6fa77286892967b5690cbe6de613ad29cc357036841c7->enter($__internal_20d4dce6e8f53da431b6fa77286892967b5690cbe6de613ad29cc357036841c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Prendre un rendez-vous</h1>

    <div class=\"row\">


        <div class=\"col-sm-8\">

            <h2>Sélectionner une plage horaire</h2>

            ";
        // line 13
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", ":event:index.html.twig", 13)->display($context);
        // line 14
        echo "
        </div>

        <div class=\"col-sm-4\">

            ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("ROLE_CLIENT")) {
            // line 20
            echo "
                <div class=\"client_event\">
                    ";
            // line 22
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "

                        ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                        ";
            // line 26
            echo "                        <input id=\"form_submit\" type=\"submit\" class=\"btn btn-primary\" value=\"Confirmez mon rendez-vous\" />

                    ";
            // line 28
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                </div>

            ";
        }
        // line 32
        echo "

        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-sm-12\">

            ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Starttime</th>
                        <th>Endtime</th>
                        ";
            // line 51
            echo "                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 55
                echo "
                        <tr>
                            <th scope=\"row\"><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startTime", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endTime", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\">View</a>
                                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">Edit</a>
                                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_delete", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\">Delete</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    </tbody>
                </table>

                <ul>
                    <li>
                        <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("event_new");
            echo "\">Create a new entry</a>
                    </li>
                </ul>

            ";
        }
        // line 78
        echo "
        </div>
    </div>

    ";
        // line 83
        echo "    ";
        // line 84
        echo "    ";
        // line 85
        echo "        ";
        // line 86
        echo "            ";
        // line 87
        echo "                ";
        // line 88
        echo "                    ";
        // line 89
        echo "                    ";
        // line 90
        echo "                ";
        // line 91
        echo "                ";
        // line 92
        echo "
                    ";
        // line 94
        echo "
                ";
        // line 96
        echo "                ";
        // line 97
        echo "                    ";
        // line 98
        echo "                    ";
        // line 99
        echo "                ";
        // line 100
        echo "            ";
        // line 101
        echo "        ";
        // line 102
        echo "    ";
        // line 103
        echo "
    ";
        // line 105
        echo "
";
        
        $__internal_20d4dce6e8f53da431b6fa77286892967b5690cbe6de613ad29cc357036841c7->leave($__internal_20d4dce6e8f53da431b6fa77286892967b5690cbe6de613ad29cc357036841c7_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edfae51b3e917e286d3ae11e38b8d8b26b541e04ec4f2863a518ab4e24c84cf8 = $this->env->getExtension("native_profiler");
        $__internal_edfae51b3e917e286d3ae11e38b8d8b26b541e04ec4f2863a518ab4e24c84cf8->enter($__internal_edfae51b3e917e286d3ae11e38b8d8b26b541e04ec4f2863a518ab4e24c84cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "        <script>

//            \$('#form_submit').click(function(e){
//                e.preventDefault();
//                \$(this).closest('form').find('*').prop(\"disabled\", false);
//                \$(this).closest('form').submit();
//            });

        </script>
    ";
        
        $__internal_edfae51b3e917e286d3ae11e38b8d8b26b541e04ec4f2863a518ab4e24c84cf8->leave($__internal_edfae51b3e917e286d3ae11e38b8d8b26b541e04ec4f2863a518ab4e24c84cf8_prof);

    }

    // line 120
    public function block_documentready($context, array $blocks = array())
    {
        $__internal_655ed745539267e9623487b3bce8645df75acc5b1676ad658f8765516c55c510 = $this->env->getExtension("native_profiler");
        $__internal_655ed745539267e9623487b3bce8645df75acc5b1676ad658f8765516c55c510->enter($__internal_655ed745539267e9623487b3bce8645df75acc5b1676ad658f8765516c55c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentready"));

        // line 121
        echo "
        ";
        // line 123
        echo "
        \$(\".form_datetime\").datetimepicker({
        bootcssVer: 3,
        format: 'yyyy-mm-dd hh:ii',
        autoclose: true,
        minuteStep: 60,
        minView: 'day',
        initialDate: 'today',
        todayHighlight: true,
        ";
        // line 133
        echo "        ";
        // line 134
        echo "        })
        .on('changeDate', function(ev){
            endtime = moment(ev.date).add(1, 'hour').format('YYYY-MM-DD HH:mm');
            \$('.client_event #event_endTime').val(endtime);
        });
    ";
        
        $__internal_655ed745539267e9623487b3bce8645df75acc5b1676ad658f8765516c55c510->leave($__internal_655ed745539267e9623487b3bce8645df75acc5b1676ad658f8765516c55c510_prof);

    }

    public function getTemplateName()
    {
        return ":event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 134,  273 => 133,  262 => 123,  259 => 121,  253 => 120,  237 => 109,  231 => 108,  223 => 105,  220 => 103,  218 => 102,  216 => 101,  214 => 100,  212 => 99,  210 => 98,  208 => 97,  206 => 96,  203 => 94,  200 => 92,  198 => 91,  196 => 90,  194 => 89,  192 => 88,  190 => 87,  188 => 86,  186 => 85,  184 => 84,  182 => 83,  176 => 78,  168 => 73,  161 => 68,  151 => 64,  147 => 63,  143 => 62,  138 => 60,  134 => 59,  130 => 58,  124 => 57,  120 => 55,  116 => 54,  111 => 51,  101 => 42,  99 => 41,  88 => 32,  81 => 28,  77 => 26,  73 => 24,  68 => 22,  64 => 20,  62 => 19,  55 => 14,  53 => 13,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Prendre un rendez-vous</h1>*/
/* */
/*     <div class="row">*/
/* */
/* */
/*         <div class="col-sm-8">*/
/* */
/*             <h2>Sélectionner une plage horaire</h2>*/
/* */
/*             {% include 'ADesignsCalendarBundle::calendar.html.twig' %}*/
/* */
/*         </div>*/
/* */
/*         <div class="col-sm-4">*/
/* */
/*             {% if is_granted('ROLE_CLIENT') %}*/
/* */
/*                 <div class="client_event">*/
/*                     {{ form_start(form) }}*/
/* */
/*                         {{ form_widget(form) }}*/
/*                         {#<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>#}*/
/*                         <input id="form_submit" type="submit" class="btn btn-primary" value="Confirmez mon rendez-vous" />*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/* */
/*             {% endif %}*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-sm-12">*/
/* */
/*             {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Name</th>*/
/*                         <th>Starttime</th>*/
/*                         <th>Endtime</th>*/
/*                         {#<th>Actions</th>#}*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for event in events %}*/
/* */
/*                         <tr>*/
/*                             <th scope="row"><a href="{{ path('event_show', { 'id': event.id }) }}">{{ event.id }}</a></td>*/
/*                             <td>{{ event.name }}</td>*/
/*                             <td>{{ event.startTime|date('Y-m-d') }}</td>*/
/*                             <td>{{ event.endTime|date('Y-m-d') }}</td>*/
/*                             <td>*/
/*                                 <a href="{{ path('event_show', { 'id': event.id }) }}" class="btn btn-xs btn-success">View</a>*/
/*                                 <a href="{{ path('event_edit', { 'id': event.id }) }}" class="btn btn-xs btn-default">Edit</a>*/
/*                                 <a href="{{ path('event_delete', { 'id': event.id }) }}" class="btn btn-xs btn-danger">Delete</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('event_new') }}">Create a new entry</a>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*             {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     {#{{ form_start(form) }}#}*/
/*     {##}*/
/*     {#<div id="fullCalModal" class="modal fade">#}*/
/*         {#<div class="modal-dialog">#}*/
/*             {#<div class="modal-content">#}*/
/*                 {#<div class="modal-header">#}*/
/*                     {#<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>#}*/
/*                     {#<h4 id="modalTitle" class="modal-title">Hello</h4>#}*/
/*                 {#</div>#}*/
/*                 {#<div id="modalBody" class="modal-body">#}*/
/* */
/*                     {#{{ form_widget(form) }}#}*/
/* */
/*                 {#</div>#}*/
/*                 {#<div class="modal-footer">#}*/
/*                     {#<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>#}*/
/*                     {#<input type="submit" class="btn btn-primary" value="Create" />#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*     {#</div>#}*/
/* */
/*     {#{{ form_end(form) }}#}*/
/* */
/* {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         <script>*/
/* */
/* //            $('#form_submit').click(function(e){*/
/* //                e.preventDefault();*/
/* //                $(this).closest('form').find('*').prop("disabled", false);*/
/* //                $(this).closest('form').submit();*/
/* //            });*/
/* */
/*         </script>*/
/*     {% endblock %}*/
/* */
/*     {% block documentready %}*/
/* */
/*         {#$('input[type=datetime]').prop("disabled", true);#}*/
/* */
/*         $(".form_datetime").datetimepicker({*/
/*         bootcssVer: 3,*/
/*         format: 'yyyy-mm-dd hh:ii',*/
/*         autoclose: true,*/
/*         minuteStep: 60,*/
/*         minView: 'day',*/
/*         initialDate: 'today',*/
/*         todayHighlight: true,*/
/*         {#todayBtn: true,#}*/
/*         {#pickerPosition: "bottom-left",#}*/
/*         })*/
/*         .on('changeDate', function(ev){*/
/*             endtime = moment(ev.date).add(1, 'hour').format('YYYY-MM-DD HH:mm');*/
/*             $('.client_event #event_endTime').val(endtime);*/
/*         });*/
/*     {% endblock %}*/
