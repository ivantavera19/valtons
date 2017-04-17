<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e222b9c8fa481a7b066f98d3ce949a91a2d3e9981a50775c2c9abb35a0419268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc5cdd14038d2d6267fca37c16224d117040600295f33800dfa0b4d34ff2543f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5cdd14038d2d6267fca37c16224d117040600295f33800dfa0b4d34ff2543f->enter($__internal_cc5cdd14038d2d6267fca37c16224d117040600295f33800dfa0b4d34ff2543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_428da9ae3b582b97813a341ed1d7278d42b0c77a8cedbb526474f2e3f55b47d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428da9ae3b582b97813a341ed1d7278d42b0c77a8cedbb526474f2e3f55b47d6->enter($__internal_428da9ae3b582b97813a341ed1d7278d42b0c77a8cedbb526474f2e3f55b47d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5cdd14038d2d6267fca37c16224d117040600295f33800dfa0b4d34ff2543f->leave($__internal_cc5cdd14038d2d6267fca37c16224d117040600295f33800dfa0b4d34ff2543f_prof);

        
        $__internal_428da9ae3b582b97813a341ed1d7278d42b0c77a8cedbb526474f2e3f55b47d6->leave($__internal_428da9ae3b582b97813a341ed1d7278d42b0c77a8cedbb526474f2e3f55b47d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fe59c0f811ab7f5e2fe7c6a4da7ebf0e5a5daa62b83deb12a35ff410a10b337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe59c0f811ab7f5e2fe7c6a4da7ebf0e5a5daa62b83deb12a35ff410a10b337->enter($__internal_2fe59c0f811ab7f5e2fe7c6a4da7ebf0e5a5daa62b83deb12a35ff410a10b337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d4d39400518053d54bde836692555b181d1708c8305d1e4e72e1e847a0ba2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4d39400518053d54bde836692555b181d1708c8305d1e4e72e1e847a0ba2fb->enter($__internal_1d4d39400518053d54bde836692555b181d1708c8305d1e4e72e1e847a0ba2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1d4d39400518053d54bde836692555b181d1708c8305d1e4e72e1e847a0ba2fb->leave($__internal_1d4d39400518053d54bde836692555b181d1708c8305d1e4e72e1e847a0ba2fb_prof);

        
        $__internal_2fe59c0f811ab7f5e2fe7c6a4da7ebf0e5a5daa62b83deb12a35ff410a10b337->leave($__internal_2fe59c0f811ab7f5e2fe7c6a4da7ebf0e5a5daa62b83deb12a35ff410a10b337_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
