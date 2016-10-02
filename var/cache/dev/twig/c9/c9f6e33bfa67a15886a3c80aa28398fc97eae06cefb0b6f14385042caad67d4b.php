<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e09235827b1ab23e09938abcf538d6dd341bc8402e4efe8b0229b2d85dc43e65 extends Twig_Template
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
        $__internal_a8b8f52aa948620c804fc58104ed0c7edef107f21673091d3b9ce84ad8fd4e2f = $this->env->getExtension("native_profiler");
        $__internal_a8b8f52aa948620c804fc58104ed0c7edef107f21673091d3b9ce84ad8fd4e2f->enter($__internal_a8b8f52aa948620c804fc58104ed0c7edef107f21673091d3b9ce84ad8fd4e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a8b8f52aa948620c804fc58104ed0c7edef107f21673091d3b9ce84ad8fd4e2f->leave($__internal_a8b8f52aa948620c804fc58104ed0c7edef107f21673091d3b9ce84ad8fd4e2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
