<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f1e4d17b93ca42725d8cdfc38edd4c8e5bc914730d73ca9475f41087510ddbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e4d17b93ca42725d8cdfc38edd4c8e5bc914730d73ca9475f41087510ddbc9->enter($__internal_f1e4d17b93ca42725d8cdfc38edd4c8e5bc914730d73ca9475f41087510ddbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_440a54e95ad6bd7663bc46530e3f0db8a01d89bc7977c51dd9276a37ade3a55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440a54e95ad6bd7663bc46530e3f0db8a01d89bc7977c51dd9276a37ade3a55e->enter($__internal_440a54e95ad6bd7663bc46530e3f0db8a01d89bc7977c51dd9276a37ade3a55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e4d17b93ca42725d8cdfc38edd4c8e5bc914730d73ca9475f41087510ddbc9->leave($__internal_f1e4d17b93ca42725d8cdfc38edd4c8e5bc914730d73ca9475f41087510ddbc9_prof);

        
        $__internal_440a54e95ad6bd7663bc46530e3f0db8a01d89bc7977c51dd9276a37ade3a55e->leave($__internal_440a54e95ad6bd7663bc46530e3f0db8a01d89bc7977c51dd9276a37ade3a55e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3cbe29b4d65009dcaebaa148d73f75ee2bf539565d0283f58ddc2208b8e47cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cbe29b4d65009dcaebaa148d73f75ee2bf539565d0283f58ddc2208b8e47cd->enter($__internal_a3cbe29b4d65009dcaebaa148d73f75ee2bf539565d0283f58ddc2208b8e47cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb2ef5a8c26c5e21a0d3aa468ffe1890558b5dc29f12a1205d84d558013c843e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2ef5a8c26c5e21a0d3aa468ffe1890558b5dc29f12a1205d84d558013c843e->enter($__internal_eb2ef5a8c26c5e21a0d3aa468ffe1890558b5dc29f12a1205d84d558013c843e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb2ef5a8c26c5e21a0d3aa468ffe1890558b5dc29f12a1205d84d558013c843e->leave($__internal_eb2ef5a8c26c5e21a0d3aa468ffe1890558b5dc29f12a1205d84d558013c843e_prof);

        
        $__internal_a3cbe29b4d65009dcaebaa148d73f75ee2bf539565d0283f58ddc2208b8e47cd->leave($__internal_a3cbe29b4d65009dcaebaa148d73f75ee2bf539565d0283f58ddc2208b8e47cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff9f8543f3fe51c42d38bd228da441f8af496f0e09a1f5df57ae798c8005b4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9f8543f3fe51c42d38bd228da441f8af496f0e09a1f5df57ae798c8005b4ed->enter($__internal_ff9f8543f3fe51c42d38bd228da441f8af496f0e09a1f5df57ae798c8005b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7347f72d0e5a74483be83092373281b66748d33d048b7f9ee27ac17b0f839588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7347f72d0e5a74483be83092373281b66748d33d048b7f9ee27ac17b0f839588->enter($__internal_7347f72d0e5a74483be83092373281b66748d33d048b7f9ee27ac17b0f839588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7347f72d0e5a74483be83092373281b66748d33d048b7f9ee27ac17b0f839588->leave($__internal_7347f72d0e5a74483be83092373281b66748d33d048b7f9ee27ac17b0f839588_prof);

        
        $__internal_ff9f8543f3fe51c42d38bd228da441f8af496f0e09a1f5df57ae798c8005b4ed->leave($__internal_ff9f8543f3fe51c42d38bd228da441f8af496f0e09a1f5df57ae798c8005b4ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7cab46c673fedc3c6cba91c2b1dfff8a4e89fb6679a2363117bc6b3ba927841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cab46c673fedc3c6cba91c2b1dfff8a4e89fb6679a2363117bc6b3ba927841->enter($__internal_e7cab46c673fedc3c6cba91c2b1dfff8a4e89fb6679a2363117bc6b3ba927841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5318c98044d477a9841c89426574ed2d370daad1dd45c5e2fc38a2deb3fb3381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5318c98044d477a9841c89426574ed2d370daad1dd45c5e2fc38a2deb3fb3381->enter($__internal_5318c98044d477a9841c89426574ed2d370daad1dd45c5e2fc38a2deb3fb3381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5318c98044d477a9841c89426574ed2d370daad1dd45c5e2fc38a2deb3fb3381->leave($__internal_5318c98044d477a9841c89426574ed2d370daad1dd45c5e2fc38a2deb3fb3381_prof);

        
        $__internal_e7cab46c673fedc3c6cba91c2b1dfff8a4e89fb6679a2363117bc6b3ba927841->leave($__internal_e7cab46c673fedc3c6cba91c2b1dfff8a4e89fb6679a2363117bc6b3ba927841_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
