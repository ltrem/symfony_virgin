<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e6b9a5ffed9362c38056f12585c4ea2ae74fa7624917ecb804053c903305274b extends Twig_Template
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
        $__internal_286da4908e71a92a2983e1c3010fcefc1a2ebad5bd52711cedf545a3664a0834 = $this->env->getExtension("native_profiler");
        $__internal_286da4908e71a92a2983e1c3010fcefc1a2ebad5bd52711cedf545a3664a0834->enter($__internal_286da4908e71a92a2983e1c3010fcefc1a2ebad5bd52711cedf545a3664a0834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_286da4908e71a92a2983e1c3010fcefc1a2ebad5bd52711cedf545a3664a0834->leave($__internal_286da4908e71a92a2983e1c3010fcefc1a2ebad5bd52711cedf545a3664a0834_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
