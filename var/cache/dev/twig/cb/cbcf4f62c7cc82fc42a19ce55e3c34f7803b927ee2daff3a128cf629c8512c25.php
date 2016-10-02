<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8f328477e165e3421f47edfd5e7095790c91845521d79c18ddf9e952d9253f40 extends Twig_Template
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
        $__internal_00580de2008633e43382fa0a43dae6741ceb1f4f8e1b68c55e9625a3764f3636 = $this->env->getExtension("native_profiler");
        $__internal_00580de2008633e43382fa0a43dae6741ceb1f4f8e1b68c55e9625a3764f3636->enter($__internal_00580de2008633e43382fa0a43dae6741ceb1f4f8e1b68c55e9625a3764f3636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_00580de2008633e43382fa0a43dae6741ceb1f4f8e1b68c55e9625a3764f3636->leave($__internal_00580de2008633e43382fa0a43dae6741ceb1f4f8e1b68c55e9625a3764f3636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
