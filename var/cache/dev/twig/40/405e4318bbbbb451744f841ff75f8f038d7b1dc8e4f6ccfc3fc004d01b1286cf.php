<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ed14f9b3fbfa0a0b6403f56665d42d94e8375c5c342b2e4ead5fae6f10cff41f extends Twig_Template
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
        $__internal_793b9dd172098c2f7aa31bb3ff0a70610ee14e531380a05d7a93194751fde2a4 = $this->env->getExtension("native_profiler");
        $__internal_793b9dd172098c2f7aa31bb3ff0a70610ee14e531380a05d7a93194751fde2a4->enter($__internal_793b9dd172098c2f7aa31bb3ff0a70610ee14e531380a05d7a93194751fde2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_793b9dd172098c2f7aa31bb3ff0a70610ee14e531380a05d7a93194751fde2a4->leave($__internal_793b9dd172098c2f7aa31bb3ff0a70610ee14e531380a05d7a93194751fde2a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
