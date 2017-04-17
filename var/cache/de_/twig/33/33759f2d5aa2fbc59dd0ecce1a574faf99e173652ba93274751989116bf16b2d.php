<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0d8317a3fd0ec22eaf2fc0b395b7762cf7194e61fbe4efd96498ee899771b688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_f8221d9ac0de486c21177f033785ed60fe6073afb15bc65041e04a68a8897bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8221d9ac0de486c21177f033785ed60fe6073afb15bc65041e04a68a8897bff->enter($__internal_f8221d9ac0de486c21177f033785ed60fe6073afb15bc65041e04a68a8897bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_13d5eb0bc0fa606ca7e688b22f858393fb2ac799cb4493fac0877a5089d81852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d5eb0bc0fa606ca7e688b22f858393fb2ac799cb4493fac0877a5089d81852->enter($__internal_13d5eb0bc0fa606ca7e688b22f858393fb2ac799cb4493fac0877a5089d81852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8221d9ac0de486c21177f033785ed60fe6073afb15bc65041e04a68a8897bff->leave($__internal_f8221d9ac0de486c21177f033785ed60fe6073afb15bc65041e04a68a8897bff_prof);

        
        $__internal_13d5eb0bc0fa606ca7e688b22f858393fb2ac799cb4493fac0877a5089d81852->leave($__internal_13d5eb0bc0fa606ca7e688b22f858393fb2ac799cb4493fac0877a5089d81852_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8da843bc0a79607062dab26ba5ca6c4c985b7e022aab576d86faf28ab2d42a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da843bc0a79607062dab26ba5ca6c4c985b7e022aab576d86faf28ab2d42a53->enter($__internal_8da843bc0a79607062dab26ba5ca6c4c985b7e022aab576d86faf28ab2d42a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b400fb306da56bdc2adfa3850fefd6e315651c466fb190d31d2d3b884232aa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b400fb306da56bdc2adfa3850fefd6e315651c466fb190d31d2d3b884232aa30->enter($__internal_b400fb306da56bdc2adfa3850fefd6e315651c466fb190d31d2d3b884232aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b400fb306da56bdc2adfa3850fefd6e315651c466fb190d31d2d3b884232aa30->leave($__internal_b400fb306da56bdc2adfa3850fefd6e315651c466fb190d31d2d3b884232aa30_prof);

        
        $__internal_8da843bc0a79607062dab26ba5ca6c4c985b7e022aab576d86faf28ab2d42a53->leave($__internal_8da843bc0a79607062dab26ba5ca6c4c985b7e022aab576d86faf28ab2d42a53_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08df07149d1c013c53aaeb3f6ee4d8b3835cc336122f4928b533a64805f014b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08df07149d1c013c53aaeb3f6ee4d8b3835cc336122f4928b533a64805f014b->enter($__internal_f08df07149d1c013c53aaeb3f6ee4d8b3835cc336122f4928b533a64805f014b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_864080d909f6f02a5d56fdad543f47d70cb405a1e108fc5775f78c73c233fe00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864080d909f6f02a5d56fdad543f47d70cb405a1e108fc5775f78c73c233fe00->enter($__internal_864080d909f6f02a5d56fdad543f47d70cb405a1e108fc5775f78c73c233fe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_864080d909f6f02a5d56fdad543f47d70cb405a1e108fc5775f78c73c233fe00->leave($__internal_864080d909f6f02a5d56fdad543f47d70cb405a1e108fc5775f78c73c233fe00_prof);

        
        $__internal_f08df07149d1c013c53aaeb3f6ee4d8b3835cc336122f4928b533a64805f014b->leave($__internal_f08df07149d1c013c53aaeb3f6ee4d8b3835cc336122f4928b533a64805f014b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
