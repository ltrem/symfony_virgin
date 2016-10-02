<?php

/* ::admin.html.twig */
class __TwigTemplate_32cba91eac4f1758716290f6c29adfe2ebe12bd269a4a2c5a44c136d23ec9abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::admin.html.twig", 1);
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
        $__internal_10cd6fdb6e145fb465b55907897570d1caec4d12d1d89797559aa4132929852e = $this->env->getExtension("native_profiler");
        $__internal_10cd6fdb6e145fb465b55907897570d1caec4d12d1d89797559aa4132929852e->enter($__internal_10cd6fdb6e145fb465b55907897570d1caec4d12d1d89797559aa4132929852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10cd6fdb6e145fb465b55907897570d1caec4d12d1d89797559aa4132929852e->leave($__internal_10cd6fdb6e145fb465b55907897570d1caec4d12d1d89797559aa4132929852e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7158f6e3d27575e47c5e89e0b231d7ec2198a951a21110b4d96a866d9724638d = $this->env->getExtension("native_profiler");
        $__internal_7158f6e3d27575e47c5e89e0b231d7ec2198a951a21110b4d96a866d9724638d->enter($__internal_7158f6e3d27575e47c5e89e0b231d7ec2198a951a21110b4d96a866d9724638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Page administrateur</h1>

    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a></p>

";
        
        $__internal_7158f6e3d27575e47c5e89e0b231d7ec2198a951a21110b4d96a866d9724638d->leave($__internal_7158f6e3d27575e47c5e89e0b231d7ec2198a951a21110b4d96a866d9724638d_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
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
