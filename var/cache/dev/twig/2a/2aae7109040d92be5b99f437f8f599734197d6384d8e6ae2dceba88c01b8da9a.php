<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0aee1f1d8412fa50ccf45825afbcd76028bf07e1547a5b118be28e4c1b649b47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_dc891740435e82ecf5caf5c9a4bf6cedd6181f0baa7ef641a9315c6f960506e3 = $this->env->getExtension("native_profiler");
        $__internal_dc891740435e82ecf5caf5c9a4bf6cedd6181f0baa7ef641a9315c6f960506e3->enter($__internal_dc891740435e82ecf5caf5c9a4bf6cedd6181f0baa7ef641a9315c6f960506e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc891740435e82ecf5caf5c9a4bf6cedd6181f0baa7ef641a9315c6f960506e3->leave($__internal_dc891740435e82ecf5caf5c9a4bf6cedd6181f0baa7ef641a9315c6f960506e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52eb59e6a1c8bc948cee886b99212f05d6842416dc69296e74f0861cf904f43c = $this->env->getExtension("native_profiler");
        $__internal_52eb59e6a1c8bc948cee886b99212f05d6842416dc69296e74f0861cf904f43c->enter($__internal_52eb59e6a1c8bc948cee886b99212f05d6842416dc69296e74f0861cf904f43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52eb59e6a1c8bc948cee886b99212f05d6842416dc69296e74f0861cf904f43c->leave($__internal_52eb59e6a1c8bc948cee886b99212f05d6842416dc69296e74f0861cf904f43c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e6dfc0dd687faa6f3b34baa0ae2a3bcc7a76d6afe9175c6d65554827bd37332 = $this->env->getExtension("native_profiler");
        $__internal_4e6dfc0dd687faa6f3b34baa0ae2a3bcc7a76d6afe9175c6d65554827bd37332->enter($__internal_4e6dfc0dd687faa6f3b34baa0ae2a3bcc7a76d6afe9175c6d65554827bd37332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e6dfc0dd687faa6f3b34baa0ae2a3bcc7a76d6afe9175c6d65554827bd37332->leave($__internal_4e6dfc0dd687faa6f3b34baa0ae2a3bcc7a76d6afe9175c6d65554827bd37332_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b8c67ee2b8a7cea3564ea08d7e5c7d1c1cbcc9d21abeb81d259c48afc97a948 = $this->env->getExtension("native_profiler");
        $__internal_3b8c67ee2b8a7cea3564ea08d7e5c7d1c1cbcc9d21abeb81d259c48afc97a948->enter($__internal_3b8c67ee2b8a7cea3564ea08d7e5c7d1c1cbcc9d21abeb81d259c48afc97a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b8c67ee2b8a7cea3564ea08d7e5c7d1c1cbcc9d21abeb81d259c48afc97a948->leave($__internal_3b8c67ee2b8a7cea3564ea08d7e5c7d1c1cbcc9d21abeb81d259c48afc97a948_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
