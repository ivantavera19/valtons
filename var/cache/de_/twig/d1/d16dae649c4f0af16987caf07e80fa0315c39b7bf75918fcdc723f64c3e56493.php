<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_da228e3fcc8ec3a40116c7b101b38cdcd9a3ef07e489d1aa24d922ed845da0fb extends Twig_Template
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
        $__internal_254e4cbb2bd93e6b977e029a906d518d0307298435ed66d5880fa81f95163828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254e4cbb2bd93e6b977e029a906d518d0307298435ed66d5880fa81f95163828->enter($__internal_254e4cbb2bd93e6b977e029a906d518d0307298435ed66d5880fa81f95163828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_20f3044d35471175c63c55cc8a1a2a97dfcdfba9929a57faa81c112a27b80e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f3044d35471175c63c55cc8a1a2a97dfcdfba9929a57faa81c112a27b80e12->enter($__internal_20f3044d35471175c63c55cc8a1a2a97dfcdfba9929a57faa81c112a27b80e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_254e4cbb2bd93e6b977e029a906d518d0307298435ed66d5880fa81f95163828->leave($__internal_254e4cbb2bd93e6b977e029a906d518d0307298435ed66d5880fa81f95163828_prof);

        
        $__internal_20f3044d35471175c63c55cc8a1a2a97dfcdfba9929a57faa81c112a27b80e12->leave($__internal_20f3044d35471175c63c55cc8a1a2a97dfcdfba9929a57faa81c112a27b80e12_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_075ba636f759d2eea2db8fb93bf4dc370939e4ce742d27c651d611da05f10d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075ba636f759d2eea2db8fb93bf4dc370939e4ce742d27c651d611da05f10d51->enter($__internal_075ba636f759d2eea2db8fb93bf4dc370939e4ce742d27c651d611da05f10d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_19a2041a95539a49c3b70007308525eb68d24546856166be733c5dfb35140a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a2041a95539a49c3b70007308525eb68d24546856166be733c5dfb35140a2e->enter($__internal_19a2041a95539a49c3b70007308525eb68d24546856166be733c5dfb35140a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_19a2041a95539a49c3b70007308525eb68d24546856166be733c5dfb35140a2e->leave($__internal_19a2041a95539a49c3b70007308525eb68d24546856166be733c5dfb35140a2e_prof);

        
        $__internal_075ba636f759d2eea2db8fb93bf4dc370939e4ce742d27c651d611da05f10d51->leave($__internal_075ba636f759d2eea2db8fb93bf4dc370939e4ce742d27c651d611da05f10d51_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5497e8d6dae95888faef8c00319c499c661d9337389da236d5d460b1ae0bd796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5497e8d6dae95888faef8c00319c499c661d9337389da236d5d460b1ae0bd796->enter($__internal_5497e8d6dae95888faef8c00319c499c661d9337389da236d5d460b1ae0bd796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cfc6dac599c11e3e046b16bbef81bd176c089b885d1ef9a1188093ee0da5bea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc6dac599c11e3e046b16bbef81bd176c089b885d1ef9a1188093ee0da5bea7->enter($__internal_cfc6dac599c11e3e046b16bbef81bd176c089b885d1ef9a1188093ee0da5bea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cfc6dac599c11e3e046b16bbef81bd176c089b885d1ef9a1188093ee0da5bea7->leave($__internal_cfc6dac599c11e3e046b16bbef81bd176c089b885d1ef9a1188093ee0da5bea7_prof);

        
        $__internal_5497e8d6dae95888faef8c00319c499c661d9337389da236d5d460b1ae0bd796->leave($__internal_5497e8d6dae95888faef8c00319c499c661d9337389da236d5d460b1ae0bd796_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cbdb3b8c3fe79e6880ce0af65710ecfa5725a8dad662d2d86a2b5ca19743fd08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdb3b8c3fe79e6880ce0af65710ecfa5725a8dad662d2d86a2b5ca19743fd08->enter($__internal_cbdb3b8c3fe79e6880ce0af65710ecfa5725a8dad662d2d86a2b5ca19743fd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2cf501ac1fa3e08830eb928b6300be83bb0ba1d4bb8c7f218c008cf159dbf7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf501ac1fa3e08830eb928b6300be83bb0ba1d4bb8c7f218c008cf159dbf7e7->enter($__internal_2cf501ac1fa3e08830eb928b6300be83bb0ba1d4bb8c7f218c008cf159dbf7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2cf501ac1fa3e08830eb928b6300be83bb0ba1d4bb8c7f218c008cf159dbf7e7->leave($__internal_2cf501ac1fa3e08830eb928b6300be83bb0ba1d4bb8c7f218c008cf159dbf7e7_prof);

        
        $__internal_cbdb3b8c3fe79e6880ce0af65710ecfa5725a8dad662d2d86a2b5ca19743fd08->leave($__internal_cbdb3b8c3fe79e6880ce0af65710ecfa5725a8dad662d2d86a2b5ca19743fd08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
