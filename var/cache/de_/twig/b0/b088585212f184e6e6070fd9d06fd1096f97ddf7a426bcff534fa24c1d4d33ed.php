<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9df4e37bce1499bbb28587d006e71bd2355623d3fd09c32d73d39a4b9230ef46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_3092288f4bd651e377de9a72034156d00fbb9b6d6dbe24be0f6964dccb458d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3092288f4bd651e377de9a72034156d00fbb9b6d6dbe24be0f6964dccb458d00->enter($__internal_3092288f4bd651e377de9a72034156d00fbb9b6d6dbe24be0f6964dccb458d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3354f25055e0c073cd9b8d4065c1b8294dde318427b9d87144ca05f170dff4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3354f25055e0c073cd9b8d4065c1b8294dde318427b9d87144ca05f170dff4fd->enter($__internal_3354f25055e0c073cd9b8d4065c1b8294dde318427b9d87144ca05f170dff4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3092288f4bd651e377de9a72034156d00fbb9b6d6dbe24be0f6964dccb458d00->leave($__internal_3092288f4bd651e377de9a72034156d00fbb9b6d6dbe24be0f6964dccb458d00_prof);

        
        $__internal_3354f25055e0c073cd9b8d4065c1b8294dde318427b9d87144ca05f170dff4fd->leave($__internal_3354f25055e0c073cd9b8d4065c1b8294dde318427b9d87144ca05f170dff4fd_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_19fd72f608d2da9ca6f7b3ba2d4ce8c1e799c4f16552071e3cda8bd92c1d12cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fd72f608d2da9ca6f7b3ba2d4ce8c1e799c4f16552071e3cda8bd92c1d12cd->enter($__internal_19fd72f608d2da9ca6f7b3ba2d4ce8c1e799c4f16552071e3cda8bd92c1d12cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7e6a3dda266102e54c9d6cdb6af4a9af4e0c229ef7ccf455b2163af4f8dce63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6a3dda266102e54c9d6cdb6af4a9af4e0c229ef7ccf455b2163af4f8dce63c->enter($__internal_7e6a3dda266102e54c9d6cdb6af4a9af4e0c229ef7ccf455b2163af4f8dce63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7e6a3dda266102e54c9d6cdb6af4a9af4e0c229ef7ccf455b2163af4f8dce63c->leave($__internal_7e6a3dda266102e54c9d6cdb6af4a9af4e0c229ef7ccf455b2163af4f8dce63c_prof);

        
        $__internal_19fd72f608d2da9ca6f7b3ba2d4ce8c1e799c4f16552071e3cda8bd92c1d12cd->leave($__internal_19fd72f608d2da9ca6f7b3ba2d4ce8c1e799c4f16552071e3cda8bd92c1d12cd_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c656ef91c6954795a3d9d22f7b12451a45755cd2bcc6c1687d25d87bc0aea17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c656ef91c6954795a3d9d22f7b12451a45755cd2bcc6c1687d25d87bc0aea17->enter($__internal_4c656ef91c6954795a3d9d22f7b12451a45755cd2bcc6c1687d25d87bc0aea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1ad913121fa4d65a5484f7a3608f3625a4cde5e9e0593fded0d149dcf964d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ad913121fa4d65a5484f7a3608f3625a4cde5e9e0593fded0d149dcf964d12->enter($__internal_d1ad913121fa4d65a5484f7a3608f3625a4cde5e9e0593fded0d149dcf964d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d1ad913121fa4d65a5484f7a3608f3625a4cde5e9e0593fded0d149dcf964d12->leave($__internal_d1ad913121fa4d65a5484f7a3608f3625a4cde5e9e0593fded0d149dcf964d12_prof);

        
        $__internal_4c656ef91c6954795a3d9d22f7b12451a45755cd2bcc6c1687d25d87bc0aea17->leave($__internal_4c656ef91c6954795a3d9d22f7b12451a45755cd2bcc6c1687d25d87bc0aea17_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
