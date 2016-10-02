<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_21c4a6ec0b26560faae10d4721c38e19cc5d99245bdc14d82e5cd90346a6fb1f extends Twig_Template
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
        $__internal_1cf975a446752f809defc4d424638b050bb856cd77dd015ef8200bd2f4c14cdb = $this->env->getExtension("native_profiler");
        $__internal_1cf975a446752f809defc4d424638b050bb856cd77dd015ef8200bd2f4c14cdb->enter($__internal_1cf975a446752f809defc4d424638b050bb856cd77dd015ef8200bd2f4c14cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1cf975a446752f809defc4d424638b050bb856cd77dd015ef8200bd2f4c14cdb->leave($__internal_1cf975a446752f809defc4d424638b050bb856cd77dd015ef8200bd2f4c14cdb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
