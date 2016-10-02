<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c2ea4fbccd55ec763e40073fad9173bdb2a3d3486ea1c8142a6f2fce4880bcec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85e1f85835d13f17eb9dc1c00718793daa56b389562e74d54fe5ef024d0dff30 = $this->env->getExtension("native_profiler");
        $__internal_85e1f85835d13f17eb9dc1c00718793daa56b389562e74d54fe5ef024d0dff30->enter($__internal_85e1f85835d13f17eb9dc1c00718793daa56b389562e74d54fe5ef024d0dff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e1f85835d13f17eb9dc1c00718793daa56b389562e74d54fe5ef024d0dff30->leave($__internal_85e1f85835d13f17eb9dc1c00718793daa56b389562e74d54fe5ef024d0dff30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7623728bf09e55293a5fb873c5aea0c22ea631b3637830f4e0de9b19708f0dc = $this->env->getExtension("native_profiler");
        $__internal_d7623728bf09e55293a5fb873c5aea0c22ea631b3637830f4e0de9b19708f0dc->enter($__internal_d7623728bf09e55293a5fb873c5aea0c22ea631b3637830f4e0de9b19708f0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d7623728bf09e55293a5fb873c5aea0c22ea631b3637830f4e0de9b19708f0dc->leave($__internal_d7623728bf09e55293a5fb873c5aea0c22ea631b3637830f4e0de9b19708f0dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2f566b0440c05b37e36b988acac021fbe0c9898a55af2fc9964587bc8751a70 = $this->env->getExtension("native_profiler");
        $__internal_d2f566b0440c05b37e36b988acac021fbe0c9898a55af2fc9964587bc8751a70->enter($__internal_d2f566b0440c05b37e36b988acac021fbe0c9898a55af2fc9964587bc8751a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d2f566b0440c05b37e36b988acac021fbe0c9898a55af2fc9964587bc8751a70->leave($__internal_d2f566b0440c05b37e36b988acac021fbe0c9898a55af2fc9964587bc8751a70_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01d98f75a85ec0b3786249aa17f8ff7fbaeb085ad6d9f0f28fbc96ebaf009e83 = $this->env->getExtension("native_profiler");
        $__internal_01d98f75a85ec0b3786249aa17f8ff7fbaeb085ad6d9f0f28fbc96ebaf009e83->enter($__internal_01d98f75a85ec0b3786249aa17f8ff7fbaeb085ad6d9f0f28fbc96ebaf009e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_01d98f75a85ec0b3786249aa17f8ff7fbaeb085ad6d9f0f28fbc96ebaf009e83->leave($__internal_01d98f75a85ec0b3786249aa17f8ff7fbaeb085ad6d9f0f28fbc96ebaf009e83_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
