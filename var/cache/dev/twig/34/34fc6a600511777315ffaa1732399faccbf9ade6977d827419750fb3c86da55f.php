<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7b9d7fb4a1ae3a618252a65979306ad7d4fdc147b1c964eb7d95da18043ec315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93a85b2167a9aa55783af3bafc188ffb4f8591680ac0914299de297fee4f167e = $this->env->getExtension("native_profiler");
        $__internal_93a85b2167a9aa55783af3bafc188ffb4f8591680ac0914299de297fee4f167e->enter($__internal_93a85b2167a9aa55783af3bafc188ffb4f8591680ac0914299de297fee4f167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a85b2167a9aa55783af3bafc188ffb4f8591680ac0914299de297fee4f167e->leave($__internal_93a85b2167a9aa55783af3bafc188ffb4f8591680ac0914299de297fee4f167e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92d8ae7324cd7898b7f3cde8762f038b09f0c0c7a65ddfe10530eab4364968fe = $this->env->getExtension("native_profiler");
        $__internal_92d8ae7324cd7898b7f3cde8762f038b09f0c0c7a65ddfe10530eab4364968fe->enter($__internal_92d8ae7324cd7898b7f3cde8762f038b09f0c0c7a65ddfe10530eab4364968fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 10
        echo "

\t    <div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-xs-6\">
\t\t\t      <div class=\"well\">
\t\t\t\t\t<form class=\"form-signin\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Email address\"  />
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t    <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\" />
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t    <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t    <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t</form>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-xs-6\">
\t\t\t      <p class=\"lead\"><span class=\"text-success\">Enregistrez-vous</span></p>
\t\t\t      <ul class=\"list-unstyled\" style=\"line-height: 2\">
\t\t\t          <li><span class=\"fa fa-check text-success\"></span> Pour prendre un rendez-vous</li>
\t\t\t          ";
        // line 47
        echo "\t\t\t      </ul>
\t\t\t      <p><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-info btn-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>


\t";
        
        $__internal_92d8ae7324cd7898b7f3cde8762f038b09f0c0c7a65ddfe10530eab4364968fe->leave($__internal_92d8ae7324cd7898b7f3cde8762f038b09f0c0c7a65ddfe10530eab4364968fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  104 => 47,  93 => 34,  87 => 31,  78 => 25,  71 => 21,  67 => 20,  61 => 17,  57 => 16,  49 => 10,  43 => 8,  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* 	{% block fos_user_content %}*/
/* 		{% if error %}*/
/* 		    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 		{% endif %}*/
/* */
/* */
/* 	    <div class="col-sm-8 col-sm-offset-2">*/
/* 			<div class="row">*/
/* 			  <div class="col-xs-6">*/
/* 			      <div class="well">*/
/* 					<form class="form-signin" action="{{ path("fos_user_security_check") }}" method="post">*/
/* 					    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 					    <div class="form-group">*/
/* 						    <label for="username">{{ 'security.login.username'|trans }}</label>*/
/* 						    <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="Email address"  />*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 						    <label for="password">{{ 'security.login.password'|trans }}</label>*/
/* 						    <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Password" />*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 						    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 						    <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* 						</div>*/
/* */
/* 					    <input class="btn btn-lg btn-primary btn-block" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 					</form>*/
/* 			      </div>*/
/* 			  </div>*/
/* 			  <div class="col-xs-6">*/
/* 			      <p class="lead"><span class="text-success">Enregistrez-vous</span></p>*/
/* 			      <ul class="list-unstyled" style="line-height: 2">*/
/* 			          <li><span class="fa fa-check text-success"></span> Pour prendre un rendez-vous</li>*/
/* 			          {# <li><span class="fa fa-check text-success"></span> Shipping is always free</li>*/
/* 			          <li><span class="fa fa-check text-success"></span> Save your favorites</li>*/
/* 			          <li><span class="fa fa-check text-success"></span> Fast checkout</li>*/
/* 			          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>*/
/* 			          <li><span class="fa fa-check text-success"></span>Holiday discounts up to 30% off</li> #}*/
/* 			      </ul>*/
/* 			      <p><a href="{{ path("fos_user_registration_register") }}" class="btn btn-info btn-block">{{ 'registration.submit'|trans }}</a></p>*/
/* 			  </div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* */
/* 	{% endblock fos_user_content %}*/
/* */
