<?php

/* menu.html.twig */
class __TwigTemplate_789792d220f1d0c0de896ec40757c2d733f62f74a8fef880885a5d7df54e6027 extends Twig_Template
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
        $__internal_20ee8750115aa15eb2bd5bee7761dcfa1574af47961a8085c3b1b224f75ec7cf = $this->env->getExtension("native_profiler");
        $__internal_20ee8750115aa15eb2bd5bee7761dcfa1574af47961a8085c3b1b224f75ec7cf->enter($__internal_20ee8750115aa15eb2bd5bee7761dcfa1574af47961a8085c3b1b224f75ec7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "\t\t\t\t
<div id=\"navbar\" class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">Prendre un rendez-vous</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">

\t\t  <li class=\"dropdown\">
\t\t    
\t\t   
\t\t\t    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t    \t\tMon profil <span class=\"caret\"></span>
\t\t\t\t    \t</a>

\t\t\t\t\t    <ul class=\"dropdown-menu\">
\t\t\t\t\t      <li><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mes informations personnel</a></li>
                            <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("user_profil");
            echo "\">Mes rendez-vous</a></li>
\t\t\t\t\t      <li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t      <li class=\"dropdown-header\">Connexion</li>

\t\t\t\t\t\t    ";
            // line 23
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 24
                echo "
\t\t\t\t\t\t    \t\t<li><a href=\"";
                // line 25
                echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
                echo "\">Se déconnecter</a></li>

\t\t\t\t\t\t    ";
            }
            // line 28
            echo "\t\t\t\t\t    </ul>

\t\t\t    \t";
        } else {
            // line 31
            echo "
\t\t\t    \t\t<a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
\t\t\t    \t\t\tMe connecter
\t\t\t    \t\t</a>

\t\t\t    ";
        }
        // line 37
        echo "
\t\t  </li>

    </ul>
</div><!--/.nav-collapse -->




";
        
        $__internal_20ee8750115aa15eb2bd5bee7761dcfa1574af47961a8085c3b1b224f75ec7cf->leave($__internal_20ee8750115aa15eb2bd5bee7761dcfa1574af47961a8085c3b1b224f75ec7cf_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  77 => 32,  74 => 31,  69 => 28,  63 => 25,  60 => 24,  58 => 23,  51 => 19,  47 => 18,  39 => 12,  37 => 11,  27 => 4,  22 => 1,);
    }
}
/* 				*/
/* <div id="navbar" class="collapse navbar-collapse">*/
/*     <ul class="nav navbar-nav">*/
/*         <li><a href="{{ path('event_index') }}">Prendre un rendez-vous</a></li>*/
/*     </ul>*/
/*     <ul class="nav navbar-nav navbar-right">*/
/* */
/* 		  <li class="dropdown">*/
/* 		    */
/* 		   */
/* 			    {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/* 				    		Mon profil <span class="caret"></span>*/
/* 				    	</a>*/
/* */
/* 					    <ul class="dropdown-menu">*/
/* 					      <li><a href="{{ path('fos_user_profile_show') }}">Mes informations personnel</a></li>*/
/*                             <li><a href="{{ path('user_profil') }}">Mes rendez-vous</a></li>*/
/* 					      <li role="separator" class="divider"></li>*/
/* 					      <li class="dropdown-header">Connexion</li>*/
/* */
/* 						    {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/* 						    		<li><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></li>*/
/* */
/* 						    {% endif %}*/
/* 					    </ul>*/
/* */
/* 			    	{% else %}*/
/* */
/* 			    		<a href="{{ path('fos_user_security_login') }}">*/
/* 			    			Me connecter*/
/* 			    		</a>*/
/* */
/* 			    {% endif %}*/
/* */
/* 		  </li>*/
/* */
/*     </ul>*/
/* </div><!--/.nav-collapse -->*/
/* */
/* */
/* */
/* */
/* */
