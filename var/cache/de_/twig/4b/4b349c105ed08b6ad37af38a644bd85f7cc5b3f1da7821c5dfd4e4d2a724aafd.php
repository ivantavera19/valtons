<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_01fed0029900e44b2838fb67e2d9354201c506726aa420fb8cab8ade03165235 extends Twig_Template
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
        $__internal_2c592cafd37e013520070be2b0a5a8081c7a99d871f4e2d44e0b4586b73826a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c592cafd37e013520070be2b0a5a8081c7a99d871f4e2d44e0b4586b73826a5->enter($__internal_2c592cafd37e013520070be2b0a5a8081c7a99d871f4e2d44e0b4586b73826a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_db05037324ecabc97cf54097ac888b213380591af95eb5a3abb8eb1519a3d344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db05037324ecabc97cf54097ac888b213380591af95eb5a3abb8eb1519a3d344->enter($__internal_db05037324ecabc97cf54097ac888b213380591af95eb5a3abb8eb1519a3d344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2c592cafd37e013520070be2b0a5a8081c7a99d871f4e2d44e0b4586b73826a5->leave($__internal_2c592cafd37e013520070be2b0a5a8081c7a99d871f4e2d44e0b4586b73826a5_prof);

        
        $__internal_db05037324ecabc97cf54097ac888b213380591af95eb5a3abb8eb1519a3d344->leave($__internal_db05037324ecabc97cf54097ac888b213380591af95eb5a3abb8eb1519a3d344_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
