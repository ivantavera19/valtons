<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_415ead967e717ee7456672796cc78232cafb69075362f92cbf8c3e651373f519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c7be2ac560d5f6db5ca400c23457212b2e389eac36ff365f3c3ccc79689947cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7be2ac560d5f6db5ca400c23457212b2e389eac36ff365f3c3ccc79689947cc->enter($__internal_c7be2ac560d5f6db5ca400c23457212b2e389eac36ff365f3c3ccc79689947cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c4f30ebe1c4f82de08d4af6f38f0cc873cfe2e2185b4994c963096abd5f23b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f30ebe1c4f82de08d4af6f38f0cc873cfe2e2185b4994c963096abd5f23b5e->enter($__internal_c4f30ebe1c4f82de08d4af6f38f0cc873cfe2e2185b4994c963096abd5f23b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7be2ac560d5f6db5ca400c23457212b2e389eac36ff365f3c3ccc79689947cc->leave($__internal_c7be2ac560d5f6db5ca400c23457212b2e389eac36ff365f3c3ccc79689947cc_prof);

        
        $__internal_c4f30ebe1c4f82de08d4af6f38f0cc873cfe2e2185b4994c963096abd5f23b5e->leave($__internal_c4f30ebe1c4f82de08d4af6f38f0cc873cfe2e2185b4994c963096abd5f23b5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6211ac79d9567adeb3397829eb854586863e7594a388402db095f3d4f28e40ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6211ac79d9567adeb3397829eb854586863e7594a388402db095f3d4f28e40ab->enter($__internal_6211ac79d9567adeb3397829eb854586863e7594a388402db095f3d4f28e40ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f77871af71305e7c52ab2b0a56bca38637ccef01243abcbfa232b19180eec1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77871af71305e7c52ab2b0a56bca38637ccef01243abcbfa232b19180eec1c7->enter($__internal_f77871af71305e7c52ab2b0a56bca38637ccef01243abcbfa232b19180eec1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f77871af71305e7c52ab2b0a56bca38637ccef01243abcbfa232b19180eec1c7->leave($__internal_f77871af71305e7c52ab2b0a56bca38637ccef01243abcbfa232b19180eec1c7_prof);

        
        $__internal_6211ac79d9567adeb3397829eb854586863e7594a388402db095f3d4f28e40ab->leave($__internal_6211ac79d9567adeb3397829eb854586863e7594a388402db095f3d4f28e40ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b44831137fd84becebcd941a6f52b2725e1e4a6b7f56fd0f6b20d4bf0199102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b44831137fd84becebcd941a6f52b2725e1e4a6b7f56fd0f6b20d4bf0199102->enter($__internal_5b44831137fd84becebcd941a6f52b2725e1e4a6b7f56fd0f6b20d4bf0199102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f1aaf1c3d2fb7db54d417237c5787846fd873b91a8c7a12b237585885b1c05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1aaf1c3d2fb7db54d417237c5787846fd873b91a8c7a12b237585885b1c05f->enter($__internal_9f1aaf1c3d2fb7db54d417237c5787846fd873b91a8c7a12b237585885b1c05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f1aaf1c3d2fb7db54d417237c5787846fd873b91a8c7a12b237585885b1c05f->leave($__internal_9f1aaf1c3d2fb7db54d417237c5787846fd873b91a8c7a12b237585885b1c05f_prof);

        
        $__internal_5b44831137fd84becebcd941a6f52b2725e1e4a6b7f56fd0f6b20d4bf0199102->leave($__internal_5b44831137fd84becebcd941a6f52b2725e1e4a6b7f56fd0f6b20d4bf0199102_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51592b52021322bc01be0fa5e2de7493924ca553327710f53f6735b4ca2b7b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51592b52021322bc01be0fa5e2de7493924ca553327710f53f6735b4ca2b7b63->enter($__internal_51592b52021322bc01be0fa5e2de7493924ca553327710f53f6735b4ca2b7b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4df6a0feef37232218aaf0b42a4e6fe3b26c4027ba62ae0ab09aeddac72a8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4df6a0feef37232218aaf0b42a4e6fe3b26c4027ba62ae0ab09aeddac72a8b1->enter($__internal_b4df6a0feef37232218aaf0b42a4e6fe3b26c4027ba62ae0ab09aeddac72a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4df6a0feef37232218aaf0b42a4e6fe3b26c4027ba62ae0ab09aeddac72a8b1->leave($__internal_b4df6a0feef37232218aaf0b42a4e6fe3b26c4027ba62ae0ab09aeddac72a8b1_prof);

        
        $__internal_51592b52021322bc01be0fa5e2de7493924ca553327710f53f6735b4ca2b7b63->leave($__internal_51592b52021322bc01be0fa5e2de7493924ca553327710f53f6735b4ca2b7b63_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
