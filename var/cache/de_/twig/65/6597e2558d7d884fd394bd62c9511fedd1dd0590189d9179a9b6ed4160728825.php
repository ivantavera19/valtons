<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cdb3575a619998ebb252f9109c917dc67e86641891bea4facb8b035c73e065db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c1125b20a96a6b43e79b6324d531e491d2a2bb2036f50ec6c1e06516f4fdddbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1125b20a96a6b43e79b6324d531e491d2a2bb2036f50ec6c1e06516f4fdddbb->enter($__internal_c1125b20a96a6b43e79b6324d531e491d2a2bb2036f50ec6c1e06516f4fdddbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7d0832c5eeaa228d4c91b33e76fe614a187a95e4938e9c219cca1d15460c454d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0832c5eeaa228d4c91b33e76fe614a187a95e4938e9c219cca1d15460c454d->enter($__internal_7d0832c5eeaa228d4c91b33e76fe614a187a95e4938e9c219cca1d15460c454d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1125b20a96a6b43e79b6324d531e491d2a2bb2036f50ec6c1e06516f4fdddbb->leave($__internal_c1125b20a96a6b43e79b6324d531e491d2a2bb2036f50ec6c1e06516f4fdddbb_prof);

        
        $__internal_7d0832c5eeaa228d4c91b33e76fe614a187a95e4938e9c219cca1d15460c454d->leave($__internal_7d0832c5eeaa228d4c91b33e76fe614a187a95e4938e9c219cca1d15460c454d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd44882d879f569d1d2b8c4dbffb594e31f6c0f6a5b9789d69980505f2dacde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd44882d879f569d1d2b8c4dbffb594e31f6c0f6a5b9789d69980505f2dacde3->enter($__internal_cd44882d879f569d1d2b8c4dbffb594e31f6c0f6a5b9789d69980505f2dacde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea9474157c33c975eec1ecb8f61a5fb6647a7db730a67fef2a27613b2945645f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9474157c33c975eec1ecb8f61a5fb6647a7db730a67fef2a27613b2945645f->enter($__internal_ea9474157c33c975eec1ecb8f61a5fb6647a7db730a67fef2a27613b2945645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea9474157c33c975eec1ecb8f61a5fb6647a7db730a67fef2a27613b2945645f->leave($__internal_ea9474157c33c975eec1ecb8f61a5fb6647a7db730a67fef2a27613b2945645f_prof);

        
        $__internal_cd44882d879f569d1d2b8c4dbffb594e31f6c0f6a5b9789d69980505f2dacde3->leave($__internal_cd44882d879f569d1d2b8c4dbffb594e31f6c0f6a5b9789d69980505f2dacde3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_15a9277fdf745be792bade28cbe9724256042755e03e49f9ee81720e0d3ac70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a9277fdf745be792bade28cbe9724256042755e03e49f9ee81720e0d3ac70b->enter($__internal_15a9277fdf745be792bade28cbe9724256042755e03e49f9ee81720e0d3ac70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e44c3f3f428b0331d257e5f8d3b152bb4eb542dfb02b637f9953457f35b419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e44c3f3f428b0331d257e5f8d3b152bb4eb542dfb02b637f9953457f35b419d->enter($__internal_6e44c3f3f428b0331d257e5f8d3b152bb4eb542dfb02b637f9953457f35b419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e44c3f3f428b0331d257e5f8d3b152bb4eb542dfb02b637f9953457f35b419d->leave($__internal_6e44c3f3f428b0331d257e5f8d3b152bb4eb542dfb02b637f9953457f35b419d_prof);

        
        $__internal_15a9277fdf745be792bade28cbe9724256042755e03e49f9ee81720e0d3ac70b->leave($__internal_15a9277fdf745be792bade28cbe9724256042755e03e49f9ee81720e0d3ac70b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e09157dd6da8657fd0e384f8a3e18991675cd86b5cc4ea1a55cb5e27b1cd17b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09157dd6da8657fd0e384f8a3e18991675cd86b5cc4ea1a55cb5e27b1cd17b2->enter($__internal_e09157dd6da8657fd0e384f8a3e18991675cd86b5cc4ea1a55cb5e27b1cd17b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_098f6d50c990edba84b6fc3e6109b28ed3cbf6e9c52088dfe14ce8793b4a033b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098f6d50c990edba84b6fc3e6109b28ed3cbf6e9c52088dfe14ce8793b4a033b->enter($__internal_098f6d50c990edba84b6fc3e6109b28ed3cbf6e9c52088dfe14ce8793b4a033b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_098f6d50c990edba84b6fc3e6109b28ed3cbf6e9c52088dfe14ce8793b4a033b->leave($__internal_098f6d50c990edba84b6fc3e6109b28ed3cbf6e9c52088dfe14ce8793b4a033b_prof);

        
        $__internal_e09157dd6da8657fd0e384f8a3e18991675cd86b5cc4ea1a55cb5e27b1cd17b2->leave($__internal_e09157dd6da8657fd0e384f8a3e18991675cd86b5cc4ea1a55cb5e27b1cd17b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
