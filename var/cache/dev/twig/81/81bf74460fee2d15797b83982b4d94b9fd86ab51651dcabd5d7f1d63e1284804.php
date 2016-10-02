<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_b3de6b2b2bea2d096363e14e7bb90dd3445fbc8659c681fa8cbed81372b68622 extends Twig_Template
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
        $__internal_5f763d3a6d2353d8b494789f3843c8493a45fe91877870e564af61c75e0dc485 = $this->env->getExtension("native_profiler");
        $__internal_5f763d3a6d2353d8b494789f3843c8493a45fe91877870e564af61c75e0dc485->enter($__internal_5f763d3a6d2353d8b494789f3843c8493a45fe91877870e564af61c75e0dc485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5f763d3a6d2353d8b494789f3843c8493a45fe91877870e564af61c75e0dc485->leave($__internal_5f763d3a6d2353d8b494789f3843c8493a45fe91877870e564af61c75e0dc485_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
