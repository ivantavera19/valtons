<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e571d76e7b243f993e2dd9015922ff1494008ffb89f36419f175416504d8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e571d76e7b243f993e2dd9015922ff1494008ffb89f36419f175416504d8ad->enter($__internal_e4e571d76e7b243f993e2dd9015922ff1494008ffb89f36419f175416504d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_db229ccd30624030a79b2acf0579ba86520dfba97d4403868385a8e0ea7f944d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db229ccd30624030a79b2acf0579ba86520dfba97d4403868385a8e0ea7f944d->enter($__internal_db229ccd30624030a79b2acf0579ba86520dfba97d4403868385a8e0ea7f944d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e571d76e7b243f993e2dd9015922ff1494008ffb89f36419f175416504d8ad->leave($__internal_e4e571d76e7b243f993e2dd9015922ff1494008ffb89f36419f175416504d8ad_prof);

        
        $__internal_db229ccd30624030a79b2acf0579ba86520dfba97d4403868385a8e0ea7f944d->leave($__internal_db229ccd30624030a79b2acf0579ba86520dfba97d4403868385a8e0ea7f944d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fff1ef1a70a43fed3f991d9d35b15c021e441624b7b828716d6d74d85155192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fff1ef1a70a43fed3f991d9d35b15c021e441624b7b828716d6d74d85155192->enter($__internal_8fff1ef1a70a43fed3f991d9d35b15c021e441624b7b828716d6d74d85155192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c80eaa382fa40e4ee132c6391651ed89c01ac03943d6f7823dbcd94f4377fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c80eaa382fa40e4ee132c6391651ed89c01ac03943d6f7823dbcd94f4377fd7->enter($__internal_5c80eaa382fa40e4ee132c6391651ed89c01ac03943d6f7823dbcd94f4377fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c80eaa382fa40e4ee132c6391651ed89c01ac03943d6f7823dbcd94f4377fd7->leave($__internal_5c80eaa382fa40e4ee132c6391651ed89c01ac03943d6f7823dbcd94f4377fd7_prof);

        
        $__internal_8fff1ef1a70a43fed3f991d9d35b15c021e441624b7b828716d6d74d85155192->leave($__internal_8fff1ef1a70a43fed3f991d9d35b15c021e441624b7b828716d6d74d85155192_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5fd1a97afebbe6bc25c7144730e1bbdca8ede588e4d909583ea1c0b518258ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fd1a97afebbe6bc25c7144730e1bbdca8ede588e4d909583ea1c0b518258ec->enter($__internal_e5fd1a97afebbe6bc25c7144730e1bbdca8ede588e4d909583ea1c0b518258ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_75fd20a5e9a85d0b74ccea45122d5d3e6a1565a7bf18459078239b2c125c87d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fd20a5e9a85d0b74ccea45122d5d3e6a1565a7bf18459078239b2c125c87d6->enter($__internal_75fd20a5e9a85d0b74ccea45122d5d3e6a1565a7bf18459078239b2c125c87d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75fd20a5e9a85d0b74ccea45122d5d3e6a1565a7bf18459078239b2c125c87d6->leave($__internal_75fd20a5e9a85d0b74ccea45122d5d3e6a1565a7bf18459078239b2c125c87d6_prof);

        
        $__internal_e5fd1a97afebbe6bc25c7144730e1bbdca8ede588e4d909583ea1c0b518258ec->leave($__internal_e5fd1a97afebbe6bc25c7144730e1bbdca8ede588e4d909583ea1c0b518258ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9e797105fe0a26bb3d140bbf1c06ea43bf38a240406eb92438e86213bc4184a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e797105fe0a26bb3d140bbf1c06ea43bf38a240406eb92438e86213bc4184a->enter($__internal_c9e797105fe0a26bb3d140bbf1c06ea43bf38a240406eb92438e86213bc4184a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64de923e581657aac699b1f4516d1c38726bc95edd3df5c832d635614c1563d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64de923e581657aac699b1f4516d1c38726bc95edd3df5c832d635614c1563d4->enter($__internal_64de923e581657aac699b1f4516d1c38726bc95edd3df5c832d635614c1563d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64de923e581657aac699b1f4516d1c38726bc95edd3df5c832d635614c1563d4->leave($__internal_64de923e581657aac699b1f4516d1c38726bc95edd3df5c832d635614c1563d4_prof);

        
        $__internal_c9e797105fe0a26bb3d140bbf1c06ea43bf38a240406eb92438e86213bc4184a->leave($__internal_c9e797105fe0a26bb3d140bbf1c06ea43bf38a240406eb92438e86213bc4184a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
