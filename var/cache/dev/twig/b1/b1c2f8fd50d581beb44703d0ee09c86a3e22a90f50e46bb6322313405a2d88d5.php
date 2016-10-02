<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_16f6e36b9e60110324be535d02ce76ed99c5f547002040e4f731ee63b2ab8e06 extends Twig_Template
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
        $__internal_4e235519ddb46eafb439d64b09646a0e050b7209488861a40935d12d6e495e68 = $this->env->getExtension("native_profiler");
        $__internal_4e235519ddb46eafb439d64b09646a0e050b7209488861a40935d12d6e495e68->enter($__internal_4e235519ddb46eafb439d64b09646a0e050b7209488861a40935d12d6e495e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4e235519ddb46eafb439d64b09646a0e050b7209488861a40935d12d6e495e68->leave($__internal_4e235519ddb46eafb439d64b09646a0e050b7209488861a40935d12d6e495e68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
