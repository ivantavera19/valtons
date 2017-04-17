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
        $__internal_ca3599abd94b249374710e6ed2869a1345a7e2ef266eb4c3376e664ab566248e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3599abd94b249374710e6ed2869a1345a7e2ef266eb4c3376e664ab566248e->enter($__internal_ca3599abd94b249374710e6ed2869a1345a7e2ef266eb4c3376e664ab566248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dc0d010312eef2918e44d1a59540c469580372fa7f6f680e4a9778eb61295711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0d010312eef2918e44d1a59540c469580372fa7f6f680e4a9778eb61295711->enter($__internal_dc0d010312eef2918e44d1a59540c469580372fa7f6f680e4a9778eb61295711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca3599abd94b249374710e6ed2869a1345a7e2ef266eb4c3376e664ab566248e->leave($__internal_ca3599abd94b249374710e6ed2869a1345a7e2ef266eb4c3376e664ab566248e_prof);

        
        $__internal_dc0d010312eef2918e44d1a59540c469580372fa7f6f680e4a9778eb61295711->leave($__internal_dc0d010312eef2918e44d1a59540c469580372fa7f6f680e4a9778eb61295711_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd4d21301767aff26d1f78add198a4f8166a07e4cb5a244f26ed382c23f225c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4d21301767aff26d1f78add198a4f8166a07e4cb5a244f26ed382c23f225c8->enter($__internal_dd4d21301767aff26d1f78add198a4f8166a07e4cb5a244f26ed382c23f225c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d948bf5736887a1504a1441502d71fb7166a54974674f94f40240758b65caa21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d948bf5736887a1504a1441502d71fb7166a54974674f94f40240758b65caa21->enter($__internal_d948bf5736887a1504a1441502d71fb7166a54974674f94f40240758b65caa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d948bf5736887a1504a1441502d71fb7166a54974674f94f40240758b65caa21->leave($__internal_d948bf5736887a1504a1441502d71fb7166a54974674f94f40240758b65caa21_prof);

        
        $__internal_dd4d21301767aff26d1f78add198a4f8166a07e4cb5a244f26ed382c23f225c8->leave($__internal_dd4d21301767aff26d1f78add198a4f8166a07e4cb5a244f26ed382c23f225c8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc3160abe19939fc4a5fe880ef4dd2a5111a611cd71d819b9b76db9abe28a6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3160abe19939fc4a5fe880ef4dd2a5111a611cd71d819b9b76db9abe28a6ea->enter($__internal_fc3160abe19939fc4a5fe880ef4dd2a5111a611cd71d819b9b76db9abe28a6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c43bfeb7668a94f98676e182973842082059fe52b32135676fa35a418e20b86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43bfeb7668a94f98676e182973842082059fe52b32135676fa35a418e20b86b->enter($__internal_c43bfeb7668a94f98676e182973842082059fe52b32135676fa35a418e20b86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c43bfeb7668a94f98676e182973842082059fe52b32135676fa35a418e20b86b->leave($__internal_c43bfeb7668a94f98676e182973842082059fe52b32135676fa35a418e20b86b_prof);

        
        $__internal_fc3160abe19939fc4a5fe880ef4dd2a5111a611cd71d819b9b76db9abe28a6ea->leave($__internal_fc3160abe19939fc4a5fe880ef4dd2a5111a611cd71d819b9b76db9abe28a6ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3590dd67ff2681bd23085fb3b1727f05c8a8532a4f01b970a2e1eb6559d85c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3590dd67ff2681bd23085fb3b1727f05c8a8532a4f01b970a2e1eb6559d85c8f->enter($__internal_3590dd67ff2681bd23085fb3b1727f05c8a8532a4f01b970a2e1eb6559d85c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8e7bcef7214cab9e80b5bac954a58d5fd4838ad2b547c7edcd9a8ffc15318ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7bcef7214cab9e80b5bac954a58d5fd4838ad2b547c7edcd9a8ffc15318ecb->enter($__internal_8e7bcef7214cab9e80b5bac954a58d5fd4838ad2b547c7edcd9a8ffc15318ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8e7bcef7214cab9e80b5bac954a58d5fd4838ad2b547c7edcd9a8ffc15318ecb->leave($__internal_8e7bcef7214cab9e80b5bac954a58d5fd4838ad2b547c7edcd9a8ffc15318ecb_prof);

        
        $__internal_3590dd67ff2681bd23085fb3b1727f05c8a8532a4f01b970a2e1eb6559d85c8f->leave($__internal_3590dd67ff2681bd23085fb3b1727f05c8a8532a4f01b970a2e1eb6559d85c8f_prof);

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
