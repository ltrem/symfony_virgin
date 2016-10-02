<?php

/* event/show.html.twig */
class __TwigTemplate_524936af3f994eb99fbc10eb5bff69f4a1914984e0c241340fb5317a85c7af9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/show.html.twig", 1);
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
        $__internal_cbe1096d3e10c10f1e4cd05a9eb4c7bd892b9f701e26b39b6e86b787ffd3de3e = $this->env->getExtension("native_profiler");
        $__internal_cbe1096d3e10c10f1e4cd05a9eb4c7bd892b9f701e26b39b6e86b787ffd3de3e->enter($__internal_cbe1096d3e10c10f1e4cd05a9eb4c7bd892b9f701e26b39b6e86b787ffd3de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe1096d3e10c10f1e4cd05a9eb4c7bd892b9f701e26b39b6e86b787ffd3de3e->leave($__internal_cbe1096d3e10c10f1e4cd05a9eb4c7bd892b9f701e26b39b6e86b787ffd3de3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dfb1707f2c0b01f17bcc6c3f8b55ce743c68dc6cc5adeb573e56a0323d39a6b = $this->env->getExtension("native_profiler");
        $__internal_3dfb1707f2c0b01f17bcc6c3f8b55ce743c68dc6cc5adeb573e56a0323d39a6b->enter($__internal_3dfb1707f2c0b01f17bcc6c3f8b55ce743c68dc6cc5adeb573e56a0323d39a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3dfb1707f2c0b01f17bcc6c3f8b55ce743c68dc6cc5adeb573e56a0323d39a6b->leave($__internal_3dfb1707f2c0b01f17bcc6c3f8b55ce743c68dc6cc5adeb573e56a0323d39a6b_prof);

    }

    public function getTemplateName()
    {
        return "event/show.html.twig";
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
