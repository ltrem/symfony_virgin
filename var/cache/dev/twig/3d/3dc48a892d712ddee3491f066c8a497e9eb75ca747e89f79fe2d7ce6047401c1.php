<?php

/* :employe:edit.html.twig */
class __TwigTemplate_471c56d51b01b3773c5c72f5769d32b48a3d685213f5e5b6d7eccbd2d1c0f2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":employe:edit.html.twig", 1);
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
        $__internal_923665f6143f71200a700b51e0e83a2e859e661c76c71d8bb61177458203a5bb = $this->env->getExtension("native_profiler");
        $__internal_923665f6143f71200a700b51e0e83a2e859e661c76c71d8bb61177458203a5bb->enter($__internal_923665f6143f71200a700b51e0e83a2e859e661c76c71d8bb61177458203a5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":employe:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923665f6143f71200a700b51e0e83a2e859e661c76c71d8bb61177458203a5bb->leave($__internal_923665f6143f71200a700b51e0e83a2e859e661c76c71d8bb61177458203a5bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d0a7713a978e0acfe9ac3e75e469711ccafa97941e54fb5d2783a1094c4e0c2 = $this->env->getExtension("native_profiler");
        $__internal_6d0a7713a978e0acfe9ac3e75e469711ccafa97941e54fb5d2783a1094c4e0c2->enter($__internal_6d0a7713a978e0acfe9ac3e75e469711ccafa97941e54fb5d2783a1094c4e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6d0a7713a978e0acfe9ac3e75e469711ccafa97941e54fb5d2783a1094c4e0c2->leave($__internal_6d0a7713a978e0acfe9ac3e75e469711ccafa97941e54fb5d2783a1094c4e0c2_prof);

    }

    public function getTemplateName()
    {
        return ":employe:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employe edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employe_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
