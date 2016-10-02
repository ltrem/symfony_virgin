<?php

/* client/index.html.twig */
class __TwigTemplate_13635a195a3e93d20093dcc9748c574490b31dc750ad360daeec17b2a0f30772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd470d63f5580dd3055eee0d38235c98ec5d5aadebee8e4042464d4c43520775 = $this->env->getExtension("native_profiler");
        $__internal_bd470d63f5580dd3055eee0d38235c98ec5d5aadebee8e4042464d4c43520775->enter($__internal_bd470d63f5580dd3055eee0d38235c98ec5d5aadebee8e4042464d4c43520775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd470d63f5580dd3055eee0d38235c98ec5d5aadebee8e4042464d4c43520775->leave($__internal_bd470d63f5580dd3055eee0d38235c98ec5d5aadebee8e4042464d4c43520775_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bedb1bc0a39615c77e705fd6ffedaf995b08a4ecde18839c6aa66ddc8dc019c = $this->env->getExtension("native_profiler");
        $__internal_9bedb1bc0a39615c77e705fd6ffedaf995b08a4ecde18839c6aa66ddc8dc019c->enter($__internal_9bedb1bc0a39615c77e705fd6ffedaf995b08a4ecde18839c6aa66ddc8dc019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Phonecell</th>
                <th>Phonehome</th>
                <th>Phonework</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phoneCell", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phoneHome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phoneWork", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "birthdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "gender", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9bedb1bc0a39615c77e705fd6ffedaf995b08a4ecde18839c6aa66ddc8dc019c->leave($__internal_9bedb1bc0a39615c77e705fd6ffedaf995b08a4ecde18839c6aa66ddc8dc019c_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 51,  127 => 46,  115 => 40,  109 => 37,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Address</th>*/
/*                 <th>Phonecell</th>*/
/*                 <th>Phonehome</th>*/
/*                 <th>Phonework</th>*/
/*                 <th>Birthdate</th>*/
/*                 <th>Gender</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for client in clients %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('client_show', { 'id': client.id }) }}">{{ client.id }}</a></td>*/
/*                 <td>{{ client.firstname }}</td>*/
/*                 <td>{{ client.lastname }}</td>*/
/*                 <td>{{ client.address }}</td>*/
/*                 <td>{{ client.phoneCell }}</td>*/
/*                 <td>{{ client.phoneHome }}</td>*/
/*                 <td>{{ client.phoneWork }}</td>*/
/*                 <td>{{ client.birthdate|date('Y-m-d') }}</td>*/
/*                 <td>{{ client.gender }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('client_show', { 'id': client.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('client_edit', { 'id': client.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
