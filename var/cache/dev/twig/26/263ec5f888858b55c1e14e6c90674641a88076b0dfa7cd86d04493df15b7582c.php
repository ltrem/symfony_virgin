<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_13be94a9b16be68b9469d3ac4df0e539eecda0f18113373bd75a353e742ab783 extends Twig_Template
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
        $__internal_66eca463babb645ccc3d46fc763991689d2a236cbb586c21fbbcb043909c18cd = $this->env->getExtension("native_profiler");
        $__internal_66eca463babb645ccc3d46fc763991689d2a236cbb586c21fbbcb043909c18cd->enter($__internal_66eca463babb645ccc3d46fc763991689d2a236cbb586c21fbbcb043909c18cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66eca463babb645ccc3d46fc763991689d2a236cbb586c21fbbcb043909c18cd->leave($__internal_66eca463babb645ccc3d46fc763991689d2a236cbb586c21fbbcb043909c18cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
