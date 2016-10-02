<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2d001e640ece8ec52c28d34cbf2dd132a61b1013aafdf8b186ab794358bc426e extends Twig_Template
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
        $__internal_d3fe2618918dee7c58ab81c43e561ce2cda576087c1487de971e1dfdd9275387 = $this->env->getExtension("native_profiler");
        $__internal_d3fe2618918dee7c58ab81c43e561ce2cda576087c1487de971e1dfdd9275387->enter($__internal_d3fe2618918dee7c58ab81c43e561ce2cda576087c1487de971e1dfdd9275387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d3fe2618918dee7c58ab81c43e561ce2cda576087c1487de971e1dfdd9275387->leave($__internal_d3fe2618918dee7c58ab81c43e561ce2cda576087c1487de971e1dfdd9275387_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
