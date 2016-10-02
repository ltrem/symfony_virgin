<?php

/* :event:new.html.twig */
class __TwigTemplate_bef5a09a49b0d30366985e1f1c37ead35426c9b5f9f7a8d2dee4bd8a4ee7e734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":event:new.html.twig", 1);
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
        $__internal_9719629813e8dd0d9df9a2a9b2ce7331f479ae386badc31c908f5c981cde5d6b = $this->env->getExtension("native_profiler");
        $__internal_9719629813e8dd0d9df9a2a9b2ce7331f479ae386badc31c908f5c981cde5d6b->enter($__internal_9719629813e8dd0d9df9a2a9b2ce7331f479ae386badc31c908f5c981cde5d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9719629813e8dd0d9df9a2a9b2ce7331f479ae386badc31c908f5c981cde5d6b->leave($__internal_9719629813e8dd0d9df9a2a9b2ce7331f479ae386badc31c908f5c981cde5d6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df6e49e07f221c9a4eff867000d357af7558845b5f9721088187d3e61b6ec323 = $this->env->getExtension("native_profiler");
        $__internal_df6e49e07f221c9a4eff867000d357af7558845b5f9721088187d3e61b6ec323->enter($__internal_df6e49e07f221c9a4eff867000d357af7558845b5f9721088187d3e61b6ec323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df6e49e07f221c9a4eff867000d357af7558845b5f9721088187d3e61b6ec323->leave($__internal_df6e49e07f221c9a4eff867000d357af7558845b5f9721088187d3e61b6ec323_prof);

    }

    // line 21
    public function block_documentready($context, array $blocks = array())
    {
        $__internal_0a248c83bbeae045b3b5c45595ed1bb4486816473c3f3b4dfe2f5ac90cb01c78 = $this->env->getExtension("native_profiler");
        $__internal_0a248c83bbeae045b3b5c45595ed1bb4486816473c3f3b4dfe2f5ac90cb01c78->enter($__internal_0a248c83bbeae045b3b5c45595ed1bb4486816473c3f3b4dfe2f5ac90cb01c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentready"));

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
        
        $__internal_0a248c83bbeae045b3b5c45595ed1bb4486816473c3f3b4dfe2f5ac90cb01c78->leave($__internal_0a248c83bbeae045b3b5c45595ed1bb4486816473c3f3b4dfe2f5ac90cb01c78_prof);

    }

    public function getTemplateName()
    {
        return ":event:new.html.twig";
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
