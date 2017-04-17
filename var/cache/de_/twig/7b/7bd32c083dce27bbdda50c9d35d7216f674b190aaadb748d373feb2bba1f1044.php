<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_65d02beada4105a42f1c9dc203d5b07f852175dd8e584f087aad9d8d4bc1423a extends Twig_Template
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
        $__internal_8715016660df4d04ce3d3afbe7a9ff3267ce86f9c247b4a3ae522b3e97cb29e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8715016660df4d04ce3d3afbe7a9ff3267ce86f9c247b4a3ae522b3e97cb29e2->enter($__internal_8715016660df4d04ce3d3afbe7a9ff3267ce86f9c247b4a3ae522b3e97cb29e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5a49fefa8e019e46f707d3e0a5822d25eb33577c73dfd858f3520637b536906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a49fefa8e019e46f707d3e0a5822d25eb33577c73dfd858f3520637b536906a->enter($__internal_5a49fefa8e019e46f707d3e0a5822d25eb33577c73dfd858f3520637b536906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8715016660df4d04ce3d3afbe7a9ff3267ce86f9c247b4a3ae522b3e97cb29e2->leave($__internal_8715016660df4d04ce3d3afbe7a9ff3267ce86f9c247b4a3ae522b3e97cb29e2_prof);

        
        $__internal_5a49fefa8e019e46f707d3e0a5822d25eb33577c73dfd858f3520637b536906a->leave($__internal_5a49fefa8e019e46f707d3e0a5822d25eb33577c73dfd858f3520637b536906a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
