<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c70c507c5f2dbe04cfe593fa7f1b214f1c5c7146d7fb7fc76c111cc318968e10 extends Twig_Template
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
        $__internal_16532b256281d2a09b5433747acbde2d16e8f5030795ef28ae4d75a71bea4514 = $this->env->getExtension("native_profiler");
        $__internal_16532b256281d2a09b5433747acbde2d16e8f5030795ef28ae4d75a71bea4514->enter($__internal_16532b256281d2a09b5433747acbde2d16e8f5030795ef28ae4d75a71bea4514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    <div class=\"col-sm-10 col-sm-offset-1\">
        <div class=\"row well\">
            <div class=\"col-xs-12\">
                <div class=\"row\">
                    <h3 class=\"col-sm-12\">Entrez vos informations personnel</h3>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "firstname", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "firstname", array()), 'errors');
        echo "
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "lastname", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "lastname", array()), 'errors');
        echo "
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "address", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "address", array()), 'errors');
        echo "
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneCell", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneCell", array()), 'errors');
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneCell", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneHome", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneHome", array()), 'errors');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneHome", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneWork", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneWork", array()), 'errors');
        echo "
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "phoneWork", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "birthdate", array()), 'row');
        echo "
                            ";
        // line 62
        echo "                            ";
        // line 63
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "gender", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "gender", array()), 'errors');
        echo "
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">

                <h3 class=\"col-sm-12\">Votre profil</h3>

                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </div>

        </div>

        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

    </div>
";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_16532b256281d2a09b5433747acbde2d16e8f5030795ef28ae4d75a71bea4514->leave($__internal_16532b256281d2a09b5433747acbde2d16e8f5030795ef28ae4d75a71bea4514_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 87,  180 => 84,  172 => 79,  160 => 70,  156 => 69,  152 => 68,  145 => 63,  143 => 62,  139 => 60,  130 => 54,  126 => 53,  122 => 52,  113 => 46,  109 => 45,  105 => 44,  96 => 38,  92 => 37,  88 => 36,  79 => 30,  75 => 29,  71 => 28,  62 => 22,  58 => 21,  54 => 20,  45 => 14,  41 => 13,  37 => 12,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     <div class="col-sm-10 col-sm-offset-1">*/
/*         <div class="row well">*/
/*             <div class="col-xs-12">*/
/*                 <div class="row">*/
/*                     <h3 class="col-sm-12">Entrez vos informations personnel</h3>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.firstname, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.firstname) }}*/
/*                             {{ form_widget(form.client.firstname, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.lastname, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.lastname) }}*/
/*                             {{ form_widget(form.client.lastname, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.address, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.address) }}*/
/*                             {{ form_widget(form.client.address, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.phoneCell, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.phoneCell) }}*/
/*                             {{ form_widget(form.client.phoneCell, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.phoneHome, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.phoneHome) }}*/
/*                             {{ form_widget(form.client.phoneHome, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.phoneWork, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.phoneWork) }}*/
/*                             {{ form_widget(form.client.phoneWork, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_row(form.client.birthdate) }}*/
/*                             {#{{ form_errors(form.client.birthdate) }}#}*/
/*                             {#{{ form_widget(form.client.birthdate, { 'attr': {'class': 'form-control'} }) }}#}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.client.gender, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                             {{ form_errors(form.client.gender) }}*/
/*                             {{ form_widget(form.client.gender, { 'attr': {'class': 'form-control'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-12">*/
/* */
/*                 <h3 class="col-sm-12">Votre profil</h3>*/
/* */
/*                 {{ form_rest(form) }}*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <input class="btn btn-lg btn-primary btn-block" type="submit" id="_submit" name="_submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/* */
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
