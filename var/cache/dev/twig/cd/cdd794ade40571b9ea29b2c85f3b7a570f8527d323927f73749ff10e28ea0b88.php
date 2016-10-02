<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_71539561e9d7f9b5d37d1173db87c03e354731ca53e7e17383457d0341196727 extends Twig_Template
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
        $__internal_e07909ff02b202d6c9cf42be06244de3d1daa8204edc5c5ffdfe6c3223d1a429 = $this->env->getExtension("native_profiler");
        $__internal_e07909ff02b202d6c9cf42be06244de3d1daa8204edc5c5ffdfe6c3223d1a429->enter($__internal_e07909ff02b202d6c9cf42be06244de3d1daa8204edc5c5ffdfe6c3223d1a429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e07909ff02b202d6c9cf42be06244de3d1daa8204edc5c5ffdfe6c3223d1a429->leave($__internal_e07909ff02b202d6c9cf42be06244de3d1daa8204edc5c5ffdfe6c3223d1a429_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
