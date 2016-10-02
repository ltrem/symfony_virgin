<?php

/* :todo:create.html.twig */
class __TwigTemplate_226bcbb4f11819223f08a7ddd2b8e968ae4f762d6917bbe393cac4984c0cb1ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:create.html.twig", 1);
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
        $__internal_9adcae125e51d6e1d8ae0637ae84da323217c21eb10a5fe83ef85f2b4fbe04c5 = $this->env->getExtension("native_profiler");
        $__internal_9adcae125e51d6e1d8ae0637ae84da323217c21eb10a5fe83ef85f2b4fbe04c5->enter($__internal_9adcae125e51d6e1d8ae0637ae84da323217c21eb10a5fe83ef85f2b4fbe04c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adcae125e51d6e1d8ae0637ae84da323217c21eb10a5fe83ef85f2b4fbe04c5->leave($__internal_9adcae125e51d6e1d8ae0637ae84da323217c21eb10a5fe83ef85f2b4fbe04c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_588627e556836d85ecdb28467c798e3b2ad449273efdda79eb262edceacde7eb = $this->env->getExtension("native_profiler");
        $__internal_588627e556836d85ecdb28467c798e3b2ad449273efdda79eb262edceacde7eb->enter($__internal_588627e556836d85ecdb28467c798e3b2ad449273efdda79eb262edceacde7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"page-header\">Add Todo</h2>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_588627e556836d85ecdb28467c798e3b2ad449273efdda79eb262edceacde7eb->leave($__internal_588627e556836d85ecdb28467c798e3b2ad449273efdda79eb262edceacde7eb_prof);

    }

    public function getTemplateName()
    {
        return ":todo:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h2 class="page-header">Add Todo</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock body %}*/
