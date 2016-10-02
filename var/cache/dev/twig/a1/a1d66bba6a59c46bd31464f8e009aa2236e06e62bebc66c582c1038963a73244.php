<?php

/* event/edit.html.twig */
class __TwigTemplate_235dae521082b87513cd26746009f1e267b5b8485787b84ea56b72ddaa5dcf1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/edit.html.twig", 1);
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
        $__internal_31d6600fcf41592a3be81f46e0726a43d0497e0f1681b7ff7c4fafc5651ab533 = $this->env->getExtension("native_profiler");
        $__internal_31d6600fcf41592a3be81f46e0726a43d0497e0f1681b7ff7c4fafc5651ab533->enter($__internal_31d6600fcf41592a3be81f46e0726a43d0497e0f1681b7ff7c4fafc5651ab533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d6600fcf41592a3be81f46e0726a43d0497e0f1681b7ff7c4fafc5651ab533->leave($__internal_31d6600fcf41592a3be81f46e0726a43d0497e0f1681b7ff7c4fafc5651ab533_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48847e3ee297c69aac025eee838e2a4ad74d89e6eeca9656b42128dd52dc3529 = $this->env->getExtension("native_profiler");
        $__internal_48847e3ee297c69aac025eee838e2a4ad74d89e6eeca9656b42128dd52dc3529->enter($__internal_48847e3ee297c69aac025eee838e2a4ad74d89e6eeca9656b42128dd52dc3529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48847e3ee297c69aac025eee838e2a4ad74d89e6eeca9656b42128dd52dc3529->leave($__internal_48847e3ee297c69aac025eee838e2a4ad74d89e6eeca9656b42128dd52dc3529_prof);

    }

    // line 23
    public function block_documentready($context, array $blocks = array())
    {
        $__internal_2b206504f6d5e7ba40edf8c3c03105b181363584d762d4308f51b0b41c5a7744 = $this->env->getExtension("native_profiler");
        $__internal_2b206504f6d5e7ba40edf8c3c03105b181363584d762d4308f51b0b41c5a7744->enter($__internal_2b206504f6d5e7ba40edf8c3c03105b181363584d762d4308f51b0b41c5a7744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentready"));

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
        
        $__internal_2b206504f6d5e7ba40edf8c3c03105b181363584d762d4308f51b0b41c5a7744->leave($__internal_2b206504f6d5e7ba40edf8c3c03105b181363584d762d4308f51b0b41c5a7744_prof);

    }

    public function getTemplateName()
    {
        return "event/edit.html.twig";
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
