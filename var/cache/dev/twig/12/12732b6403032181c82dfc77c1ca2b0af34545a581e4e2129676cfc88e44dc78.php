<?php

/* event/new.html.twig */
class __TwigTemplate_f19ce861afccd1a475ce5633f70dd94908c5508b39bdb0b21002656ae75f7e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/new.html.twig", 1);
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
        $__internal_ebd189d3c01c7c5972be1df86c3e52ec7c23d388ed152eb3cf56e5dd37810151 = $this->env->getExtension("native_profiler");
        $__internal_ebd189d3c01c7c5972be1df86c3e52ec7c23d388ed152eb3cf56e5dd37810151->enter($__internal_ebd189d3c01c7c5972be1df86c3e52ec7c23d388ed152eb3cf56e5dd37810151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd189d3c01c7c5972be1df86c3e52ec7c23d388ed152eb3cf56e5dd37810151->leave($__internal_ebd189d3c01c7c5972be1df86c3e52ec7c23d388ed152eb3cf56e5dd37810151_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a66890305e005a509d02f6b2f326e15d0eac90c9856b03d7ad4e810c753c39f4 = $this->env->getExtension("native_profiler");
        $__internal_a66890305e005a509d02f6b2f326e15d0eac90c9856b03d7ad4e810c753c39f4->enter($__internal_a66890305e005a509d02f6b2f326e15d0eac90c9856b03d7ad4e810c753c39f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event creation</h1>

    <div class=\"client_event\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Create\" />
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a66890305e005a509d02f6b2f326e15d0eac90c9856b03d7ad4e810c753c39f4->leave($__internal_a66890305e005a509d02f6b2f326e15d0eac90c9856b03d7ad4e810c753c39f4_prof);

    }

    // line 21
    public function block_documentready($context, array $blocks = array())
    {
        $__internal_c90d92dfa61c7bf90399019c19f4c7e5506790131e8c37ee5c050ca73a8964da = $this->env->getExtension("native_profiler");
        $__internal_c90d92dfa61c7bf90399019c19f4c7e5506790131e8c37ee5c050ca73a8964da->enter($__internal_c90d92dfa61c7bf90399019c19f4c7e5506790131e8c37ee5c050ca73a8964da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentready"));

        // line 22
        echo "
        ";
        // line 24
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
        // line 34
        echo "        ";
        // line 35
        echo "        })
        .on('changeDate', function(ev){
        endtime = moment(ev.date).add(1, 'hour').format('YYYY-MM-DD HH:mm');
        \$('.client_event #event_endTime').val(endtime);
        });
    ";
        
        $__internal_c90d92dfa61c7bf90399019c19f4c7e5506790131e8c37ee5c050ca73a8964da->leave($__internal_c90d92dfa61c7bf90399019c19f4c7e5506790131e8c37ee5c050ca73a8964da_prof);

    }

    public function getTemplateName()
    {
        return "event/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  94 => 34,  83 => 24,  80 => 22,  74 => 21,  63 => 15,  55 => 10,  50 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event creation</h1>*/
/* */
/*     <div class="client_event">*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Create" />*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('event_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
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
