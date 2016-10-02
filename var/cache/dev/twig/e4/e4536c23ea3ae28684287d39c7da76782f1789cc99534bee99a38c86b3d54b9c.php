<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_44d06b5b7ed8a5edcb8137e73001c8cd97a07c4d67866294551da2862cf53e1e extends Twig_Template
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
        $__internal_f1c8af994e772475ba052b7b0afc58b3edccb25b1bd73233c22f67bd71cd8bce = $this->env->getExtension("native_profiler");
        $__internal_f1c8af994e772475ba052b7b0afc58b3edccb25b1bd73233c22f67bd71cd8bce->enter($__internal_f1c8af994e772475ba052b7b0afc58b3edccb25b1bd73233c22f67bd71cd8bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

\t<div class=\"col-sm-10 col-sm-offset-1\">
\t\t<div class=\"row well\">
            <div class=\"col-xs-12\">
                <h3>Entrez vos informations personnel</h3>

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

            <div class=\"col-xs-12\">

                <h3>Votre profil</h3>
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

\t\t\t</div>
\t\t</div>

        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit_and_appointment", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

\t</div>

";
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f1c8af994e772475ba052b7b0afc58b3edccb25b1bd73233c22f67bd71cd8bce->leave($__internal_f1c8af994e772475ba052b7b0afc58b3edccb25b1bd73233c22f67bd71cd8bce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 119,  247 => 115,  243 => 114,  233 => 107,  229 => 106,  225 => 105,  216 => 99,  212 => 98,  208 => 97,  199 => 91,  195 => 90,  191 => 89,  182 => 83,  178 => 82,  174 => 81,  160 => 70,  156 => 69,  152 => 68,  145 => 63,  143 => 62,  139 => 60,  130 => 54,  126 => 53,  122 => 52,  113 => 46,  109 => 45,  105 => 44,  96 => 38,  92 => 37,  88 => 36,  79 => 30,  75 => 29,  71 => 28,  62 => 22,  58 => 21,  54 => 20,  45 => 14,  41 => 13,  37 => 12,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* 	<div class="col-sm-10 col-sm-offset-1">*/
/* 		<div class="row well">*/
/*             <div class="col-xs-12">*/
/*                 <h3>Entrez vos informations personnel</h3>*/
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
/* */
/*             </div>*/
/* */
/*             <div class="col-xs-12">*/
/* */
/*                 <h3>Votre profil</h3>*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.username, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                         {{ form_errors(form.username) }}*/
/*                         {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.email, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                         {{ form_errors(form.email) }}*/
/*                         {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.plainPassword.first, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                         {{ form_errors(form.plainPassword.first) }}*/
/*                         {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.plainPassword.second, null, { 'label_attr': {'class': 'control-label'}}) }}*/
/*                         {{ form_errors(form.plainPassword.second) }}*/
/*                         {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/*         {{ form_rest(form) }}*/
/*         <input class="btn btn-lg btn-primary btn-block" type="submit" id="_submit" name="_submit" value="{{ 'registration.submit_and_appointment'|trans }}" />*/
/* */
/* 	</div>*/
/* */
/* {{ form_end(form) }}*/
/* */
