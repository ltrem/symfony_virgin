<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fefe740043e8158e03486b3d9c1136c9694d3663fc72734dd3bdd4c6a91f28f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50a5cfaff42f46520b84d374c523f44c6d1bb26325a524a29ca7b5010944c029 = $this->env->getExtension("native_profiler");
        $__internal_50a5cfaff42f46520b84d374c523f44c6d1bb26325a524a29ca7b5010944c029->enter($__internal_50a5cfaff42f46520b84d374c523f44c6d1bb26325a524a29ca7b5010944c029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_50a5cfaff42f46520b84d374c523f44c6d1bb26325a524a29ca7b5010944c029->leave($__internal_50a5cfaff42f46520b84d374c523f44c6d1bb26325a524a29ca7b5010944c029_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3deb74774583359a0e177629096c0e676d054297fe1a69b11c5934f55eab16e7 = $this->env->getExtension("native_profiler");
        $__internal_3deb74774583359a0e177629096c0e676d054297fe1a69b11c5934f55eab16e7->enter($__internal_3deb74774583359a0e177629096c0e676d054297fe1a69b11c5934f55eab16e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3deb74774583359a0e177629096c0e676d054297fe1a69b11c5934f55eab16e7->leave($__internal_3deb74774583359a0e177629096c0e676d054297fe1a69b11c5934f55eab16e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
