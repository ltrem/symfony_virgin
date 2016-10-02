<?php

/* :event:show.html.twig */
class __TwigTemplate_ed9de17aed9ba8da34f825e2f257140023649cc81474d5fe3e78bb950a7dba92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":event:show.html.twig", 1);
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
        $__internal_4d500da7c707274a54137f9e6dc521240b88f740acee1e286c01862b4f11265f = $this->env->getExtension("native_profiler");
        $__internal_4d500da7c707274a54137f9e6dc521240b88f740acee1e286c01862b4f11265f->enter($__internal_4d500da7c707274a54137f9e6dc521240b88f740acee1e286c01862b4f11265f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d500da7c707274a54137f9e6dc521240b88f740acee1e286c01862b4f11265f->leave($__internal_4d500da7c707274a54137f9e6dc521240b88f740acee1e286c01862b4f11265f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_751dc5c7660a92c4e02f3fc2c45688eb6a2d5585e7104be30ccf5b4472fb8995 = $this->env->getExtension("native_profiler");
        $__internal_751dc5c7660a92c4e02f3fc2c45688eb6a2d5585e7104be30ccf5b4472fb8995->enter($__internal_751dc5c7660a92c4e02f3fc2c45688eb6a2d5585e7104be30ccf5b4472fb8995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>StartTime</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startTime", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EndTime</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endTime", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>
                    <ul>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_751dc5c7660a92c4e02f3fc2c45688eb6a2d5585e7104be30ccf5b4472fb8995->leave($__internal_751dc5c7660a92c4e02f3fc2c45688eb6a2d5585e7104be30ccf5b4472fb8995_prof);

    }

    public function getTemplateName()
    {
        return ":event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  113 => 45,  107 => 42,  101 => 39,  91 => 31,  82 => 29,  78 => 28,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ event.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ event.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>StartTime</th>*/
/*                 <td>{{ event.startTime|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>EndTime</th>*/
/*                 <td>{{ event.endTime|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Category</th>*/
/*                 <td>*/
/*                     <ul>*/
/*                         {% for category in event.categories %}*/
/*                             <li>{{ category.name }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('event_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('event_edit', { 'id': event.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
