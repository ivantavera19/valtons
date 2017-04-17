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
        $__internal_251c0d09c309f52ff74c77c1ebf5e0952ec9a485c8d2d20a073b2084dedf8632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251c0d09c309f52ff74c77c1ebf5e0952ec9a485c8d2d20a073b2084dedf8632->enter($__internal_251c0d09c309f52ff74c77c1ebf5e0952ec9a485c8d2d20a073b2084dedf8632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_9dab39109f2b102af28f8d6d78a0f1d1d7b661fc5ee3ae71346d02a8a4ce08bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dab39109f2b102af28f8d6d78a0f1d1d7b661fc5ee3ae71346d02a8a4ce08bc->enter($__internal_9dab39109f2b102af28f8d6d78a0f1d1d7b661fc5ee3ae71346d02a8a4ce08bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251c0d09c309f52ff74c77c1ebf5e0952ec9a485c8d2d20a073b2084dedf8632->leave($__internal_251c0d09c309f52ff74c77c1ebf5e0952ec9a485c8d2d20a073b2084dedf8632_prof);

        
        $__internal_9dab39109f2b102af28f8d6d78a0f1d1d7b661fc5ee3ae71346d02a8a4ce08bc->leave($__internal_9dab39109f2b102af28f8d6d78a0f1d1d7b661fc5ee3ae71346d02a8a4ce08bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b557c3719fc8f6fb7c61fc17c212af8e79853f279b69acb59e260d80e168513f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b557c3719fc8f6fb7c61fc17c212af8e79853f279b69acb59e260d80e168513f->enter($__internal_b557c3719fc8f6fb7c61fc17c212af8e79853f279b69acb59e260d80e168513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d3a6b4d78b0d0d94ee9000d0ecc8e84be055d0cb0788bcc2c7ce7326fa62f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3a6b4d78b0d0d94ee9000d0ecc8e84be055d0cb0788bcc2c7ce7326fa62f09->enter($__internal_1d3a6b4d78b0d0d94ee9000d0ecc8e84be055d0cb0788bcc2c7ce7326fa62f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1d3a6b4d78b0d0d94ee9000d0ecc8e84be055d0cb0788bcc2c7ce7326fa62f09->leave($__internal_1d3a6b4d78b0d0d94ee9000d0ecc8e84be055d0cb0788bcc2c7ce7326fa62f09_prof);

        
        $__internal_b557c3719fc8f6fb7c61fc17c212af8e79853f279b69acb59e260d80e168513f->leave($__internal_b557c3719fc8f6fb7c61fc17c212af8e79853f279b69acb59e260d80e168513f_prof);

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
