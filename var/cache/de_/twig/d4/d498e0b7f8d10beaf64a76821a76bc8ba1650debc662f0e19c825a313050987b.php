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
        $__internal_5ae70fa21e809547e84a019a91df6de10d167b34951e594d70c61923f8023574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae70fa21e809547e84a019a91df6de10d167b34951e594d70c61923f8023574->enter($__internal_5ae70fa21e809547e84a019a91df6de10d167b34951e594d70c61923f8023574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0b423039d762a35afadfc39ea20c76d5d1036135633f6a7919a7e33b723c17f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b423039d762a35afadfc39ea20c76d5d1036135633f6a7919a7e33b723c17f0->enter($__internal_0b423039d762a35afadfc39ea20c76d5d1036135633f6a7919a7e33b723c17f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae70fa21e809547e84a019a91df6de10d167b34951e594d70c61923f8023574->leave($__internal_5ae70fa21e809547e84a019a91df6de10d167b34951e594d70c61923f8023574_prof);

        
        $__internal_0b423039d762a35afadfc39ea20c76d5d1036135633f6a7919a7e33b723c17f0->leave($__internal_0b423039d762a35afadfc39ea20c76d5d1036135633f6a7919a7e33b723c17f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_963721047b5bb5a6e9f9c3b058687167d0d64197f81c81ca0572b2ece5c6a6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963721047b5bb5a6e9f9c3b058687167d0d64197f81c81ca0572b2ece5c6a6d4->enter($__internal_963721047b5bb5a6e9f9c3b058687167d0d64197f81c81ca0572b2ece5c6a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_474a52c353bab5486c0a5d40607f3f33abbae5c925e973c56e64db6d1ccf8fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474a52c353bab5486c0a5d40607f3f33abbae5c925e973c56e64db6d1ccf8fe7->enter($__internal_474a52c353bab5486c0a5d40607f3f33abbae5c925e973c56e64db6d1ccf8fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_474a52c353bab5486c0a5d40607f3f33abbae5c925e973c56e64db6d1ccf8fe7->leave($__internal_474a52c353bab5486c0a5d40607f3f33abbae5c925e973c56e64db6d1ccf8fe7_prof);

        
        $__internal_963721047b5bb5a6e9f9c3b058687167d0d64197f81c81ca0572b2ece5c6a6d4->leave($__internal_963721047b5bb5a6e9f9c3b058687167d0d64197f81c81ca0572b2ece5c6a6d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_958cf34ddb35792a195be3db14666fd759dc3391d50772e4913b06c9bbd724cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958cf34ddb35792a195be3db14666fd759dc3391d50772e4913b06c9bbd724cb->enter($__internal_958cf34ddb35792a195be3db14666fd759dc3391d50772e4913b06c9bbd724cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cffe415544719b78ac8cb3ea22b883b660e78e9ba634addeb2fb22f751dc9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cffe415544719b78ac8cb3ea22b883b660e78e9ba634addeb2fb22f751dc9f0->enter($__internal_7cffe415544719b78ac8cb3ea22b883b660e78e9ba634addeb2fb22f751dc9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cffe415544719b78ac8cb3ea22b883b660e78e9ba634addeb2fb22f751dc9f0->leave($__internal_7cffe415544719b78ac8cb3ea22b883b660e78e9ba634addeb2fb22f751dc9f0_prof);

        
        $__internal_958cf34ddb35792a195be3db14666fd759dc3391d50772e4913b06c9bbd724cb->leave($__internal_958cf34ddb35792a195be3db14666fd759dc3391d50772e4913b06c9bbd724cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8a248f205b300ad75a984a713987038875d9e1384b32c05a7848917d5908840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a248f205b300ad75a984a713987038875d9e1384b32c05a7848917d5908840->enter($__internal_c8a248f205b300ad75a984a713987038875d9e1384b32c05a7848917d5908840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3138a6908bfd18425016f82a14acb953e037079f7a31bf03dfd022b3b3f1b9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3138a6908bfd18425016f82a14acb953e037079f7a31bf03dfd022b3b3f1b9af->enter($__internal_3138a6908bfd18425016f82a14acb953e037079f7a31bf03dfd022b3b3f1b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3138a6908bfd18425016f82a14acb953e037079f7a31bf03dfd022b3b3f1b9af->leave($__internal_3138a6908bfd18425016f82a14acb953e037079f7a31bf03dfd022b3b3f1b9af_prof);

        
        $__internal_c8a248f205b300ad75a984a713987038875d9e1384b32c05a7848917d5908840->leave($__internal_c8a248f205b300ad75a984a713987038875d9e1384b32c05a7848917d5908840_prof);

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
