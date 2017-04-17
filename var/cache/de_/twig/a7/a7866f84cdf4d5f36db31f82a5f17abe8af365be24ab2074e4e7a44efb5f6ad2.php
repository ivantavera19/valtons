<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_25be28adaa5d4a98f693aba972d00701b61b4e9c4fd11f08c8e10109d2a20c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b54c1227c5cdaec0619102d423da0702b3a0eadb0103dafd55777d0eef267f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54c1227c5cdaec0619102d423da0702b3a0eadb0103dafd55777d0eef267f68->enter($__internal_b54c1227c5cdaec0619102d423da0702b3a0eadb0103dafd55777d0eef267f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5aa12c1a5c04d0ee7a95922278e593187ac38ca2b2a73c52e10c983758d16b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa12c1a5c04d0ee7a95922278e593187ac38ca2b2a73c52e10c983758d16b32->enter($__internal_5aa12c1a5c04d0ee7a95922278e593187ac38ca2b2a73c52e10c983758d16b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b54c1227c5cdaec0619102d423da0702b3a0eadb0103dafd55777d0eef267f68->leave($__internal_b54c1227c5cdaec0619102d423da0702b3a0eadb0103dafd55777d0eef267f68_prof);

        
        $__internal_5aa12c1a5c04d0ee7a95922278e593187ac38ca2b2a73c52e10c983758d16b32->leave($__internal_5aa12c1a5c04d0ee7a95922278e593187ac38ca2b2a73c52e10c983758d16b32_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b93110353159e55d2dca2670c4edc702d1504a6f36c0e38e304f285e0a4b67e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93110353159e55d2dca2670c4edc702d1504a6f36c0e38e304f285e0a4b67e5->enter($__internal_b93110353159e55d2dca2670c4edc702d1504a6f36c0e38e304f285e0a4b67e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c3356ca65a718dca08623a8aca1d0d828efbafd1717c47d1c329fa88357c2bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3356ca65a718dca08623a8aca1d0d828efbafd1717c47d1c329fa88357c2bd6->enter($__internal_c3356ca65a718dca08623a8aca1d0d828efbafd1717c47d1c329fa88357c2bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c3356ca65a718dca08623a8aca1d0d828efbafd1717c47d1c329fa88357c2bd6->leave($__internal_c3356ca65a718dca08623a8aca1d0d828efbafd1717c47d1c329fa88357c2bd6_prof);

        
        $__internal_b93110353159e55d2dca2670c4edc702d1504a6f36c0e38e304f285e0a4b67e5->leave($__internal_b93110353159e55d2dca2670c4edc702d1504a6f36c0e38e304f285e0a4b67e5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ccafb39b70a16e1437d20a050878be8fc46f5cbf7e5f3aff3b7d9dfe42b9ba11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccafb39b70a16e1437d20a050878be8fc46f5cbf7e5f3aff3b7d9dfe42b9ba11->enter($__internal_ccafb39b70a16e1437d20a050878be8fc46f5cbf7e5f3aff3b7d9dfe42b9ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ee36229acf921d38540ccad4417875c8d96f9fd0597e2fbe7882e4217114ea23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee36229acf921d38540ccad4417875c8d96f9fd0597e2fbe7882e4217114ea23->enter($__internal_ee36229acf921d38540ccad4417875c8d96f9fd0597e2fbe7882e4217114ea23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ee36229acf921d38540ccad4417875c8d96f9fd0597e2fbe7882e4217114ea23->leave($__internal_ee36229acf921d38540ccad4417875c8d96f9fd0597e2fbe7882e4217114ea23_prof);

        
        $__internal_ccafb39b70a16e1437d20a050878be8fc46f5cbf7e5f3aff3b7d9dfe42b9ba11->leave($__internal_ccafb39b70a16e1437d20a050878be8fc46f5cbf7e5f3aff3b7d9dfe42b9ba11_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_763e9bd0d42a260c5225289e3be37e007ad734675d5dfdf722a7cce322615687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763e9bd0d42a260c5225289e3be37e007ad734675d5dfdf722a7cce322615687->enter($__internal_763e9bd0d42a260c5225289e3be37e007ad734675d5dfdf722a7cce322615687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dfba37b2a32f182216bafb2fc3d3ac7f10871b15fc077f4bed62d5d80f688a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfba37b2a32f182216bafb2fc3d3ac7f10871b15fc077f4bed62d5d80f688a4f->enter($__internal_dfba37b2a32f182216bafb2fc3d3ac7f10871b15fc077f4bed62d5d80f688a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfba37b2a32f182216bafb2fc3d3ac7f10871b15fc077f4bed62d5d80f688a4f->leave($__internal_dfba37b2a32f182216bafb2fc3d3ac7f10871b15fc077f4bed62d5d80f688a4f_prof);

        
        $__internal_763e9bd0d42a260c5225289e3be37e007ad734675d5dfdf722a7cce322615687->leave($__internal_763e9bd0d42a260c5225289e3be37e007ad734675d5dfdf722a7cce322615687_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
