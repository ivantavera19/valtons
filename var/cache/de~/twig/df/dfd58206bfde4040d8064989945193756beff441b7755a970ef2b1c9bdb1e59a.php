<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e0bfdb580122853f0c093e0ea8c0588d47a395d8407bf38e328e615b90ae81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f03cbc08c00735ca35fca7e14696dd0eddcf1e68069c1586a3275a8d602782a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03cbc08c00735ca35fca7e14696dd0eddcf1e68069c1586a3275a8d602782a8->enter($__internal_f03cbc08c00735ca35fca7e14696dd0eddcf1e68069c1586a3275a8d602782a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1270128bbaf4e57f903817f0ac200488c6b9e31dcae19bad93816fb99ff66eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1270128bbaf4e57f903817f0ac200488c6b9e31dcae19bad93816fb99ff66eaf->enter($__internal_1270128bbaf4e57f903817f0ac200488c6b9e31dcae19bad93816fb99ff66eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03cbc08c00735ca35fca7e14696dd0eddcf1e68069c1586a3275a8d602782a8->leave($__internal_f03cbc08c00735ca35fca7e14696dd0eddcf1e68069c1586a3275a8d602782a8_prof);

        
        $__internal_1270128bbaf4e57f903817f0ac200488c6b9e31dcae19bad93816fb99ff66eaf->leave($__internal_1270128bbaf4e57f903817f0ac200488c6b9e31dcae19bad93816fb99ff66eaf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c209846ffbc54535b1ea127eb8c73a8db2b04daabf42cec5740497372e7a4496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c209846ffbc54535b1ea127eb8c73a8db2b04daabf42cec5740497372e7a4496->enter($__internal_c209846ffbc54535b1ea127eb8c73a8db2b04daabf42cec5740497372e7a4496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c8da6a3d6fcb05a0f79806dab54186f25731225000428ee899c6120e285c0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8da6a3d6fcb05a0f79806dab54186f25731225000428ee899c6120e285c0c9->enter($__internal_3c8da6a3d6fcb05a0f79806dab54186f25731225000428ee899c6120e285c0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3c8da6a3d6fcb05a0f79806dab54186f25731225000428ee899c6120e285c0c9->leave($__internal_3c8da6a3d6fcb05a0f79806dab54186f25731225000428ee899c6120e285c0c9_prof);

        
        $__internal_c209846ffbc54535b1ea127eb8c73a8db2b04daabf42cec5740497372e7a4496->leave($__internal_c209846ffbc54535b1ea127eb8c73a8db2b04daabf42cec5740497372e7a4496_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc5d92be0509768e5e914f2de7319d3cf3e38db20e79d49bcf15dfcc73e8cc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5d92be0509768e5e914f2de7319d3cf3e38db20e79d49bcf15dfcc73e8cc66->enter($__internal_dc5d92be0509768e5e914f2de7319d3cf3e38db20e79d49bcf15dfcc73e8cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ae625fb7e478918ded3ee7242087af69d5d6a36aa4f6b5379d94e912e1b76b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae625fb7e478918ded3ee7242087af69d5d6a36aa4f6b5379d94e912e1b76b4->enter($__internal_6ae625fb7e478918ded3ee7242087af69d5d6a36aa4f6b5379d94e912e1b76b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ae625fb7e478918ded3ee7242087af69d5d6a36aa4f6b5379d94e912e1b76b4->leave($__internal_6ae625fb7e478918ded3ee7242087af69d5d6a36aa4f6b5379d94e912e1b76b4_prof);

        
        $__internal_dc5d92be0509768e5e914f2de7319d3cf3e38db20e79d49bcf15dfcc73e8cc66->leave($__internal_dc5d92be0509768e5e914f2de7319d3cf3e38db20e79d49bcf15dfcc73e8cc66_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_580e3bae61da67f3ac74fbc86f02a95289b496198a46de759ea26c5abeb5a6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580e3bae61da67f3ac74fbc86f02a95289b496198a46de759ea26c5abeb5a6bf->enter($__internal_580e3bae61da67f3ac74fbc86f02a95289b496198a46de759ea26c5abeb5a6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7162069fd4928eb7cc1cbd303ea7d538278b8f2dd2ea36f432842e7ddeca252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7162069fd4928eb7cc1cbd303ea7d538278b8f2dd2ea36f432842e7ddeca252->enter($__internal_d7162069fd4928eb7cc1cbd303ea7d538278b8f2dd2ea36f432842e7ddeca252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d7162069fd4928eb7cc1cbd303ea7d538278b8f2dd2ea36f432842e7ddeca252->leave($__internal_d7162069fd4928eb7cc1cbd303ea7d538278b8f2dd2ea36f432842e7ddeca252_prof);

        
        $__internal_580e3bae61da67f3ac74fbc86f02a95289b496198a46de759ea26c5abeb5a6bf->leave($__internal_580e3bae61da67f3ac74fbc86f02a95289b496198a46de759ea26c5abeb5a6bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
