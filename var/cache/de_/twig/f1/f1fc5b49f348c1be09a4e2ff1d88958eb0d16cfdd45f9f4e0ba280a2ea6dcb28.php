<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd9b472061677e100d0f0a19ab190dc4b4a04a6db43ba963cd690561170a9900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0a31aef8585d16b91a5e4791996df08a82968e8c95e3af141215bdb234646fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a31aef8585d16b91a5e4791996df08a82968e8c95e3af141215bdb234646fe->enter($__internal_a0a31aef8585d16b91a5e4791996df08a82968e8c95e3af141215bdb234646fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3979448301cecb518405ac609447ea05916bb2b1c1c91744fddd75b9be4ea83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3979448301cecb518405ac609447ea05916bb2b1c1c91744fddd75b9be4ea83d->enter($__internal_3979448301cecb518405ac609447ea05916bb2b1c1c91744fddd75b9be4ea83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a31aef8585d16b91a5e4791996df08a82968e8c95e3af141215bdb234646fe->leave($__internal_a0a31aef8585d16b91a5e4791996df08a82968e8c95e3af141215bdb234646fe_prof);

        
        $__internal_3979448301cecb518405ac609447ea05916bb2b1c1c91744fddd75b9be4ea83d->leave($__internal_3979448301cecb518405ac609447ea05916bb2b1c1c91744fddd75b9be4ea83d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3e06f328240dc36816841e629d55e1b92a5e663e49fa1ba851166c084cc1edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e06f328240dc36816841e629d55e1b92a5e663e49fa1ba851166c084cc1edb->enter($__internal_a3e06f328240dc36816841e629d55e1b92a5e663e49fa1ba851166c084cc1edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acd80caadfbd425efee3272203c4bbbffb7846f8f280b6617d8e270308318613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd80caadfbd425efee3272203c4bbbffb7846f8f280b6617d8e270308318613->enter($__internal_acd80caadfbd425efee3272203c4bbbffb7846f8f280b6617d8e270308318613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_acd80caadfbd425efee3272203c4bbbffb7846f8f280b6617d8e270308318613->leave($__internal_acd80caadfbd425efee3272203c4bbbffb7846f8f280b6617d8e270308318613_prof);

        
        $__internal_a3e06f328240dc36816841e629d55e1b92a5e663e49fa1ba851166c084cc1edb->leave($__internal_a3e06f328240dc36816841e629d55e1b92a5e663e49fa1ba851166c084cc1edb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18fb90334a021b7907618ba0ce2bc515c59d0bc4db82836901eb0b414da68f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fb90334a021b7907618ba0ce2bc515c59d0bc4db82836901eb0b414da68f78->enter($__internal_18fb90334a021b7907618ba0ce2bc515c59d0bc4db82836901eb0b414da68f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b7ba2a452287e2b18e1bba795fdbe95ecbc5d95da684f0e863016a8427e6c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7ba2a452287e2b18e1bba795fdbe95ecbc5d95da684f0e863016a8427e6c17->enter($__internal_6b7ba2a452287e2b18e1bba795fdbe95ecbc5d95da684f0e863016a8427e6c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6b7ba2a452287e2b18e1bba795fdbe95ecbc5d95da684f0e863016a8427e6c17->leave($__internal_6b7ba2a452287e2b18e1bba795fdbe95ecbc5d95da684f0e863016a8427e6c17_prof);

        
        $__internal_18fb90334a021b7907618ba0ce2bc515c59d0bc4db82836901eb0b414da68f78->leave($__internal_18fb90334a021b7907618ba0ce2bc515c59d0bc4db82836901eb0b414da68f78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
