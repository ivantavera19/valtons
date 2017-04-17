<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_13a26d36e81e85bd08c2b206652758a8cb7dd98bdde5d5ea8a2e95800cc99688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e8e6a27441178486bfad9f6e7aafe4d29a3393e5cc2282d87bdee47f77c1d24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e6a27441178486bfad9f6e7aafe4d29a3393e5cc2282d87bdee47f77c1d24a->enter($__internal_e8e6a27441178486bfad9f6e7aafe4d29a3393e5cc2282d87bdee47f77c1d24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a41efceab37afc52c07cee6ad1526f7465df6291277d94da78c723cd75d4f7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41efceab37afc52c07cee6ad1526f7465df6291277d94da78c723cd75d4f7b4->enter($__internal_a41efceab37afc52c07cee6ad1526f7465df6291277d94da78c723cd75d4f7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e6a27441178486bfad9f6e7aafe4d29a3393e5cc2282d87bdee47f77c1d24a->leave($__internal_e8e6a27441178486bfad9f6e7aafe4d29a3393e5cc2282d87bdee47f77c1d24a_prof);

        
        $__internal_a41efceab37afc52c07cee6ad1526f7465df6291277d94da78c723cd75d4f7b4->leave($__internal_a41efceab37afc52c07cee6ad1526f7465df6291277d94da78c723cd75d4f7b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c459964d4cf62351a11f996e25c901df27083a7201c8d7e0a1a090fd344fe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c459964d4cf62351a11f996e25c901df27083a7201c8d7e0a1a090fd344fe32->enter($__internal_1c459964d4cf62351a11f996e25c901df27083a7201c8d7e0a1a090fd344fe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_08528c0aaf7900f2297191eb764518fb57ae9f2ce34120ed7c5c0acb622b7b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08528c0aaf7900f2297191eb764518fb57ae9f2ce34120ed7c5c0acb622b7b2d->enter($__internal_08528c0aaf7900f2297191eb764518fb57ae9f2ce34120ed7c5c0acb622b7b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_08528c0aaf7900f2297191eb764518fb57ae9f2ce34120ed7c5c0acb622b7b2d->leave($__internal_08528c0aaf7900f2297191eb764518fb57ae9f2ce34120ed7c5c0acb622b7b2d_prof);

        
        $__internal_1c459964d4cf62351a11f996e25c901df27083a7201c8d7e0a1a090fd344fe32->leave($__internal_1c459964d4cf62351a11f996e25c901df27083a7201c8d7e0a1a090fd344fe32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
