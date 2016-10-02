<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3aa5fa1cf5ed66444a60c2650057b71cf913e64c089adc8ca1e00339a8f6bf6e extends Twig_Template
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
        $__internal_3ca55b6cebc61915f272e4ba33ebe4536df0732743bf66770d8fa00cd9653eb1 = $this->env->getExtension("native_profiler");
        $__internal_3ca55b6cebc61915f272e4ba33ebe4536df0732743bf66770d8fa00cd9653eb1->enter($__internal_3ca55b6cebc61915f272e4ba33ebe4536df0732743bf66770d8fa00cd9653eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3ca55b6cebc61915f272e4ba33ebe4536df0732743bf66770d8fa00cd9653eb1->leave($__internal_3ca55b6cebc61915f272e4ba33ebe4536df0732743bf66770d8fa00cd9653eb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
