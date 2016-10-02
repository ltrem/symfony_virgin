<?php

/* :client:new.html.twig */
class __TwigTemplate_5983737d428e75943f183443dbdd6c1b0d1876c8cc323c9cf0c1426ef0882dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
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
        $__internal_f12787fc7ceaa687431b16733a582b8a745660c6486d38a16918b177351e19c8 = $this->env->getExtension("native_profiler");
        $__internal_f12787fc7ceaa687431b16733a582b8a745660c6486d38a16918b177351e19c8->enter($__internal_f12787fc7ceaa687431b16733a582b8a745660c6486d38a16918b177351e19c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12787fc7ceaa687431b16733a582b8a745660c6486d38a16918b177351e19c8->leave($__internal_f12787fc7ceaa687431b16733a582b8a745660c6486d38a16918b177351e19c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fd1dc585a66e68948cf559c0d7910ea81f6e81c7cdc31c484f2d046bb1837a = $this->env->getExtension("native_profiler");
        $__internal_d3fd1dc585a66e68948cf559c0d7910ea81f6e81c7cdc31c484f2d046bb1837a->enter($__internal_d3fd1dc585a66e68948cf559c0d7910ea81f6e81c7cdc31c484f2d046bb1837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3fd1dc585a66e68948cf559c0d7910ea81f6e81c7cdc31c484f2d046bb1837a->leave($__internal_d3fd1dc585a66e68948cf559c0d7910ea81f6e81c7cdc31c484f2d046bb1837a_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
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
