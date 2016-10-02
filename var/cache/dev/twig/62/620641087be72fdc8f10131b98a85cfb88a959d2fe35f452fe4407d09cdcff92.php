<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_3e32340609de9a16ca0e8dd5efdd12e425df303a17d0683b2598f9db6cfd3f66 extends Twig_Template
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
        $__internal_160b2f6d8f8972c04971e72ec0635aca078e73af9695b69c762ca364d1865792 = $this->env->getExtension("native_profiler");
        $__internal_160b2f6d8f8972c04971e72ec0635aca078e73af9695b69c762ca364d1865792->enter($__internal_160b2f6d8f8972c04971e72ec0635aca078e73af9695b69c762ca364d1865792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 7
        echo "
<div class=\"col-sm-10 col-sm-offset-1\">
    <div class=\"row well\">
        <div class=\"col-xs-12\">
            <h3>Vos informations personnel</h3>

";
        // line 13
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.firstname", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "firstname", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.lastname", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "lastname", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.address", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "address", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.phoneCell", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "phoneCell", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.phoneHome", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "phoneHome", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.phoneWork", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "phoneWork", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.birthdate", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "birthdate", array()), "Y-m-d"), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.gender", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "gender", array()), "html", null, true);
        echo "
                </div>
            </div>

        </div>

        <div class=\"col-xs-12\">

            <h3>Votre profil</h3>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>Utilisateur</label>
                    <br />
                    ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>Courriel</label>
                    <br />
                    ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
                </div>
            </div>

        </div>

        <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.link", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

    </div>
</div>
";
        
        $__internal_160b2f6d8f8972c04971e72ec0635aca078e73af9695b69c762ca364d1865792->leave($__internal_160b2f6d8f8972c04971e72ec0635aca078e73af9695b69c762ca364d1865792_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 102,  174 => 96,  163 => 88,  147 => 75,  142 => 73,  133 => 67,  128 => 65,  119 => 59,  114 => 57,  105 => 51,  100 => 49,  91 => 43,  86 => 41,  77 => 35,  72 => 33,  63 => 27,  58 => 25,  49 => 19,  44 => 17,  37 => 13,  29 => 7,  27 => 5,  25 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {#<div class="fos_user_user_show">#}*/
/*     {#<p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>#}*/
/*     {#<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>#}*/
/* {#</div>#}*/
/* */
/* <div class="col-sm-10 col-sm-offset-1">*/
/*     <div class="row well">*/
/*         <div class="col-xs-12">*/
/*             <h3>Vos informations personnel</h3>*/
/* */
/* {{ dump(user) }}*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.firstname'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.firstname }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.lastname'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.lastname }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.address'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.address }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.phoneCell'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.phoneCell }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.phoneHome'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.phoneHome }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.phoneWork'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.phoneWork }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.birthdate'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.birthdate|date('Y-m-d') }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>{{ 'general.info.gender'|trans({}, 'messages') }}</label>*/
/*                     <br />*/
/*                     {{ user.client.gender }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="col-xs-12">*/
/* */
/*             <h3>Votre profil</h3>*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>Utilisateur</label>*/
/*                     <br />*/
/*                     {{ user.username }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>Courriel</label>*/
/*                     <br />*/
/*                     {{ user.email }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <a href="{{ path('fos_user_profile_edit')}}" class="btn btn-default">{{ 'profile.edit.link'|trans }}</a>*/
/* */
/*     </div>*/
/* </div>*/
/* */
