<?php

/* default/index.html.twig */
class __TwigTemplate_45db0d4afc198d9f9af93a414a0c9a53e8d762f35dbbd22a88d3240cd43a43f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_493ebed0407bb4953ff05ed0df74a23b7e0d20c6c5209276a14f970247b85bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493ebed0407bb4953ff05ed0df74a23b7e0d20c6c5209276a14f970247b85bd6->enter($__internal_493ebed0407bb4953ff05ed0df74a23b7e0d20c6c5209276a14f970247b85bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_eb4d3ba31835609b96a36cb3ff9754cc63dcd36f5cfc0d6fc21c780f6c519efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4d3ba31835609b96a36cb3ff9754cc63dcd36f5cfc0d6fc21c780f6c519efd->enter($__internal_eb4d3ba31835609b96a36cb3ff9754cc63dcd36f5cfc0d6fc21c780f6c519efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493ebed0407bb4953ff05ed0df74a23b7e0d20c6c5209276a14f970247b85bd6->leave($__internal_493ebed0407bb4953ff05ed0df74a23b7e0d20c6c5209276a14f970247b85bd6_prof);

        
        $__internal_eb4d3ba31835609b96a36cb3ff9754cc63dcd36f5cfc0d6fc21c780f6c519efd->leave($__internal_eb4d3ba31835609b96a36cb3ff9754cc63dcd36f5cfc0d6fc21c780f6c519efd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc46cfda5662a200681868b0e6f02d0219aaaec991046d849f13d55e71eadf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc46cfda5662a200681868b0e6f02d0219aaaec991046d849f13d55e71eadf4e->enter($__internal_dc46cfda5662a200681868b0e6f02d0219aaaec991046d849f13d55e71eadf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5207b965becc9c8d522cbc16712ba5f0293d595cf5b2867d89e547f290c164c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5207b965becc9c8d522cbc16712ba5f0293d595cf5b2867d89e547f290c164c->enter($__internal_a5207b965becc9c8d522cbc16712ba5f0293d595cf5b2867d89e547f290c164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_a5207b965becc9c8d522cbc16712ba5f0293d595cf5b2867d89e547f290c164c->leave($__internal_a5207b965becc9c8d522cbc16712ba5f0293d595cf5b2867d89e547f290c164c_prof);

        
        $__internal_dc46cfda5662a200681868b0e6f02d0219aaaec991046d849f13d55e71eadf4e->leave($__internal_dc46cfda5662a200681868b0e6f02d0219aaaec991046d849f13d55e71eadf4e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\default\\index.html.twig");
    }
}
