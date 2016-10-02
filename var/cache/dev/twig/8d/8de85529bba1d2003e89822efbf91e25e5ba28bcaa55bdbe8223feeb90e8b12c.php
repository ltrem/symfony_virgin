<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b04abe2d33906018c7bb903cb26bf87d4f44e15b04469dd6cc1c32ab8f76b93a extends Twig_Template
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
        $__internal_4ebdd1b7dde8e7e16e6bbc83009c903bc9006bb1e16e224d060619a5c41c4586 = $this->env->getExtension("native_profiler");
        $__internal_4ebdd1b7dde8e7e16e6bbc83009c903bc9006bb1e16e224d060619a5c41c4586->enter($__internal_4ebdd1b7dde8e7e16e6bbc83009c903bc9006bb1e16e224d060619a5c41c4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4ebdd1b7dde8e7e16e6bbc83009c903bc9006bb1e16e224d060619a5c41c4586->leave($__internal_4ebdd1b7dde8e7e16e6bbc83009c903bc9006bb1e16e224d060619a5c41c4586_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
