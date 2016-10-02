<?php

/* :employe:index.html.twig */
class __TwigTemplate_894b165919399f67c0faaa0fd9949cd72967d6d9b37a59eaaed4a64da3dd46cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":employe:index.html.twig", 1);
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
        $__internal_380205496975df8aa421d98bf158bc422837b464a58b5d01bb4c80eb0352b3ac = $this->env->getExtension("native_profiler");
        $__internal_380205496975df8aa421d98bf158bc422837b464a58b5d01bb4c80eb0352b3ac->enter($__internal_380205496975df8aa421d98bf158bc422837b464a58b5d01bb4c80eb0352b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":employe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380205496975df8aa421d98bf158bc422837b464a58b5d01bb4c80eb0352b3ac->leave($__internal_380205496975df8aa421d98bf158bc422837b464a58b5d01bb4c80eb0352b3ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6304c69327a2a4594ef341da9027963646f26fd6c05123f34bddf54c27b8c88 = $this->env->getExtension("native_profiler");
        $__internal_b6304c69327a2a4594ef341da9027963646f26fd6c05123f34bddf54c27b8c88->enter($__internal_b6304c69327a2a4594ef341da9027963646f26fd6c05123f34bddf54c27b8c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe list</h1>

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
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) ? $context["employes"] : $this->getContext($context, "employes")));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_show", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "phoneCell", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "phoneHome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "phoneWork", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["employe"], "birthdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["employe"], "birthdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "gender", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["employe"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["employe"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["employe"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["employe"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_show", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_edit", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("employe_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b6304c69327a2a4594ef341da9027963646f26fd6c05123f34bddf54c27b8c88->leave($__internal_b6304c69327a2a4594ef341da9027963646f26fd6c05123f34bddf54c27b8c88_prof);

    }

    public function getTemplateName()
    {
        return ":employe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  142 => 49,  130 => 43,  124 => 40,  115 => 36,  109 => 35,  105 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employe list</h1>*/
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
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employe in employes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('employe_show', { 'id': employe.id }) }}">{{ employe.id }}</a></td>*/
/*                 <td>{{ employe.firstname }}</td>*/
/*                 <td>{{ employe.lastname }}</td>*/
/*                 <td>{{ employe.address }}</td>*/
/*                 <td>{{ employe.phoneCell }}</td>*/
/*                 <td>{{ employe.phoneHome }}</td>*/
/*                 <td>{{ employe.phoneWork }}</td>*/
/*                 <td>{% if employe.birthdate %}{{ employe.birthdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ employe.gender }}</td>*/
/*                 <td>{% if employe.createdAt %}{{ employe.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if employe.updatedAt %}{{ employe.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('employe_show', { 'id': employe.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('employe_edit', { 'id': employe.id }) }}">edit</a>*/
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
/*             <a href="{{ path('employe_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
