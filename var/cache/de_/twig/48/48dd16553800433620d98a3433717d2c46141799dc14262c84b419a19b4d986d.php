<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_50cfe4a28bd752e7f7163ae78b6ed4e4ba6a566b7992dc3e108aaa29951d6546 extends Twig_Template
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
        $__internal_667581c934a38137b9749f2f09072e75a9a4340620695c0bfb772390b8840a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667581c934a38137b9749f2f09072e75a9a4340620695c0bfb772390b8840a5e->enter($__internal_667581c934a38137b9749f2f09072e75a9a4340620695c0bfb772390b8840a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_c5d0cc5ab465dba00a9db7a39e2c9083668ed425594f0c686adbca53920a82a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d0cc5ab465dba00a9db7a39e2c9083668ed425594f0c686adbca53920a82a1->enter($__internal_c5d0cc5ab465dba00a9db7a39e2c9083668ed425594f0c686adbca53920a82a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_667581c934a38137b9749f2f09072e75a9a4340620695c0bfb772390b8840a5e->leave($__internal_667581c934a38137b9749f2f09072e75a9a4340620695c0bfb772390b8840a5e_prof);

        
        $__internal_c5d0cc5ab465dba00a9db7a39e2c9083668ed425594f0c686adbca53920a82a1->leave($__internal_c5d0cc5ab465dba00a9db7a39e2c9083668ed425594f0c686adbca53920a82a1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4db588cc2cc46961627e54fb4f565df6142734b46e1efca552056569f3ea7c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db588cc2cc46961627e54fb4f565df6142734b46e1efca552056569f3ea7c9e->enter($__internal_4db588cc2cc46961627e54fb4f565df6142734b46e1efca552056569f3ea7c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_dbf22d2e1f412dbb5edc358f6ed20303cc462d728eff7351418dcd75b165d39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf22d2e1f412dbb5edc358f6ed20303cc462d728eff7351418dcd75b165d39d->enter($__internal_dbf22d2e1f412dbb5edc358f6ed20303cc462d728eff7351418dcd75b165d39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_dbf22d2e1f412dbb5edc358f6ed20303cc462d728eff7351418dcd75b165d39d->leave($__internal_dbf22d2e1f412dbb5edc358f6ed20303cc462d728eff7351418dcd75b165d39d_prof);

        
        $__internal_4db588cc2cc46961627e54fb4f565df6142734b46e1efca552056569f3ea7c9e->leave($__internal_4db588cc2cc46961627e54fb4f565df6142734b46e1efca552056569f3ea7c9e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1faf305ff13b7d50115e29f7f0c02f9a19d20e92910d1181365f96543c71315f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1faf305ff13b7d50115e29f7f0c02f9a19d20e92910d1181365f96543c71315f->enter($__internal_1faf305ff13b7d50115e29f7f0c02f9a19d20e92910d1181365f96543c71315f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3c5921b0ef8c31d5fe25dfee6b47c4b7b9782f9a4805f81a6bafa19a1f637794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5921b0ef8c31d5fe25dfee6b47c4b7b9782f9a4805f81a6bafa19a1f637794->enter($__internal_3c5921b0ef8c31d5fe25dfee6b47c4b7b9782f9a4805f81a6bafa19a1f637794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c5921b0ef8c31d5fe25dfee6b47c4b7b9782f9a4805f81a6bafa19a1f637794->leave($__internal_3c5921b0ef8c31d5fe25dfee6b47c4b7b9782f9a4805f81a6bafa19a1f637794_prof);

        
        $__internal_1faf305ff13b7d50115e29f7f0c02f9a19d20e92910d1181365f96543c71315f->leave($__internal_1faf305ff13b7d50115e29f7f0c02f9a19d20e92910d1181365f96543c71315f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43d742e2f372d83b52938daa02ea01bb8e3e97cc8d5f2b6f30271b1c930b6440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d742e2f372d83b52938daa02ea01bb8e3e97cc8d5f2b6f30271b1c930b6440->enter($__internal_43d742e2f372d83b52938daa02ea01bb8e3e97cc8d5f2b6f30271b1c930b6440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8d73bfdd2dacc823745b596ea5394ef285a8341b3067f4cddfc6a74414601122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d73bfdd2dacc823745b596ea5394ef285a8341b3067f4cddfc6a74414601122->enter($__internal_8d73bfdd2dacc823745b596ea5394ef285a8341b3067f4cddfc6a74414601122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8d73bfdd2dacc823745b596ea5394ef285a8341b3067f4cddfc6a74414601122->leave($__internal_8d73bfdd2dacc823745b596ea5394ef285a8341b3067f4cddfc6a74414601122_prof);

        
        $__internal_43d742e2f372d83b52938daa02ea01bb8e3e97cc8d5f2b6f30271b1c930b6440->leave($__internal_43d742e2f372d83b52938daa02ea01bb8e3e97cc8d5f2b6f30271b1c930b6440_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
