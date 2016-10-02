<?php

/* admin.html.twig */
class __TwigTemplate_538848b254e7afd0833187af71c3314f96b2e56f46333e153f6ba9f889320c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
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
        $__internal_1e04996ae0c4de5879cbc41542c48e844d1dc1898c2c98ab4c385ee6d992abbb = $this->env->getExtension("native_profiler");
        $__internal_1e04996ae0c4de5879cbc41542c48e844d1dc1898c2c98ab4c385ee6d992abbb->enter($__internal_1e04996ae0c4de5879cbc41542c48e844d1dc1898c2c98ab4c385ee6d992abbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e04996ae0c4de5879cbc41542c48e844d1dc1898c2c98ab4c385ee6d992abbb->leave($__internal_1e04996ae0c4de5879cbc41542c48e844d1dc1898c2c98ab4c385ee6d992abbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8fb6d1f9ade21046c1c1715303d73540b8dc9e6e01b8a9c6fbed35b1c9b56dc = $this->env->getExtension("native_profiler");
        $__internal_e8fb6d1f9ade21046c1c1715303d73540b8dc9e6e01b8a9c6fbed35b1c9b56dc->enter($__internal_e8fb6d1f9ade21046c1c1715303d73540b8dc9e6e01b8a9c6fbed35b1c9b56dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Page administrateur</h1>

    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a></p>

";
        
        $__internal_e8fb6d1f9ade21046c1c1715303d73540b8dc9e6e01b8a9c6fbed35b1c9b56dc->leave($__internal_e8fb6d1f9ade21046c1c1715303d73540b8dc9e6e01b8a9c6fbed35b1c9b56dc_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
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
/*     <h1>Page administrateur</h1>*/
/* */
/*     <p><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></p>*/
/* */
/* {% endblock %}*/
