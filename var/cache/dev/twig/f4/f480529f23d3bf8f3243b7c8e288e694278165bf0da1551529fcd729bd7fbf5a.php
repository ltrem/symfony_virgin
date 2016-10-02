<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2f6249b4e1befff28321485a37afedabfcb137f71f2b26c9a74ef7b3ddabefaa extends Twig_Template
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
        $__internal_3320bac4f8862b08d0c7588287debebe40e36151e8622e70e02f72d183299a09 = $this->env->getExtension("native_profiler");
        $__internal_3320bac4f8862b08d0c7588287debebe40e36151e8622e70e02f72d183299a09->enter($__internal_3320bac4f8862b08d0c7588287debebe40e36151e8622e70e02f72d183299a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3320bac4f8862b08d0c7588287debebe40e36151e8622e70e02f72d183299a09->leave($__internal_3320bac4f8862b08d0c7588287debebe40e36151e8622e70e02f72d183299a09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
