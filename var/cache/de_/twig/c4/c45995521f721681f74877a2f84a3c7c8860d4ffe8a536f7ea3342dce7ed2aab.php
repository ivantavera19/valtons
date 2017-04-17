<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_637ea6d981c4efa12ff6c816857c78892404fdbcde9751d62d5407c67d7d4a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_416b1bdba654bbed572d9e370138656170734177d828eab93eaf0e684715b62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416b1bdba654bbed572d9e370138656170734177d828eab93eaf0e684715b62a->enter($__internal_416b1bdba654bbed572d9e370138656170734177d828eab93eaf0e684715b62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f073374b224c5b4c73bc0f7f71ceccf10c3a22b8fbbba29845f0ab65c3a38300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f073374b224c5b4c73bc0f7f71ceccf10c3a22b8fbbba29845f0ab65c3a38300->enter($__internal_f073374b224c5b4c73bc0f7f71ceccf10c3a22b8fbbba29845f0ab65c3a38300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_416b1bdba654bbed572d9e370138656170734177d828eab93eaf0e684715b62a->leave($__internal_416b1bdba654bbed572d9e370138656170734177d828eab93eaf0e684715b62a_prof);

        
        $__internal_f073374b224c5b4c73bc0f7f71ceccf10c3a22b8fbbba29845f0ab65c3a38300->leave($__internal_f073374b224c5b4c73bc0f7f71ceccf10c3a22b8fbbba29845f0ab65c3a38300_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_762b0507712a890d5ea7a5528c8c4f36c634e6467c819986b8f2f4dd33fe9b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762b0507712a890d5ea7a5528c8c4f36c634e6467c819986b8f2f4dd33fe9b47->enter($__internal_762b0507712a890d5ea7a5528c8c4f36c634e6467c819986b8f2f4dd33fe9b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39a82c0d4a7c89c76704e0d86f7990ca5c82734de6fe39d858931f10364dcadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a82c0d4a7c89c76704e0d86f7990ca5c82734de6fe39d858931f10364dcadd->enter($__internal_39a82c0d4a7c89c76704e0d86f7990ca5c82734de6fe39d858931f10364dcadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39a82c0d4a7c89c76704e0d86f7990ca5c82734de6fe39d858931f10364dcadd->leave($__internal_39a82c0d4a7c89c76704e0d86f7990ca5c82734de6fe39d858931f10364dcadd_prof);

        
        $__internal_762b0507712a890d5ea7a5528c8c4f36c634e6467c819986b8f2f4dd33fe9b47->leave($__internal_762b0507712a890d5ea7a5528c8c4f36c634e6467c819986b8f2f4dd33fe9b47_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
