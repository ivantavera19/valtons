<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ee3a40b3820706cd6b82d11071177792d57e663ad70eea7761e91b8ac13c6d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_603ba8d665c4ce9693597204fa9fd8e9b5a92e83182383a9a4212005f9f85203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603ba8d665c4ce9693597204fa9fd8e9b5a92e83182383a9a4212005f9f85203->enter($__internal_603ba8d665c4ce9693597204fa9fd8e9b5a92e83182383a9a4212005f9f85203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_bf28e6115e1adfea91a89fe8f583d171564ce6c8cb6a1f696ace6150be73c7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf28e6115e1adfea91a89fe8f583d171564ce6c8cb6a1f696ace6150be73c7d8->enter($__internal_bf28e6115e1adfea91a89fe8f583d171564ce6c8cb6a1f696ace6150be73c7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603ba8d665c4ce9693597204fa9fd8e9b5a92e83182383a9a4212005f9f85203->leave($__internal_603ba8d665c4ce9693597204fa9fd8e9b5a92e83182383a9a4212005f9f85203_prof);

        
        $__internal_bf28e6115e1adfea91a89fe8f583d171564ce6c8cb6a1f696ace6150be73c7d8->leave($__internal_bf28e6115e1adfea91a89fe8f583d171564ce6c8cb6a1f696ace6150be73c7d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd0e1f35494b78b937dac17f8550ccf2a9ccb0c75bfd2a3f75d724bafcfb6354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0e1f35494b78b937dac17f8550ccf2a9ccb0c75bfd2a3f75d724bafcfb6354->enter($__internal_dd0e1f35494b78b937dac17f8550ccf2a9ccb0c75bfd2a3f75d724bafcfb6354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74fef438e2a2fba3e9c92638bf98a93014908b55e0e943e545d16f2563f9894a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fef438e2a2fba3e9c92638bf98a93014908b55e0e943e545d16f2563f9894a->enter($__internal_74fef438e2a2fba3e9c92638bf98a93014908b55e0e943e545d16f2563f9894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_74fef438e2a2fba3e9c92638bf98a93014908b55e0e943e545d16f2563f9894a->leave($__internal_74fef438e2a2fba3e9c92638bf98a93014908b55e0e943e545d16f2563f9894a_prof);

        
        $__internal_dd0e1f35494b78b937dac17f8550ccf2a9ccb0c75bfd2a3f75d724bafcfb6354->leave($__internal_dd0e1f35494b78b937dac17f8550ccf2a9ccb0c75bfd2a3f75d724bafcfb6354_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
