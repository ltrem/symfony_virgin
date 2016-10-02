<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_998f1740875fa843727af5b1a23d25b901e06bff2331340e9c7ae425db0839bf extends Twig_Template
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
        $__internal_f30e49df518ec27cdf8ba30c4c382e87af9a9d07175a760031f23ed36b9c8bac = $this->env->getExtension("native_profiler");
        $__internal_f30e49df518ec27cdf8ba30c4c382e87af9a9d07175a760031f23ed36b9c8bac->enter($__internal_f30e49df518ec27cdf8ba30c4c382e87af9a9d07175a760031f23ed36b9c8bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f30e49df518ec27cdf8ba30c4c382e87af9a9d07175a760031f23ed36b9c8bac->leave($__internal_f30e49df518ec27cdf8ba30c4c382e87af9a9d07175a760031f23ed36b9c8bac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
