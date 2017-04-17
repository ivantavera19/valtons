<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b193354819d96d3e2871356b6e29aff6671897e8ea34747f1c1623864bcf1b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5b616503f2ac85330aee7c331931ebacbe7496fd0ee11c6e22ff911fbf7d51a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b616503f2ac85330aee7c331931ebacbe7496fd0ee11c6e22ff911fbf7d51a3->enter($__internal_5b616503f2ac85330aee7c331931ebacbe7496fd0ee11c6e22ff911fbf7d51a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_3dd9b442d3708a7d91922ede2771c932373731c1d70ad8dc42951c1e9a466a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd9b442d3708a7d91922ede2771c932373731c1d70ad8dc42951c1e9a466a60->enter($__internal_3dd9b442d3708a7d91922ede2771c932373731c1d70ad8dc42951c1e9a466a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b616503f2ac85330aee7c331931ebacbe7496fd0ee11c6e22ff911fbf7d51a3->leave($__internal_5b616503f2ac85330aee7c331931ebacbe7496fd0ee11c6e22ff911fbf7d51a3_prof);

        
        $__internal_3dd9b442d3708a7d91922ede2771c932373731c1d70ad8dc42951c1e9a466a60->leave($__internal_3dd9b442d3708a7d91922ede2771c932373731c1d70ad8dc42951c1e9a466a60_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50faef39bcaf81177f943bf51ddb1c1db56424e1f4980d9a31aaf48313fe2bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50faef39bcaf81177f943bf51ddb1c1db56424e1f4980d9a31aaf48313fe2bb0->enter($__internal_50faef39bcaf81177f943bf51ddb1c1db56424e1f4980d9a31aaf48313fe2bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1229b6e3250f0a83f4a77a8547495dff3454fb4bdc73ebdfc72dd3de4971bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1229b6e3250f0a83f4a77a8547495dff3454fb4bdc73ebdfc72dd3de4971bdb->enter($__internal_d1229b6e3250f0a83f4a77a8547495dff3454fb4bdc73ebdfc72dd3de4971bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d1229b6e3250f0a83f4a77a8547495dff3454fb4bdc73ebdfc72dd3de4971bdb->leave($__internal_d1229b6e3250f0a83f4a77a8547495dff3454fb4bdc73ebdfc72dd3de4971bdb_prof);

        
        $__internal_50faef39bcaf81177f943bf51ddb1c1db56424e1f4980d9a31aaf48313fe2bb0->leave($__internal_50faef39bcaf81177f943bf51ddb1c1db56424e1f4980d9a31aaf48313fe2bb0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
