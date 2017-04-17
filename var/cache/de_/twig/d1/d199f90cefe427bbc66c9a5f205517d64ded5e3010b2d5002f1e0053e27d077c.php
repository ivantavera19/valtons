<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_215e7278f85899df3d6fbc7e9f45da9e215e8a3b658183749fd165a46db953af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6edaa51bed8054e595a536d47d5e7703ae117fcef9a90df67846ca7f2038caab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edaa51bed8054e595a536d47d5e7703ae117fcef9a90df67846ca7f2038caab->enter($__internal_6edaa51bed8054e595a536d47d5e7703ae117fcef9a90df67846ca7f2038caab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_d801f9139553fc47f934b2c236dfee2e1aa0af8c8c41f5f08875044e4d6ae6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d801f9139553fc47f934b2c236dfee2e1aa0af8c8c41f5f08875044e4d6ae6c0->enter($__internal_d801f9139553fc47f934b2c236dfee2e1aa0af8c8c41f5f08875044e4d6ae6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6edaa51bed8054e595a536d47d5e7703ae117fcef9a90df67846ca7f2038caab->leave($__internal_6edaa51bed8054e595a536d47d5e7703ae117fcef9a90df67846ca7f2038caab_prof);

        
        $__internal_d801f9139553fc47f934b2c236dfee2e1aa0af8c8c41f5f08875044e4d6ae6c0->leave($__internal_d801f9139553fc47f934b2c236dfee2e1aa0af8c8c41f5f08875044e4d6ae6c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb7ad6b7f02ec6c8a953d82183dcfe7d4a1edfb12e179d9617338bd49e904d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7ad6b7f02ec6c8a953d82183dcfe7d4a1edfb12e179d9617338bd49e904d73->enter($__internal_eb7ad6b7f02ec6c8a953d82183dcfe7d4a1edfb12e179d9617338bd49e904d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_813f92562550db8a7de8919a8e42022365faf630907f9159826cc36326967aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813f92562550db8a7de8919a8e42022365faf630907f9159826cc36326967aa3->enter($__internal_813f92562550db8a7de8919a8e42022365faf630907f9159826cc36326967aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_813f92562550db8a7de8919a8e42022365faf630907f9159826cc36326967aa3->leave($__internal_813f92562550db8a7de8919a8e42022365faf630907f9159826cc36326967aa3_prof);

        
        $__internal_eb7ad6b7f02ec6c8a953d82183dcfe7d4a1edfb12e179d9617338bd49e904d73->leave($__internal_eb7ad6b7f02ec6c8a953d82183dcfe7d4a1edfb12e179d9617338bd49e904d73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
