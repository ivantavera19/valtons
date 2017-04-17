<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2217e951f851b5300708fb402981f8cf553a5d24f371a268136f234a1fe2dfc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a376ad0b40de3b66ea2d1ffa9346ba829bc059be172a62912aa9b6fdf39650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a376ad0b40de3b66ea2d1ffa9346ba829bc059be172a62912aa9b6fdf39650->enter($__internal_44a376ad0b40de3b66ea2d1ffa9346ba829bc059be172a62912aa9b6fdf39650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fb4ef79e701371c4aca116a817edbc45dc2eeb71520eed7bf846edb9c53e30be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4ef79e701371c4aca116a817edbc45dc2eeb71520eed7bf846edb9c53e30be->enter($__internal_fb4ef79e701371c4aca116a817edbc45dc2eeb71520eed7bf846edb9c53e30be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a376ad0b40de3b66ea2d1ffa9346ba829bc059be172a62912aa9b6fdf39650->leave($__internal_44a376ad0b40de3b66ea2d1ffa9346ba829bc059be172a62912aa9b6fdf39650_prof);

        
        $__internal_fb4ef79e701371c4aca116a817edbc45dc2eeb71520eed7bf846edb9c53e30be->leave($__internal_fb4ef79e701371c4aca116a817edbc45dc2eeb71520eed7bf846edb9c53e30be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e047c43f7fdcf0389b2fcec02d41096ac425dce3035d9a1f9b96293409a19591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e047c43f7fdcf0389b2fcec02d41096ac425dce3035d9a1f9b96293409a19591->enter($__internal_e047c43f7fdcf0389b2fcec02d41096ac425dce3035d9a1f9b96293409a19591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9872d0db62def3e08be3611e21aaf139ea8158c7806ab53a7f03a5d2807403f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9872d0db62def3e08be3611e21aaf139ea8158c7806ab53a7f03a5d2807403f9->enter($__internal_9872d0db62def3e08be3611e21aaf139ea8158c7806ab53a7f03a5d2807403f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9872d0db62def3e08be3611e21aaf139ea8158c7806ab53a7f03a5d2807403f9->leave($__internal_9872d0db62def3e08be3611e21aaf139ea8158c7806ab53a7f03a5d2807403f9_prof);

        
        $__internal_e047c43f7fdcf0389b2fcec02d41096ac425dce3035d9a1f9b96293409a19591->leave($__internal_e047c43f7fdcf0389b2fcec02d41096ac425dce3035d9a1f9b96293409a19591_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c002160e0ab3e3dea0b8e3d857296dae81cb16c0a93ad9734ebb6fe1e9c335f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c002160e0ab3e3dea0b8e3d857296dae81cb16c0a93ad9734ebb6fe1e9c335f8->enter($__internal_c002160e0ab3e3dea0b8e3d857296dae81cb16c0a93ad9734ebb6fe1e9c335f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1f7b8c26e94cb7754a571f8c3a08170d10676c32198b535ccd9e9dbd7ffbe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f7b8c26e94cb7754a571f8c3a08170d10676c32198b535ccd9e9dbd7ffbe9e->enter($__internal_a1f7b8c26e94cb7754a571f8c3a08170d10676c32198b535ccd9e9dbd7ffbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a1f7b8c26e94cb7754a571f8c3a08170d10676c32198b535ccd9e9dbd7ffbe9e->leave($__internal_a1f7b8c26e94cb7754a571f8c3a08170d10676c32198b535ccd9e9dbd7ffbe9e_prof);

        
        $__internal_c002160e0ab3e3dea0b8e3d857296dae81cb16c0a93ad9734ebb6fe1e9c335f8->leave($__internal_c002160e0ab3e3dea0b8e3d857296dae81cb16c0a93ad9734ebb6fe1e9c335f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
