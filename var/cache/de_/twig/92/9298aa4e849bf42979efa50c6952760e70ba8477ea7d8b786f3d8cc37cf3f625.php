<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b8b1cad967cff5449af79b4eff5b76dbc7c86453af6484d4a24ecc182a27defb extends Twig_Template
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
        $__internal_aaea7f674ad0ca8ced7054ebf906457621970ddeb13d594c54cccf826908dccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaea7f674ad0ca8ced7054ebf906457621970ddeb13d594c54cccf826908dccd->enter($__internal_aaea7f674ad0ca8ced7054ebf906457621970ddeb13d594c54cccf826908dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_8054e23d4e9c6f8f3b9669894dd01027c1bb11856b45c08618222f6650c39b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8054e23d4e9c6f8f3b9669894dd01027c1bb11856b45c08618222f6650c39b7b->enter($__internal_8054e23d4e9c6f8f3b9669894dd01027c1bb11856b45c08618222f6650c39b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aaea7f674ad0ca8ced7054ebf906457621970ddeb13d594c54cccf826908dccd->leave($__internal_aaea7f674ad0ca8ced7054ebf906457621970ddeb13d594c54cccf826908dccd_prof);

        
        $__internal_8054e23d4e9c6f8f3b9669894dd01027c1bb11856b45c08618222f6650c39b7b->leave($__internal_8054e23d4e9c6f8f3b9669894dd01027c1bb11856b45c08618222f6650c39b7b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fff7ab499ab95094b9cafb601369e4bd7a0e853e040e086ba1f0108d00ff023d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff7ab499ab95094b9cafb601369e4bd7a0e853e040e086ba1f0108d00ff023d->enter($__internal_fff7ab499ab95094b9cafb601369e4bd7a0e853e040e086ba1f0108d00ff023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a9e85451e6ca97db41c578fb9309cd92c841d9bcc64db180ed0b21ae2df06c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e85451e6ca97db41c578fb9309cd92c841d9bcc64db180ed0b21ae2df06c4a->enter($__internal_a9e85451e6ca97db41c578fb9309cd92c841d9bcc64db180ed0b21ae2df06c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a9e85451e6ca97db41c578fb9309cd92c841d9bcc64db180ed0b21ae2df06c4a->leave($__internal_a9e85451e6ca97db41c578fb9309cd92c841d9bcc64db180ed0b21ae2df06c4a_prof);

        
        $__internal_fff7ab499ab95094b9cafb601369e4bd7a0e853e040e086ba1f0108d00ff023d->leave($__internal_fff7ab499ab95094b9cafb601369e4bd7a0e853e040e086ba1f0108d00ff023d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_125e4451f2172fed25e94df45989794fe2c8cb3d5a8b9667c639a3686f07e09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125e4451f2172fed25e94df45989794fe2c8cb3d5a8b9667c639a3686f07e09c->enter($__internal_125e4451f2172fed25e94df45989794fe2c8cb3d5a8b9667c639a3686f07e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dbfbe1a270a998406fcb303c037728cde26a1e0a36298a10b626a8a77ed38e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfbe1a270a998406fcb303c037728cde26a1e0a36298a10b626a8a77ed38e71->enter($__internal_dbfbe1a270a998406fcb303c037728cde26a1e0a36298a10b626a8a77ed38e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dbfbe1a270a998406fcb303c037728cde26a1e0a36298a10b626a8a77ed38e71->leave($__internal_dbfbe1a270a998406fcb303c037728cde26a1e0a36298a10b626a8a77ed38e71_prof);

        
        $__internal_125e4451f2172fed25e94df45989794fe2c8cb3d5a8b9667c639a3686f07e09c->leave($__internal_125e4451f2172fed25e94df45989794fe2c8cb3d5a8b9667c639a3686f07e09c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_caf1c795e9784ee4a3b6b625e10aec1d8d72d2a6b0edb6415d45e3c1df8beb18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf1c795e9784ee4a3b6b625e10aec1d8d72d2a6b0edb6415d45e3c1df8beb18->enter($__internal_caf1c795e9784ee4a3b6b625e10aec1d8d72d2a6b0edb6415d45e3c1df8beb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d2fa03e35b4b81a321894f3f9ef042a8a84b61131dbca425916887be728e3026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fa03e35b4b81a321894f3f9ef042a8a84b61131dbca425916887be728e3026->enter($__internal_d2fa03e35b4b81a321894f3f9ef042a8a84b61131dbca425916887be728e3026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d2fa03e35b4b81a321894f3f9ef042a8a84b61131dbca425916887be728e3026->leave($__internal_d2fa03e35b4b81a321894f3f9ef042a8a84b61131dbca425916887be728e3026_prof);

        
        $__internal_caf1c795e9784ee4a3b6b625e10aec1d8d72d2a6b0edb6415d45e3c1df8beb18->leave($__internal_caf1c795e9784ee4a3b6b625e10aec1d8d72d2a6b0edb6415d45e3c1df8beb18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
