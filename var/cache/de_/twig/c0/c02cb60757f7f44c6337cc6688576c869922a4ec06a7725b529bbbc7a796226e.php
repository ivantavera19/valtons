<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_2c87a578c185107e57d3b9d81e50c99f30e8f51a361ccc39d53fc0a1fc05274b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85b1b19ffa7eb94e5224e8c913114211774ec8ecbc9537bbd4ebb5da2454fff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b1b19ffa7eb94e5224e8c913114211774ec8ecbc9537bbd4ebb5da2454fff5->enter($__internal_85b1b19ffa7eb94e5224e8c913114211774ec8ecbc9537bbd4ebb5da2454fff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ea37b6550463e9a0c09daa3dc4ea6340edd172f840935eeb80908431da2e9d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea37b6550463e9a0c09daa3dc4ea6340edd172f840935eeb80908431da2e9d8e->enter($__internal_ea37b6550463e9a0c09daa3dc4ea6340edd172f840935eeb80908431da2e9d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_85b1b19ffa7eb94e5224e8c913114211774ec8ecbc9537bbd4ebb5da2454fff5->leave($__internal_85b1b19ffa7eb94e5224e8c913114211774ec8ecbc9537bbd4ebb5da2454fff5_prof);

        
        $__internal_ea37b6550463e9a0c09daa3dc4ea6340edd172f840935eeb80908431da2e9d8e->leave($__internal_ea37b6550463e9a0c09daa3dc4ea6340edd172f840935eeb80908431da2e9d8e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
