<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_685feacddf680d4bb70b688c828cc6e8da993fc084d36ec8f5f7468ff94168fb extends Twig_Template
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
        $__internal_f37db0cc31e1ce418efea47d31801dd5aa1e2c3e0a821c5f7ea0d6119ba6a5e8 = $this->env->getExtension("native_profiler");
        $__internal_f37db0cc31e1ce418efea47d31801dd5aa1e2c3e0a821c5f7ea0d6119ba6a5e8->enter($__internal_f37db0cc31e1ce418efea47d31801dd5aa1e2c3e0a821c5f7ea0d6119ba6a5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f37db0cc31e1ce418efea47d31801dd5aa1e2c3e0a821c5f7ea0d6119ba6a5e8->leave($__internal_f37db0cc31e1ce418efea47d31801dd5aa1e2c3e0a821c5f7ea0d6119ba6a5e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
