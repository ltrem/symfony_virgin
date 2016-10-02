<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b8e1f6994f111fe8170ca314b313e567dcd700914779a0a84da7707abf375439 extends Twig_Template
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
        $__internal_95085217b7f9fc62903af2f429509580c5283e15253feb0530845a37ac58221b = $this->env->getExtension("native_profiler");
        $__internal_95085217b7f9fc62903af2f429509580c5283e15253feb0530845a37ac58221b->enter($__internal_95085217b7f9fc62903af2f429509580c5283e15253feb0530845a37ac58221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_95085217b7f9fc62903af2f429509580c5283e15253feb0530845a37ac58221b->leave($__internal_95085217b7f9fc62903af2f429509580c5283e15253feb0530845a37ac58221b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
