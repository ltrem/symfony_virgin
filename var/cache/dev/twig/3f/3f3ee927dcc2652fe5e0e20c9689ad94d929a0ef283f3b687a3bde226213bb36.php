<?php

/* :todo:index.html.twig */
class __TwigTemplate_0ce1b5e975520426c30f28b2fd59b69493e29504461a59f92b66a710d4bf8919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:index.html.twig", 1);
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
        $__internal_c8045fbdf6a877c011d1475549731a118a90a989b4ad42564f79cec4662d9381 = $this->env->getExtension("native_profiler");
        $__internal_c8045fbdf6a877c011d1475549731a118a90a989b4ad42564f79cec4662d9381->enter($__internal_c8045fbdf6a877c011d1475549731a118a90a989b4ad42564f79cec4662d9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8045fbdf6a877c011d1475549731a118a90a989b4ad42564f79cec4662d9381->leave($__internal_c8045fbdf6a877c011d1475549731a118a90a989b4ad42564f79cec4662d9381_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c54e81236c669fdb7ba7758c7615a077fddf51b589d44b5b67e0e6643affafac = $this->env->getExtension("native_profiler");
        $__internal_c54e81236c669fdb7ba7758c7615a077fddf51b589d44b5b67e0e6643affafac->enter($__internal_c54e81236c669fdb7ba7758c7615a077fddf51b589d44b5b67e0e6643affafac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Latest Todo</h2>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 16
            echo "            <tr>
                <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/todo/details/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                    <a href=\"/todo/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                    <a href=\"/todo/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>


    ";
        // line 31
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", ":todo:index.html.twig", 31)->display($context);
        // line 32
        echo "    
    <div id=\"fullCalModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span class=\"sr-only\">close</span></button>
                    <h4 id=\"modalTitle\" class=\"modal-title\">Hello</h4>
                </div>
                <div id=\"modalBody\" class=\"modal-body\">
                    <form id=\"createAppointmentForm\" class=\"form-horizontal\">
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"inputPatient\">Patient:</label>
                            <div class=\"controls\">
                                <input type=\"text\" name=\"patientName\" id=\"patientName\" tyle=\"margin: 0 auto;\" data-provide=\"typeahead\" data-items=\"4\" data-source=\"[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]\">
                                <input type=\"hidden\" id=\"apptStartTime\"/>
                                <input type=\"hidden\" id=\"apptEndTime\"/>
                                <input type=\"hidden\" id=\"apptAllDay\" />
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"when\">When:</label>
                            <div class=\"controls controls-row\" id=\"when\" style=\"margin-top:5px;\">
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"submitButton\">Save</button>
                </div>
            </div>
        </div>
    </div>




";
        
        $__internal_c54e81236c669fdb7ba7758c7615a077fddf51b589d44b5b67e0e6643affafac->leave($__internal_c54e81236c669fdb7ba7758c7615a077fddf51b589d44b5b67e0e6643affafac_prof);

    }

    public function getTemplateName()
    {
        return ":todo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  97 => 31,  91 => 27,  81 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Latest Todo</h2>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Todo</th>*/
/*             <th>Date</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for todo in todos %}*/
/*             <tr>*/
/*                 <th scope="row">{{ todo.id }}</th>*/
/*                 <td>{{ todo.name }}</td>*/
/*                 <td>{{ todo.dueDate|date('F j, Y, g:i a') }}</td>*/
/*                 <td>*/
/*                     <a href="/todo/details/{{ todo.id }}" class="btn btn-success">View</a>*/
/*                     <a href="/todo/edit/{{ todo.id }}" class="btn btn-default">Edit</a>*/
/*                     <a href="/todo/delete/{{ todo.id }}" class="btn btn-danger">Delete</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/*     {% include 'ADesignsCalendarBundle::calendar.html.twig' %}*/
/*     */
/*     <div id="fullCalModal" class="modal fade">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>*/
/*                     <h4 id="modalTitle" class="modal-title">Hello</h4>*/
/*                 </div>*/
/*                 <div id="modalBody" class="modal-body">*/
/*                     <form id="createAppointmentForm" class="form-horizontal">*/
/*                         <div class="control-group">*/
/*                             <label class="control-label" for="inputPatient">Patient:</label>*/
/*                             <div class="controls">*/
/*                                 <input type="text" name="patientName" id="patientName" tyle="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]">*/
/*                                 <input type="hidden" id="apptStartTime"/>*/
/*                                 <input type="hidden" id="apptEndTime"/>*/
/*                                 <input type="hidden" id="apptAllDay" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="control-group">*/
/*                             <label class="control-label" for="when">When:</label>*/
/*                             <div class="controls controls-row" id="when" style="margin-top:5px;">*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>*/
/*                     <button type="submit" class="btn btn-primary" id="submitButton">Save</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock body %}*/
