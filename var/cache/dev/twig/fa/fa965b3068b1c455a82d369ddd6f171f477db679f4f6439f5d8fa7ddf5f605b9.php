<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c922372cf2c66048b680107e2c944472d11bdb86318e3329408d68b13f618234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e44d6b7f5b118245900b7ffe848701b37ed91a0a751cd616bbab3f77c3adf85e = $this->env->getExtension("native_profiler");
        $__internal_e44d6b7f5b118245900b7ffe848701b37ed91a0a751cd616bbab3f77c3adf85e->enter($__internal_e44d6b7f5b118245900b7ffe848701b37ed91a0a751cd616bbab3f77c3adf85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e44d6b7f5b118245900b7ffe848701b37ed91a0a751cd616bbab3f77c3adf85e->leave($__internal_e44d6b7f5b118245900b7ffe848701b37ed91a0a751cd616bbab3f77c3adf85e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
