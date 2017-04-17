<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b9b25b08d5c69581c7667fcda75a2ced09ec222373a448552c5e0ffb9baf130b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc5153a250e14527409632fbe4ab88d755e66ba90a7c95b575bd9a31a01baf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5153a250e14527409632fbe4ab88d755e66ba90a7c95b575bd9a31a01baf9e->enter($__internal_cc5153a250e14527409632fbe4ab88d755e66ba90a7c95b575bd9a31a01baf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_29d3341c83ff697cc3626731ce9bd5d2a6cc03fa53409cff2cdb4b9a940948af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d3341c83ff697cc3626731ce9bd5d2a6cc03fa53409cff2cdb4b9a940948af->enter($__internal_29d3341c83ff697cc3626731ce9bd5d2a6cc03fa53409cff2cdb4b9a940948af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5153a250e14527409632fbe4ab88d755e66ba90a7c95b575bd9a31a01baf9e->leave($__internal_cc5153a250e14527409632fbe4ab88d755e66ba90a7c95b575bd9a31a01baf9e_prof);

        
        $__internal_29d3341c83ff697cc3626731ce9bd5d2a6cc03fa53409cff2cdb4b9a940948af->leave($__internal_29d3341c83ff697cc3626731ce9bd5d2a6cc03fa53409cff2cdb4b9a940948af_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3899c4083f0518806003882f8116b9efb711f695c86bfab7d957518797049b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3899c4083f0518806003882f8116b9efb711f695c86bfab7d957518797049b2c->enter($__internal_3899c4083f0518806003882f8116b9efb711f695c86bfab7d957518797049b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0a97bb9e47b1d30d1fa139963006b65767a272c95a2d3f0293eaf8076e9f709f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a97bb9e47b1d30d1fa139963006b65767a272c95a2d3f0293eaf8076e9f709f->enter($__internal_0a97bb9e47b1d30d1fa139963006b65767a272c95a2d3f0293eaf8076e9f709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0a97bb9e47b1d30d1fa139963006b65767a272c95a2d3f0293eaf8076e9f709f->leave($__internal_0a97bb9e47b1d30d1fa139963006b65767a272c95a2d3f0293eaf8076e9f709f_prof);

        
        $__internal_3899c4083f0518806003882f8116b9efb711f695c86bfab7d957518797049b2c->leave($__internal_3899c4083f0518806003882f8116b9efb711f695c86bfab7d957518797049b2c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a73476803d6dbfa4c206b6199d73064421f23874af45019e86dab62ad919140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a73476803d6dbfa4c206b6199d73064421f23874af45019e86dab62ad919140->enter($__internal_1a73476803d6dbfa4c206b6199d73064421f23874af45019e86dab62ad919140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e1cadd2e6fd776a4fd985db699a1b336c84bd35f80cfa7acda978894a48e9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1cadd2e6fd776a4fd985db699a1b336c84bd35f80cfa7acda978894a48e9de->enter($__internal_0e1cadd2e6fd776a4fd985db699a1b336c84bd35f80cfa7acda978894a48e9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0e1cadd2e6fd776a4fd985db699a1b336c84bd35f80cfa7acda978894a48e9de->leave($__internal_0e1cadd2e6fd776a4fd985db699a1b336c84bd35f80cfa7acda978894a48e9de_prof);

        
        $__internal_1a73476803d6dbfa4c206b6199d73064421f23874af45019e86dab62ad919140->leave($__internal_1a73476803d6dbfa4c206b6199d73064421f23874af45019e86dab62ad919140_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
