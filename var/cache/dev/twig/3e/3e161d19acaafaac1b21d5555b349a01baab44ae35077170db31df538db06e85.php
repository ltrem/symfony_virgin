<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f6a69497dd3eb9594904b0d52548a95e74b591d69f2f2c5791cacb8d085e0f7 extends Twig_Template
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
        $__internal_05675eed2d129622f4063c7f08bd22369d93667f9159d9e63ef6b50edeafe7f7 = $this->env->getExtension("native_profiler");
        $__internal_05675eed2d129622f4063c7f08bd22369d93667f9159d9e63ef6b50edeafe7f7->enter($__internal_05675eed2d129622f4063c7f08bd22369d93667f9159d9e63ef6b50edeafe7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_05675eed2d129622f4063c7f08bd22369d93667f9159d9e63ef6b50edeafe7f7->leave($__internal_05675eed2d129622f4063c7f08bd22369d93667f9159d9e63ef6b50edeafe7f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
