<?php

/* client/show.html.twig */
class __TwigTemplate_88d2a1ee2a54391b4eac7227e7deae5944b7cc35086ca9362777f6e35cc20a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_1163cc2d0c0570988f628c7640bba4a9cd14933cbd962ebdd8065151a4d3e8c3 = $this->env->getExtension("native_profiler");
        $__internal_1163cc2d0c0570988f628c7640bba4a9cd14933cbd962ebdd8065151a4d3e8c3->enter($__internal_1163cc2d0c0570988f628c7640bba4a9cd14933cbd962ebdd8065151a4d3e8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1163cc2d0c0570988f628c7640bba4a9cd14933cbd962ebdd8065151a4d3e8c3->leave($__internal_1163cc2d0c0570988f628c7640bba4a9cd14933cbd962ebdd8065151a4d3e8c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_626565ad9e72a9578c07842df421b656de2bd3f35e9876a2157c7557e03b07a7 = $this->env->getExtension("native_profiler");
        $__internal_626565ad9e72a9578c07842df421b656de2bd3f35e9876a2157c7557e03b07a7->enter($__internal_626565ad9e72a9578c07842df421b656de2bd3f35e9876a2157c7557e03b07a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonecell</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phoneCell", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonehome</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phoneHome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonework</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phoneWork", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "birthdate", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "gender", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_626565ad9e72a9578c07842df421b656de2bd3f35e9876a2157c7557e03b07a7->leave($__internal_626565ad9e72a9578c07842df421b656de2bd3f35e9876a2157c7557e03b07a7_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 57,  126 => 55,  120 => 52,  114 => 49,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ client.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ client.firstname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ client.lastname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Address</th>*/
/*                 <td>{{ client.address }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonecell</th>*/
/*                 <td>{{ client.phoneCell }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonehome</th>*/
/*                 <td>{{ client.phoneHome }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonework</th>*/
/*                 <td>{{ client.phoneWork }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Birthdate</th>*/
/*                 <td>{{ client.birthdate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Gender</th>*/
/*                 <td>{{ client.gender }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('client_edit', { 'id': client.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
