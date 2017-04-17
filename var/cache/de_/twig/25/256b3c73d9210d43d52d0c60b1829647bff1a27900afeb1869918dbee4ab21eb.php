<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_8cd87cc108af78b82b09a2908c6e9fd84dab4aed436fdaa81b1e9fa3b7fcb838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4954387b643ec632e7fcbffd36bd9ea7e0424322d6461485d69075f278b89ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4954387b643ec632e7fcbffd36bd9ea7e0424322d6461485d69075f278b89ce->enter($__internal_d4954387b643ec632e7fcbffd36bd9ea7e0424322d6461485d69075f278b89ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_e9fd2d139f9cc5eb30895737d89aafe3519f886cbd195bdb59e539fe1ec92859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fd2d139f9cc5eb30895737d89aafe3519f886cbd195bdb59e539fe1ec92859->enter($__internal_e9fd2d139f9cc5eb30895737d89aafe3519f886cbd195bdb59e539fe1ec92859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4954387b643ec632e7fcbffd36bd9ea7e0424322d6461485d69075f278b89ce->leave($__internal_d4954387b643ec632e7fcbffd36bd9ea7e0424322d6461485d69075f278b89ce_prof);

        
        $__internal_e9fd2d139f9cc5eb30895737d89aafe3519f886cbd195bdb59e539fe1ec92859->leave($__internal_e9fd2d139f9cc5eb30895737d89aafe3519f886cbd195bdb59e539fe1ec92859_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e04bae1edb13b114837e2744218fe64717107385fe5d52f8bdba2ff565fc8572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04bae1edb13b114837e2744218fe64717107385fe5d52f8bdba2ff565fc8572->enter($__internal_e04bae1edb13b114837e2744218fe64717107385fe5d52f8bdba2ff565fc8572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f91a08bb4518a2ba8ef005a4919b2977eb9b7a2199a10a482f8b35b8db0770e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f91a08bb4518a2ba8ef005a4919b2977eb9b7a2199a10a482f8b35b8db0770e->enter($__internal_7f91a08bb4518a2ba8ef005a4919b2977eb9b7a2199a10a482f8b35b8db0770e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7f91a08bb4518a2ba8ef005a4919b2977eb9b7a2199a10a482f8b35b8db0770e->leave($__internal_7f91a08bb4518a2ba8ef005a4919b2977eb9b7a2199a10a482f8b35b8db0770e_prof);

        
        $__internal_e04bae1edb13b114837e2744218fe64717107385fe5d52f8bdba2ff565fc8572->leave($__internal_e04bae1edb13b114837e2744218fe64717107385fe5d52f8bdba2ff565fc8572_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
