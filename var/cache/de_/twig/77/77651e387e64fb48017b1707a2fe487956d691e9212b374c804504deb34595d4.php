<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_5987b82a575fd2f52064c9ac96ba54210ece909006dd8a0b7422f7a05a46c3a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_8079d0556967024de0218b2821b813ad56e65b7979e4d3fc3a5b967711750c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8079d0556967024de0218b2821b813ad56e65b7979e4d3fc3a5b967711750c45->enter($__internal_8079d0556967024de0218b2821b813ad56e65b7979e4d3fc3a5b967711750c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_f2fc370b9785a3ae52c2dfd85dc3b4197995419def0eac34d082c99b9b07a2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fc370b9785a3ae52c2dfd85dc3b4197995419def0eac34d082c99b9b07a2b7->enter($__internal_f2fc370b9785a3ae52c2dfd85dc3b4197995419def0eac34d082c99b9b07a2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8079d0556967024de0218b2821b813ad56e65b7979e4d3fc3a5b967711750c45->leave($__internal_8079d0556967024de0218b2821b813ad56e65b7979e4d3fc3a5b967711750c45_prof);

        
        $__internal_f2fc370b9785a3ae52c2dfd85dc3b4197995419def0eac34d082c99b9b07a2b7->leave($__internal_f2fc370b9785a3ae52c2dfd85dc3b4197995419def0eac34d082c99b9b07a2b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66bebc8c893c540f98968d91d87de25211873068bbba60a8c8c70ce995e3ab68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bebc8c893c540f98968d91d87de25211873068bbba60a8c8c70ce995e3ab68->enter($__internal_66bebc8c893c540f98968d91d87de25211873068bbba60a8c8c70ce995e3ab68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c36380667b59582f5fab56967378812e5fbfcb291f5e933b7c9b81fae5b9aba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36380667b59582f5fab56967378812e5fbfcb291f5e933b7c9b81fae5b9aba4->enter($__internal_c36380667b59582f5fab56967378812e5fbfcb291f5e933b7c9b81fae5b9aba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c36380667b59582f5fab56967378812e5fbfcb291f5e933b7c9b81fae5b9aba4->leave($__internal_c36380667b59582f5fab56967378812e5fbfcb291f5e933b7c9b81fae5b9aba4_prof);

        
        $__internal_66bebc8c893c540f98968d91d87de25211873068bbba60a8c8c70ce995e3ab68->leave($__internal_66bebc8c893c540f98968d91d87de25211873068bbba60a8c8c70ce995e3ab68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
