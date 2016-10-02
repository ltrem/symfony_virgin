<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_16a09fe47a313fad0ac5e748a1d1e2536e8521e2ae02f6de8923e2ee46c46113 extends Twig_Template
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
        $__internal_dc4841a18057a308aba430769df6915d723ad852bd3d38f692eb22bd764abecf = $this->env->getExtension("native_profiler");
        $__internal_dc4841a18057a308aba430769df6915d723ad852bd3d38f692eb22bd764abecf->enter($__internal_dc4841a18057a308aba430769df6915d723ad852bd3d38f692eb22bd764abecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dc4841a18057a308aba430769df6915d723ad852bd3d38f692eb22bd764abecf->leave($__internal_dc4841a18057a308aba430769df6915d723ad852bd3d38f692eb22bd764abecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
