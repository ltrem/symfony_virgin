<?php

/* employe/new.html.twig */
class __TwigTemplate_a05e703cf99879775e1b206032cc9a986c215ff4997add9b5c5c6a0e0742dd6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/new.html.twig", 1);
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
        $__internal_80e5362e78b693ecbb01e325e81b9935ae6bb453d8f22e9c88ed37d90b9957f5 = $this->env->getExtension("native_profiler");
        $__internal_80e5362e78b693ecbb01e325e81b9935ae6bb453d8f22e9c88ed37d90b9957f5->enter($__internal_80e5362e78b693ecbb01e325e81b9935ae6bb453d8f22e9c88ed37d90b9957f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e5362e78b693ecbb01e325e81b9935ae6bb453d8f22e9c88ed37d90b9957f5->leave($__internal_80e5362e78b693ecbb01e325e81b9935ae6bb453d8f22e9c88ed37d90b9957f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63f50262dcc9fef9b5e10427a76de91774048562c99c72955b898d53a0608e0d = $this->env->getExtension("native_profiler");
        $__internal_63f50262dcc9fef9b5e10427a76de91774048562c99c72955b898d53a0608e0d->enter($__internal_63f50262dcc9fef9b5e10427a76de91774048562c99c72955b898d53a0608e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_63f50262dcc9fef9b5e10427a76de91774048562c99c72955b898d53a0608e0d->leave($__internal_63f50262dcc9fef9b5e10427a76de91774048562c99c72955b898d53a0608e0d_prof);

    }

    public function getTemplateName()
    {
        return "employe/new.html.twig";
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
/*     <h1>Employe creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employe_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
