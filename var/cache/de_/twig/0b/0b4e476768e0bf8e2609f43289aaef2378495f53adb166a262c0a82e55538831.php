<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9248aa9b8dadda9641e79e777ff7c7fed0913cd52329b9632db24d7d90b57650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_53fb8de8486e8ad5bf5caed7ec5e85b6327c097169045b1d7a50651267658836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fb8de8486e8ad5bf5caed7ec5e85b6327c097169045b1d7a50651267658836->enter($__internal_53fb8de8486e8ad5bf5caed7ec5e85b6327c097169045b1d7a50651267658836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6be23fc6492a002c2fc25fab329b061fa39d6cb9f182f312b2975e532860c3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be23fc6492a002c2fc25fab329b061fa39d6cb9f182f312b2975e532860c3f1->enter($__internal_6be23fc6492a002c2fc25fab329b061fa39d6cb9f182f312b2975e532860c3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53fb8de8486e8ad5bf5caed7ec5e85b6327c097169045b1d7a50651267658836->leave($__internal_53fb8de8486e8ad5bf5caed7ec5e85b6327c097169045b1d7a50651267658836_prof);

        
        $__internal_6be23fc6492a002c2fc25fab329b061fa39d6cb9f182f312b2975e532860c3f1->leave($__internal_6be23fc6492a002c2fc25fab329b061fa39d6cb9f182f312b2975e532860c3f1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_034e8d2c94b75930de075f6e0b107262b87d361f993c1e09f26e0218bf6e1c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034e8d2c94b75930de075f6e0b107262b87d361f993c1e09f26e0218bf6e1c65->enter($__internal_034e8d2c94b75930de075f6e0b107262b87d361f993c1e09f26e0218bf6e1c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_331053e29b872a550da7d7f27a23f2407e9e45167a9a19a47dc3642b6fe993cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331053e29b872a550da7d7f27a23f2407e9e45167a9a19a47dc3642b6fe993cc->enter($__internal_331053e29b872a550da7d7f27a23f2407e9e45167a9a19a47dc3642b6fe993cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_331053e29b872a550da7d7f27a23f2407e9e45167a9a19a47dc3642b6fe993cc->leave($__internal_331053e29b872a550da7d7f27a23f2407e9e45167a9a19a47dc3642b6fe993cc_prof);

        
        $__internal_034e8d2c94b75930de075f6e0b107262b87d361f993c1e09f26e0218bf6e1c65->leave($__internal_034e8d2c94b75930de075f6e0b107262b87d361f993c1e09f26e0218bf6e1c65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
