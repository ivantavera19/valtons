<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_de1f5f72e120339d190fec1b11a3597a53c62af32e76a907f28ce77092c7d32d extends Twig_Template
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
        $__internal_870474dc67cff3db4cfc16b84c3df1c130ec60d483d7313a8aedde44f111e32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870474dc67cff3db4cfc16b84c3df1c130ec60d483d7313a8aedde44f111e32d->enter($__internal_870474dc67cff3db4cfc16b84c3df1c130ec60d483d7313a8aedde44f111e32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_910877e0968adce7a368402b722e863ee93656c7f7a55fe7e011cceff4b385b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910877e0968adce7a368402b722e863ee93656c7f7a55fe7e011cceff4b385b4->enter($__internal_910877e0968adce7a368402b722e863ee93656c7f7a55fe7e011cceff4b385b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_870474dc67cff3db4cfc16b84c3df1c130ec60d483d7313a8aedde44f111e32d->leave($__internal_870474dc67cff3db4cfc16b84c3df1c130ec60d483d7313a8aedde44f111e32d_prof);

        
        $__internal_910877e0968adce7a368402b722e863ee93656c7f7a55fe7e011cceff4b385b4->leave($__internal_910877e0968adce7a368402b722e863ee93656c7f7a55fe7e011cceff4b385b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
