<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fd43c6564980443072a892d087ebb765d2dd8ea5efff9575c380daf465fd917e extends Twig_Template
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
        $__internal_cb5998ef13430cecdf7c42e4d1ef4df71c0f18db2c4bf6c21e04827f2253fde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5998ef13430cecdf7c42e4d1ef4df71c0f18db2c4bf6c21e04827f2253fde2->enter($__internal_cb5998ef13430cecdf7c42e4d1ef4df71c0f18db2c4bf6c21e04827f2253fde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6d3d7a1c0e9b8e8c3aff23cbfc3118cf8bccd6fbbfe4d1af5fa6e3412cda9269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3d7a1c0e9b8e8c3aff23cbfc3118cf8bccd6fbbfe4d1af5fa6e3412cda9269->enter($__internal_6d3d7a1c0e9b8e8c3aff23cbfc3118cf8bccd6fbbfe4d1af5fa6e3412cda9269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cb5998ef13430cecdf7c42e4d1ef4df71c0f18db2c4bf6c21e04827f2253fde2->leave($__internal_cb5998ef13430cecdf7c42e4d1ef4df71c0f18db2c4bf6c21e04827f2253fde2_prof);

        
        $__internal_6d3d7a1c0e9b8e8c3aff23cbfc3118cf8bccd6fbbfe4d1af5fa6e3412cda9269->leave($__internal_6d3d7a1c0e9b8e8c3aff23cbfc3118cf8bccd6fbbfe4d1af5fa6e3412cda9269_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
