<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f552dfa054d78a62a39392f1febcdc0bce099ec6395a39f2054e0be026bf40de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_c42538061e6161b5f15474aba9a6d0ff4a4ca63601484a5c97bb2fc12dcaf752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42538061e6161b5f15474aba9a6d0ff4a4ca63601484a5c97bb2fc12dcaf752->enter($__internal_c42538061e6161b5f15474aba9a6d0ff4a4ca63601484a5c97bb2fc12dcaf752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a609cce4f8ea7d4bc0e1fbb0f4bee0390cee3f6e29ec49727d57194ccc5f02e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a609cce4f8ea7d4bc0e1fbb0f4bee0390cee3f6e29ec49727d57194ccc5f02e4->enter($__internal_a609cce4f8ea7d4bc0e1fbb0f4bee0390cee3f6e29ec49727d57194ccc5f02e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42538061e6161b5f15474aba9a6d0ff4a4ca63601484a5c97bb2fc12dcaf752->leave($__internal_c42538061e6161b5f15474aba9a6d0ff4a4ca63601484a5c97bb2fc12dcaf752_prof);

        
        $__internal_a609cce4f8ea7d4bc0e1fbb0f4bee0390cee3f6e29ec49727d57194ccc5f02e4->leave($__internal_a609cce4f8ea7d4bc0e1fbb0f4bee0390cee3f6e29ec49727d57194ccc5f02e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7eaf135c7cb616e4a0db623f61a116c462ec866b7b1762516ffdbedd1dab80bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaf135c7cb616e4a0db623f61a116c462ec866b7b1762516ffdbedd1dab80bf->enter($__internal_7eaf135c7cb616e4a0db623f61a116c462ec866b7b1762516ffdbedd1dab80bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_392815df243ca15643ff2760756d67488f44196a15c932396012f6d3001b9a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392815df243ca15643ff2760756d67488f44196a15c932396012f6d3001b9a57->enter($__internal_392815df243ca15643ff2760756d67488f44196a15c932396012f6d3001b9a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_392815df243ca15643ff2760756d67488f44196a15c932396012f6d3001b9a57->leave($__internal_392815df243ca15643ff2760756d67488f44196a15c932396012f6d3001b9a57_prof);

        
        $__internal_7eaf135c7cb616e4a0db623f61a116c462ec866b7b1762516ffdbedd1dab80bf->leave($__internal_7eaf135c7cb616e4a0db623f61a116c462ec866b7b1762516ffdbedd1dab80bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10bb3aebc3314421e739a7cec6bc1d4ea4693c57d90790d9c21217fba1594dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bb3aebc3314421e739a7cec6bc1d4ea4693c57d90790d9c21217fba1594dd3->enter($__internal_10bb3aebc3314421e739a7cec6bc1d4ea4693c57d90790d9c21217fba1594dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_becd83d5316544b68b0e17b6f682e3b0b34392b70b6986cfcc4749a20b02241b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becd83d5316544b68b0e17b6f682e3b0b34392b70b6986cfcc4749a20b02241b->enter($__internal_becd83d5316544b68b0e17b6f682e3b0b34392b70b6986cfcc4749a20b02241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_becd83d5316544b68b0e17b6f682e3b0b34392b70b6986cfcc4749a20b02241b->leave($__internal_becd83d5316544b68b0e17b6f682e3b0b34392b70b6986cfcc4749a20b02241b_prof);

        
        $__internal_10bb3aebc3314421e739a7cec6bc1d4ea4693c57d90790d9c21217fba1594dd3->leave($__internal_10bb3aebc3314421e739a7cec6bc1d4ea4693c57d90790d9c21217fba1594dd3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6329e9fa330a5809b6ad95538000ca7a751f7593d3d3d672bcb9f125b44b82bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6329e9fa330a5809b6ad95538000ca7a751f7593d3d3d672bcb9f125b44b82bc->enter($__internal_6329e9fa330a5809b6ad95538000ca7a751f7593d3d3d672bcb9f125b44b82bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1271b3924d7091ad37c61ac3006fd80bead932d2b98948afffb82bb5854787d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1271b3924d7091ad37c61ac3006fd80bead932d2b98948afffb82bb5854787d7->enter($__internal_1271b3924d7091ad37c61ac3006fd80bead932d2b98948afffb82bb5854787d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1271b3924d7091ad37c61ac3006fd80bead932d2b98948afffb82bb5854787d7->leave($__internal_1271b3924d7091ad37c61ac3006fd80bead932d2b98948afffb82bb5854787d7_prof);

        
        $__internal_6329e9fa330a5809b6ad95538000ca7a751f7593d3d3d672bcb9f125b44b82bc->leave($__internal_6329e9fa330a5809b6ad95538000ca7a751f7593d3d3d672bcb9f125b44b82bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
