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
        $__internal_92de232b894111b7549184ad5a11f2578e7422a01db7012d67d93a8726820f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92de232b894111b7549184ad5a11f2578e7422a01db7012d67d93a8726820f72->enter($__internal_92de232b894111b7549184ad5a11f2578e7422a01db7012d67d93a8726820f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ea43bcc22c9ea9c91f4e600b9630d905bb1785df362bd89d4178d796b4ce44a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea43bcc22c9ea9c91f4e600b9630d905bb1785df362bd89d4178d796b4ce44a1->enter($__internal_ea43bcc22c9ea9c91f4e600b9630d905bb1785df362bd89d4178d796b4ce44a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92de232b894111b7549184ad5a11f2578e7422a01db7012d67d93a8726820f72->leave($__internal_92de232b894111b7549184ad5a11f2578e7422a01db7012d67d93a8726820f72_prof);

        
        $__internal_ea43bcc22c9ea9c91f4e600b9630d905bb1785df362bd89d4178d796b4ce44a1->leave($__internal_ea43bcc22c9ea9c91f4e600b9630d905bb1785df362bd89d4178d796b4ce44a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55bc37415d6ca057d7f099602a6cba75fbef20f6305a4d6cc35ca40ec2db7b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bc37415d6ca057d7f099602a6cba75fbef20f6305a4d6cc35ca40ec2db7b7a->enter($__internal_55bc37415d6ca057d7f099602a6cba75fbef20f6305a4d6cc35ca40ec2db7b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79f87a2499e73bdd46840d9dfed07a11ba74d4b19f0d9bccd9bfec0ccd744e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f87a2499e73bdd46840d9dfed07a11ba74d4b19f0d9bccd9bfec0ccd744e04->enter($__internal_79f87a2499e73bdd46840d9dfed07a11ba74d4b19f0d9bccd9bfec0ccd744e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_79f87a2499e73bdd46840d9dfed07a11ba74d4b19f0d9bccd9bfec0ccd744e04->leave($__internal_79f87a2499e73bdd46840d9dfed07a11ba74d4b19f0d9bccd9bfec0ccd744e04_prof);

        
        $__internal_55bc37415d6ca057d7f099602a6cba75fbef20f6305a4d6cc35ca40ec2db7b7a->leave($__internal_55bc37415d6ca057d7f099602a6cba75fbef20f6305a4d6cc35ca40ec2db7b7a_prof);

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
