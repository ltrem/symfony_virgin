<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_19385cb6914cf8a10f078a9a0de805f2c10ce39bae65baee5038b82093e6577d extends Twig_Template
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
        $__internal_69edfe02bfcb1aca7a1ee3e883ef2cc99ffe2c23d3a1f9b90827c26baed6bb0b = $this->env->getExtension("native_profiler");
        $__internal_69edfe02bfcb1aca7a1ee3e883ef2cc99ffe2c23d3a1f9b90827c26baed6bb0b->enter($__internal_69edfe02bfcb1aca7a1ee3e883ef2cc99ffe2c23d3a1f9b90827c26baed6bb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_69edfe02bfcb1aca7a1ee3e883ef2cc99ffe2c23d3a1f9b90827c26baed6bb0b->leave($__internal_69edfe02bfcb1aca7a1ee3e883ef2cc99ffe2c23d3a1f9b90827c26baed6bb0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
