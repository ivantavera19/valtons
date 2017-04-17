<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9f73aad1d1c41cba15b2554e9ba554bdecaeb1bafa27d9717867fe27e1d1473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_12a5659057774de6705dfc36d26befbbb67d32cc26be6a9c644532889095f89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a5659057774de6705dfc36d26befbbb67d32cc26be6a9c644532889095f89d->enter($__internal_12a5659057774de6705dfc36d26befbbb67d32cc26be6a9c644532889095f89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_009ac8b48312486ef4d4b9c7839da1a1b6afa4e65942d0f7573c5ca7448a1535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009ac8b48312486ef4d4b9c7839da1a1b6afa4e65942d0f7573c5ca7448a1535->enter($__internal_009ac8b48312486ef4d4b9c7839da1a1b6afa4e65942d0f7573c5ca7448a1535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a5659057774de6705dfc36d26befbbb67d32cc26be6a9c644532889095f89d->leave($__internal_12a5659057774de6705dfc36d26befbbb67d32cc26be6a9c644532889095f89d_prof);

        
        $__internal_009ac8b48312486ef4d4b9c7839da1a1b6afa4e65942d0f7573c5ca7448a1535->leave($__internal_009ac8b48312486ef4d4b9c7839da1a1b6afa4e65942d0f7573c5ca7448a1535_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74eaa4d5c098b07b024b66cef18830774398809db77d102c0c1ad68c47515af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74eaa4d5c098b07b024b66cef18830774398809db77d102c0c1ad68c47515af6->enter($__internal_74eaa4d5c098b07b024b66cef18830774398809db77d102c0c1ad68c47515af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3fd9f6736b9613e8e7b765a99bfa8063c4ef4ad7b4c8014ac3a2c118bdaf02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fd9f6736b9613e8e7b765a99bfa8063c4ef4ad7b4c8014ac3a2c118bdaf02e->enter($__internal_e3fd9f6736b9613e8e7b765a99bfa8063c4ef4ad7b4c8014ac3a2c118bdaf02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e3fd9f6736b9613e8e7b765a99bfa8063c4ef4ad7b4c8014ac3a2c118bdaf02e->leave($__internal_e3fd9f6736b9613e8e7b765a99bfa8063c4ef4ad7b4c8014ac3a2c118bdaf02e_prof);

        
        $__internal_74eaa4d5c098b07b024b66cef18830774398809db77d102c0c1ad68c47515af6->leave($__internal_74eaa4d5c098b07b024b66cef18830774398809db77d102c0c1ad68c47515af6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0401dbb98b672bc865d9d865f9dccceb789ca398f9d4de7d348f4459ec7b104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0401dbb98b672bc865d9d865f9dccceb789ca398f9d4de7d348f4459ec7b104->enter($__internal_c0401dbb98b672bc865d9d865f9dccceb789ca398f9d4de7d348f4459ec7b104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6cc68d6b58699e4f99f777534c14697087da47fe6c44118a37d49421cc9cfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cc68d6b58699e4f99f777534c14697087da47fe6c44118a37d49421cc9cfb4->enter($__internal_b6cc68d6b58699e4f99f777534c14697087da47fe6c44118a37d49421cc9cfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b6cc68d6b58699e4f99f777534c14697087da47fe6c44118a37d49421cc9cfb4->leave($__internal_b6cc68d6b58699e4f99f777534c14697087da47fe6c44118a37d49421cc9cfb4_prof);

        
        $__internal_c0401dbb98b672bc865d9d865f9dccceb789ca398f9d4de7d348f4459ec7b104->leave($__internal_c0401dbb98b672bc865d9d865f9dccceb789ca398f9d4de7d348f4459ec7b104_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
