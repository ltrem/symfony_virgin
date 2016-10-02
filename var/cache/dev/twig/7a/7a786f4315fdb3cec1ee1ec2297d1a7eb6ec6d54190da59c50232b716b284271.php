<?php

/* client/new.html.twig */
class __TwigTemplate_27356aa4663adb5579f482eecf123612c40f0b2316c0c8207c54aff5f48d8e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a7a3e66cef8c93da2a2744fc9a344edaf47725e4bbf08f977bfa81bfcaab619 = $this->env->getExtension("native_profiler");
        $__internal_1a7a3e66cef8c93da2a2744fc9a344edaf47725e4bbf08f977bfa81bfcaab619->enter($__internal_1a7a3e66cef8c93da2a2744fc9a344edaf47725e4bbf08f977bfa81bfcaab619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7a3e66cef8c93da2a2744fc9a344edaf47725e4bbf08f977bfa81bfcaab619->leave($__internal_1a7a3e66cef8c93da2a2744fc9a344edaf47725e4bbf08f977bfa81bfcaab619_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66dc9254e7e6885610730429f919cffcd227e20050770720c3045cc23379ee4d = $this->env->getExtension("native_profiler");
        $__internal_66dc9254e7e6885610730429f919cffcd227e20050770720c3045cc23379ee4d->enter($__internal_66dc9254e7e6885610730429f919cffcd227e20050770720c3045cc23379ee4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_66dc9254e7e6885610730429f919cffcd227e20050770720c3045cc23379ee4d->leave($__internal_66dc9254e7e6885610730429f919cffcd227e20050770720c3045cc23379ee4d_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
