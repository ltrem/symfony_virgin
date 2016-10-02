<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c2977c1e578888ee52e019941e2569b8b1e1f029a2bc774fc63b94a0827ab7ff extends Twig_Template
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
        $__internal_b88b98987922f44de2479c2a3a69407d93c61269e4b9b52a42f0b604b6b783ff = $this->env->getExtension("native_profiler");
        $__internal_b88b98987922f44de2479c2a3a69407d93c61269e4b9b52a42f0b604b6b783ff->enter($__internal_b88b98987922f44de2479c2a3a69407d93c61269e4b9b52a42f0b604b6b783ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.firstname", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "firstname", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.lastname", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "lastname", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.address", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "address", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.phoneCell", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "phoneCell", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.phoneHome", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "phoneHome", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.phoneWork", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "phoneWork", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.birthdate", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "client", array()), "birthdate", array()), "Y-m-d"), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("general.info.gender", array(), "messages"), "html", null, true);
        echo "</label>
                    <br />
                    ";
        // line 73
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
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>Courriel</label>
                    <br />
                    ";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
                </div>
            </div>

        </div>

        <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.link", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

    </div>
</div>
";
        
        $__internal_b88b98987922f44de2479c2a3a69407d93c61269e4b9b52a42f0b604b6b783ff->leave($__internal_b88b98987922f44de2479c2a3a69407d93c61269e4b9b52a42f0b604b6b783ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 100,  169 => 94,  158 => 86,  142 => 73,  137 => 71,  128 => 65,  123 => 63,  114 => 57,  109 => 55,  100 => 49,  95 => 47,  86 => 41,  81 => 39,  72 => 33,  67 => 31,  58 => 25,  53 => 23,  44 => 17,  39 => 15,  29 => 7,  27 => 5,  25 => 4,  22 => 2,);
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
