<?php

/* :employe:new.html.twig */
class __TwigTemplate_8e5099bf5f9bce2a96542162450bde2d83820e8887471d4acf4e15a872a22b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":employe:new.html.twig", 1);
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
        $__internal_eb5d18fadc1b516384ff8b5f93fca5f6320af4b51c186667472da4f5e9a4f238 = $this->env->getExtension("native_profiler");
        $__internal_eb5d18fadc1b516384ff8b5f93fca5f6320af4b51c186667472da4f5e9a4f238->enter($__internal_eb5d18fadc1b516384ff8b5f93fca5f6320af4b51c186667472da4f5e9a4f238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":employe:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5d18fadc1b516384ff8b5f93fca5f6320af4b51c186667472da4f5e9a4f238->leave($__internal_eb5d18fadc1b516384ff8b5f93fca5f6320af4b51c186667472da4f5e9a4f238_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcf7af60d629376ddb4c40b2b7f50009a5d742791876b5fea888521554a42acc = $this->env->getExtension("native_profiler");
        $__internal_bcf7af60d629376ddb4c40b2b7f50009a5d742791876b5fea888521554a42acc->enter($__internal_bcf7af60d629376ddb4c40b2b7f50009a5d742791876b5fea888521554a42acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bcf7af60d629376ddb4c40b2b7f50009a5d742791876b5fea888521554a42acc->leave($__internal_bcf7af60d629376ddb4c40b2b7f50009a5d742791876b5fea888521554a42acc_prof);

    }

    public function getTemplateName()
    {
        return ":employe:new.html.twig";
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
