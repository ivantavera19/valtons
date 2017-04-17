<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859b6dee198036c8d552dff19236fd65f2cbb8fa693fafc01884fec96e3fbcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859b6dee198036c8d552dff19236fd65f2cbb8fa693fafc01884fec96e3fbcf1->enter($__internal_859b6dee198036c8d552dff19236fd65f2cbb8fa693fafc01884fec96e3fbcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_51fe4e62acaecd5db489ea3fd1824a2069e5871c0043d498a2f1f072d4a85139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fe4e62acaecd5db489ea3fd1824a2069e5871c0043d498a2f1f072d4a85139->enter($__internal_51fe4e62acaecd5db489ea3fd1824a2069e5871c0043d498a2f1f072d4a85139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859b6dee198036c8d552dff19236fd65f2cbb8fa693fafc01884fec96e3fbcf1->leave($__internal_859b6dee198036c8d552dff19236fd65f2cbb8fa693fafc01884fec96e3fbcf1_prof);

        
        $__internal_51fe4e62acaecd5db489ea3fd1824a2069e5871c0043d498a2f1f072d4a85139->leave($__internal_51fe4e62acaecd5db489ea3fd1824a2069e5871c0043d498a2f1f072d4a85139_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1fc2bb110535ff042533cea8ed8150dc234d8dafcdd8422c62e458ad5516158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fc2bb110535ff042533cea8ed8150dc234d8dafcdd8422c62e458ad5516158->enter($__internal_c1fc2bb110535ff042533cea8ed8150dc234d8dafcdd8422c62e458ad5516158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ed38e19213bb4a1c05e7995a2adef39f7c0ce2b737250e0985abfb59f41864e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed38e19213bb4a1c05e7995a2adef39f7c0ce2b737250e0985abfb59f41864e->enter($__internal_2ed38e19213bb4a1c05e7995a2adef39f7c0ce2b737250e0985abfb59f41864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2ed38e19213bb4a1c05e7995a2adef39f7c0ce2b737250e0985abfb59f41864e->leave($__internal_2ed38e19213bb4a1c05e7995a2adef39f7c0ce2b737250e0985abfb59f41864e_prof);

        
        $__internal_c1fc2bb110535ff042533cea8ed8150dc234d8dafcdd8422c62e458ad5516158->leave($__internal_c1fc2bb110535ff042533cea8ed8150dc234d8dafcdd8422c62e458ad5516158_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e6607479b7f6242148c545f7d1fe3ce6e0434d5227c8afd2dfb8cc3a7ab4559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6607479b7f6242148c545f7d1fe3ce6e0434d5227c8afd2dfb8cc3a7ab4559->enter($__internal_5e6607479b7f6242148c545f7d1fe3ce6e0434d5227c8afd2dfb8cc3a7ab4559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68ea0ca95c8b1d60c230844d09afd4c682b7066dea7847e3e1fa6d5c7efa270e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ea0ca95c8b1d60c230844d09afd4c682b7066dea7847e3e1fa6d5c7efa270e->enter($__internal_68ea0ca95c8b1d60c230844d09afd4c682b7066dea7847e3e1fa6d5c7efa270e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_68ea0ca95c8b1d60c230844d09afd4c682b7066dea7847e3e1fa6d5c7efa270e->leave($__internal_68ea0ca95c8b1d60c230844d09afd4c682b7066dea7847e3e1fa6d5c7efa270e_prof);

        
        $__internal_5e6607479b7f6242148c545f7d1fe3ce6e0434d5227c8afd2dfb8cc3a7ab4559->leave($__internal_5e6607479b7f6242148c545f7d1fe3ce6e0434d5227c8afd2dfb8cc3a7ab4559_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4f0914a5100e7dee808cdd3ad4e7e6e777b3963bc97d144f1687fa72ff65388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f0914a5100e7dee808cdd3ad4e7e6e777b3963bc97d144f1687fa72ff65388->enter($__internal_b4f0914a5100e7dee808cdd3ad4e7e6e777b3963bc97d144f1687fa72ff65388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4bb7f3aa9bd5384e9cfbe44d1b1e0c9781e596d4ba62c323205154648c2912e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb7f3aa9bd5384e9cfbe44d1b1e0c9781e596d4ba62c323205154648c2912e3->enter($__internal_4bb7f3aa9bd5384e9cfbe44d1b1e0c9781e596d4ba62c323205154648c2912e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4bb7f3aa9bd5384e9cfbe44d1b1e0c9781e596d4ba62c323205154648c2912e3->leave($__internal_4bb7f3aa9bd5384e9cfbe44d1b1e0c9781e596d4ba62c323205154648c2912e3_prof);

        
        $__internal_b4f0914a5100e7dee808cdd3ad4e7e6e777b3963bc97d144f1687fa72ff65388->leave($__internal_b4f0914a5100e7dee808cdd3ad4e7e6e777b3963bc97d144f1687fa72ff65388_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
