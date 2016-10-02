<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ed69c0c351755111c43c4b2aac2f0189e88836ee2215c305c996cdce28f96089 extends Twig_Template
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
        $__internal_3d6df49bab882c525797f98fd09e9cd14b7262dce8924794a04d5f6d85322851 = $this->env->getExtension("native_profiler");
        $__internal_3d6df49bab882c525797f98fd09e9cd14b7262dce8924794a04d5f6d85322851->enter($__internal_3d6df49bab882c525797f98fd09e9cd14b7262dce8924794a04d5f6d85322851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3d6df49bab882c525797f98fd09e9cd14b7262dce8924794a04d5f6d85322851->leave($__internal_3d6df49bab882c525797f98fd09e9cd14b7262dce8924794a04d5f6d85322851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
