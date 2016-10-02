<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_925a6bf5187eb8ad6fa193b2d4c827266e5e9578bb0f38aeb878e7b17af50d4e extends Twig_Template
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
        $__internal_e0eb66841ebd26b1e28709ef4fc49ea89463e3c56d4a3205cf69bbc5d4aa9c16 = $this->env->getExtension("native_profiler");
        $__internal_e0eb66841ebd26b1e28709ef4fc49ea89463e3c56d4a3205cf69bbc5d4aa9c16->enter($__internal_e0eb66841ebd26b1e28709ef4fc49ea89463e3c56d4a3205cf69bbc5d4aa9c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e0eb66841ebd26b1e28709ef4fc49ea89463e3c56d4a3205cf69bbc5d4aa9c16->leave($__internal_e0eb66841ebd26b1e28709ef4fc49ea89463e3c56d4a3205cf69bbc5d4aa9c16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
