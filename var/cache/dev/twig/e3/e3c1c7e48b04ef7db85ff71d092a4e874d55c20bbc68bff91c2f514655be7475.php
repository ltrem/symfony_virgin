<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c35c275ae33f871390d7a6bd632de9f8e03e24f11d3cb3aed2b8ce49158f3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_df18e8bf29443ee759e336e93bf2e85778757c3ccea40639993b269ff28ca429 = $this->env->getExtension("native_profiler");
        $__internal_df18e8bf29443ee759e336e93bf2e85778757c3ccea40639993b269ff28ca429->enter($__internal_df18e8bf29443ee759e336e93bf2e85778757c3ccea40639993b269ff28ca429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df18e8bf29443ee759e336e93bf2e85778757c3ccea40639993b269ff28ca429->leave($__internal_df18e8bf29443ee759e336e93bf2e85778757c3ccea40639993b269ff28ca429_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29e7d3e05013324e954ac402551be82cfd307fdc1a5b0aee771bee97b9edf7d4 = $this->env->getExtension("native_profiler");
        $__internal_29e7d3e05013324e954ac402551be82cfd307fdc1a5b0aee771bee97b9edf7d4->enter($__internal_29e7d3e05013324e954ac402551be82cfd307fdc1a5b0aee771bee97b9edf7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29e7d3e05013324e954ac402551be82cfd307fdc1a5b0aee771bee97b9edf7d4->leave($__internal_29e7d3e05013324e954ac402551be82cfd307fdc1a5b0aee771bee97b9edf7d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad3ea3517483d77260cfccadfc9680f4a3b23020a8a5cf01c790b561d68052b3 = $this->env->getExtension("native_profiler");
        $__internal_ad3ea3517483d77260cfccadfc9680f4a3b23020a8a5cf01c790b561d68052b3->enter($__internal_ad3ea3517483d77260cfccadfc9680f4a3b23020a8a5cf01c790b561d68052b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad3ea3517483d77260cfccadfc9680f4a3b23020a8a5cf01c790b561d68052b3->leave($__internal_ad3ea3517483d77260cfccadfc9680f4a3b23020a8a5cf01c790b561d68052b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_884093f3da9230b6d7fe9d9ffdf8bdc1a4dc16c2e2addae137cdafe1db01199e = $this->env->getExtension("native_profiler");
        $__internal_884093f3da9230b6d7fe9d9ffdf8bdc1a4dc16c2e2addae137cdafe1db01199e->enter($__internal_884093f3da9230b6d7fe9d9ffdf8bdc1a4dc16c2e2addae137cdafe1db01199e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_884093f3da9230b6d7fe9d9ffdf8bdc1a4dc16c2e2addae137cdafe1db01199e->leave($__internal_884093f3da9230b6d7fe9d9ffdf8bdc1a4dc16c2e2addae137cdafe1db01199e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
