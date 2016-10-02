<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7760b1ae0af68f426284bf210b8cd8d5f6dfc60a6610277483217b410469b5d7 extends Twig_Template
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
        $__internal_416378d8725f498a6b5ede0d24db628d748cfcc18e84f5fbe07a567751c22d65 = $this->env->getExtension("native_profiler");
        $__internal_416378d8725f498a6b5ede0d24db628d748cfcc18e84f5fbe07a567751c22d65->enter($__internal_416378d8725f498a6b5ede0d24db628d748cfcc18e84f5fbe07a567751c22d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_416378d8725f498a6b5ede0d24db628d748cfcc18e84f5fbe07a567751c22d65->leave($__internal_416378d8725f498a6b5ede0d24db628d748cfcc18e84f5fbe07a567751c22d65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
