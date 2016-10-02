<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2c6e0d4540e6f2725da45874da6c97ad105791b80e2c23d17a547f991b21340e extends Twig_Template
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
        $__internal_1e8407761c7234b9f690863015aad0789ca8184b46c7377d1608905b776351d2 = $this->env->getExtension("native_profiler");
        $__internal_1e8407761c7234b9f690863015aad0789ca8184b46c7377d1608905b776351d2->enter($__internal_1e8407761c7234b9f690863015aad0789ca8184b46c7377d1608905b776351d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1e8407761c7234b9f690863015aad0789ca8184b46c7377d1608905b776351d2->leave($__internal_1e8407761c7234b9f690863015aad0789ca8184b46c7377d1608905b776351d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
