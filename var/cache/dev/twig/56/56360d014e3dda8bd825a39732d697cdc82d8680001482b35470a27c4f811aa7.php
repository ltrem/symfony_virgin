<?php

/* :event:edit.html.twig */
class __TwigTemplate_7b0273e0d354f7ebad254157db8c3af87a8b69cdee71369b8400409805c7b39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":event:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'documentready' => array($this, 'block_documentready'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a303c09d7755410d32609cd895069bb489bc4efd5367885eb15dd5bb34f15cf2 = $this->env->getExtension("native_profiler");
        $__internal_a303c09d7755410d32609cd895069bb489bc4efd5367885eb15dd5bb34f15cf2->enter($__internal_a303c09d7755410d32609cd895069bb489bc4efd5367885eb15dd5bb34f15cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a303c09d7755410d32609cd895069bb489bc4efd5367885eb15dd5bb34f15cf2->leave($__internal_a303c09d7755410d32609cd895069bb489bc4efd5367885eb15dd5bb34f15cf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba9aa03d6675dc28906cac350484a89e56efc2336035954ba01d51d045a9b545 = $this->env->getExtension("native_profiler");
        $__internal_ba9aa03d6675dc28906cac350484a89e56efc2336035954ba01d51d045a9b545->enter($__internal_ba9aa03d6675dc28906cac350484a89e56efc2336035954ba01d51d045a9b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event edit</h1>


    <div class=\"client_event\">
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>

    <a class=\"btn btn-default\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">Back to the list</a>


";
        
        $__internal_ba9aa03d6675dc28906cac350484a89e56efc2336035954ba01d51d045a9b545->leave($__internal_ba9aa03d6675dc28906cac350484a89e56efc2336035954ba01d51d045a9b545_prof);

    }

    // line 23
    public function block_documentready($context, array $blocks = array())
    {
        $__internal_31101baa7d7bf50320d6c0027aa54dc1d8f76a4a5be5cd9a9e7a25acf7742b2e = $this->env->getExtension("native_profiler");
        $__internal_31101baa7d7bf50320d6c0027aa54dc1d8f76a4a5be5cd9a9e7a25acf7742b2e->enter($__internal_31101baa7d7bf50320d6c0027aa54dc1d8f76a4a5be5cd9a9e7a25acf7742b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentready"));

        // line 24
        echo "
        ";
        // line 26
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
        // line 36
        echo "        ";
        // line 37
        echo "        })
        .on('changeDate', function(ev){
        endtime = moment(ev.date).add(1, 'hour').format('YYYY-MM-DD HH:mm');
        \$('.client_event #event_endTime').val(endtime);
        });
    ";
        
        $__internal_31101baa7d7bf50320d6c0027aa54dc1d8f76a4a5be5cd9a9e7a25acf7742b2e->leave($__internal_31101baa7d7bf50320d6c0027aa54dc1d8f76a4a5be5cd9a9e7a25acf7742b2e_prof);

    }

    public function getTemplateName()
    {
        return ":event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  103 => 36,  92 => 26,  89 => 24,  83 => 23,  72 => 18,  66 => 15,  61 => 13,  56 => 11,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event edit</h1>*/
/* */
/* */
/*     <div class="client_event">*/
/*         {{ form_start(edit_form) }}*/
/*             {{ form_widget(edit_form) }}*/
/*             <button type="submit" class="btn btn-success">Edit</button>*/
/*         {{ form_end(edit_form) }}*/
/* */
/*         {{ form_start(delete_form) }}*/
/*             <button type="submit" class="btn btn-danger">Delete</button>*/
/*         {{ form_end(delete_form) }}*/
/*     </div>*/
/* */
/*     <a class="btn btn-default" href="{{ path('event_index') }}">Back to the list</a>*/
/* */
/* */
/* {% endblock %}*/
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
/*         endtime = moment(ev.date).add(1, 'hour').format('YYYY-MM-DD HH:mm');*/
/*         $('.client_event #event_endTime').val(endtime);*/
/*         });*/
/*     {% endblock %}*/
