<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d370601f18c1104b345761afc86626081917556ae5625030af626f98e06013d0 extends Twig_Template
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
        $__internal_950d7a32c744ba75d98c8ea96ab91f709e0dd554777f334eb9a59f789e01e63a = $this->env->getExtension("native_profiler");
        $__internal_950d7a32c744ba75d98c8ea96ab91f709e0dd554777f334eb9a59f789e01e63a->enter($__internal_950d7a32c744ba75d98c8ea96ab91f709e0dd554777f334eb9a59f789e01e63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_950d7a32c744ba75d98c8ea96ab91f709e0dd554777f334eb9a59f789e01e63a->leave($__internal_950d7a32c744ba75d98c8ea96ab91f709e0dd554777f334eb9a59f789e01e63a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
