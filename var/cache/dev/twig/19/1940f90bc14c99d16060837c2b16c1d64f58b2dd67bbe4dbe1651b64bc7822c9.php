<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_729a3d595420a8f3d9fec91237b4983eade1de1cdfbd2cb1532fca54a89e1a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_078086f6f3786360326eb6433af756401c99893d7afb6f813876779bca2449c8 = $this->env->getExtension("native_profiler");
        $__internal_078086f6f3786360326eb6433af756401c99893d7afb6f813876779bca2449c8->enter($__internal_078086f6f3786360326eb6433af756401c99893d7afb6f813876779bca2449c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_078086f6f3786360326eb6433af756401c99893d7afb6f813876779bca2449c8->leave($__internal_078086f6f3786360326eb6433af756401c99893d7afb6f813876779bca2449c8_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_1aaa852caad9d1c2fd060a5804169461e829fd1f2f87da20035e8bdcece93c73 = $this->env->getExtension("native_profiler");
        $__internal_1aaa852caad9d1c2fd060a5804169461e829fd1f2f87da20035e8bdcece93c73->enter($__internal_1aaa852caad9d1c2fd060a5804169461e829fd1f2f87da20035e8bdcece93c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_1aaa852caad9d1c2fd060a5804169461e829fd1f2f87da20035e8bdcece93c73->leave($__internal_1aaa852caad9d1c2fd060a5804169461e829fd1f2f87da20035e8bdcece93c73_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
