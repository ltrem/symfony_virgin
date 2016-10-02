<?php

/* client.html.twig */
class __TwigTemplate_116ce6a30508a3076bb52bc04c68081369f0d4ff255e3274a849e76d5d0e53e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client.html.twig", 1);
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
        $__internal_2822ecfa49a2178bf522c12796c804131f6f8ea9dcba671e4218e1f299e08948 = $this->env->getExtension("native_profiler");
        $__internal_2822ecfa49a2178bf522c12796c804131f6f8ea9dcba671e4218e1f299e08948->enter($__internal_2822ecfa49a2178bf522c12796c804131f6f8ea9dcba671e4218e1f299e08948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2822ecfa49a2178bf522c12796c804131f6f8ea9dcba671e4218e1f299e08948->leave($__internal_2822ecfa49a2178bf522c12796c804131f6f8ea9dcba671e4218e1f299e08948_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03a46ea042770881ff77936c8924d9b705beb3c03c5a0c1b69b4cb82e7d0ab79 = $this->env->getExtension("native_profiler");
        $__internal_03a46ea042770881ff77936c8924d9b705beb3c03c5a0c1b69b4cb82e7d0ab79->enter($__internal_03a46ea042770881ff77936c8924d9b705beb3c03c5a0c1b69b4cb82e7d0ab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Page client</h1>

    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a></p>

";
        
        $__internal_03a46ea042770881ff77936c8924d9b705beb3c03c5a0c1b69b4cb82e7d0ab79->leave($__internal_03a46ea042770881ff77936c8924d9b705beb3c03c5a0c1b69b4cb82e7d0ab79_prof);

    }

    public function getTemplateName()
    {
        return "client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Page client</h1>*/
/* */
/*     <p><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></p>*/
/* */
/* {% endblock %}*/
