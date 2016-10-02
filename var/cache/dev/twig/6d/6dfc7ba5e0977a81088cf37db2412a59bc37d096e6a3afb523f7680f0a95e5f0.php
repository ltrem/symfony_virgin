<?php

/* :employe:show.html.twig */
class __TwigTemplate_a0619bcf4216d9dd8b5932f8cae10d3f98daa9edc326eec1aa2ee00a89371464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":employe:show.html.twig", 1);
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
        $__internal_c54e7425f9bb8c79c4c3860060c5ea6760ac1529b5c86e6b51e138976ae731d0 = $this->env->getExtension("native_profiler");
        $__internal_c54e7425f9bb8c79c4c3860060c5ea6760ac1529b5c86e6b51e138976ae731d0->enter($__internal_c54e7425f9bb8c79c4c3860060c5ea6760ac1529b5c86e6b51e138976ae731d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":employe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c54e7425f9bb8c79c4c3860060c5ea6760ac1529b5c86e6b51e138976ae731d0->leave($__internal_c54e7425f9bb8c79c4c3860060c5ea6760ac1529b5c86e6b51e138976ae731d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_038bf4e0e1080b5b3646ac6aa06f4ce03535aee16755ab9297a452b4f275d84d = $this->env->getExtension("native_profiler");
        $__internal_038bf4e0e1080b5b3646ac6aa06f4ce03535aee16755ab9297a452b4f275d84d->enter($__internal_038bf4e0e1080b5b3646ac6aa06f4ce03535aee16755ab9297a452b4f275d84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonecell</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "phoneCell", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonehome</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "phoneHome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonework</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "phoneWork", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "birthdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "birthdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "gender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_edit", array("id" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_038bf4e0e1080b5b3646ac6aa06f4ce03535aee16755ab9297a452b4f275d84d->leave($__internal_038bf4e0e1080b5b3646ac6aa06f4ce03535aee16755ab9297a452b4f275d84d_prof);

    }

    public function getTemplateName()
    {
        return ":employe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  146 => 63,  140 => 60,  134 => 57,  122 => 50,  113 => 46,  106 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employe</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ employe.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ employe.firstname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ employe.lastname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Address</th>*/
/*                 <td>{{ employe.address }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonecell</th>*/
/*                 <td>{{ employe.phoneCell }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonehome</th>*/
/*                 <td>{{ employe.phoneHome }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonework</th>*/
/*                 <td>{{ employe.phoneWork }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Birthdate</th>*/
/*                 <td>{% if employe.birthdate %}{{ employe.birthdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Gender</th>*/
/*                 <td>{{ employe.gender }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createdat</th>*/
/*                 <td>{% if employe.createdAt %}{{ employe.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{% if employe.updatedAt %}{{ employe.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employe_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('employe_edit', { 'id': employe.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
