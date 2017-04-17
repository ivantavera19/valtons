<?php

/* default/index.html.twig */
class __TwigTemplate_45db0d4afc198d9f9af93a414a0c9a53e8d762f35dbbd22a88d3240cd43a43f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d0fe9452b11526e0b67b0c827360e30ffb90ef3b48c987b0b3f81fab798b6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0fe9452b11526e0b67b0c827360e30ffb90ef3b48c987b0b3f81fab798b6d2->enter($__internal_1d0fe9452b11526e0b67b0c827360e30ffb90ef3b48c987b0b3f81fab798b6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_eb16cc1672f9fdc3a548d98fc37296b5a5f6f636c90711e05d76f75e5e5e1938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb16cc1672f9fdc3a548d98fc37296b5a5f6f636c90711e05d76f75e5e5e1938->enter($__internal_eb16cc1672f9fdc3a548d98fc37296b5a5f6f636c90711e05d76f75e5e5e1938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0fe9452b11526e0b67b0c827360e30ffb90ef3b48c987b0b3f81fab798b6d2->leave($__internal_1d0fe9452b11526e0b67b0c827360e30ffb90ef3b48c987b0b3f81fab798b6d2_prof);

        
        $__internal_eb16cc1672f9fdc3a548d98fc37296b5a5f6f636c90711e05d76f75e5e5e1938->leave($__internal_eb16cc1672f9fdc3a548d98fc37296b5a5f6f636c90711e05d76f75e5e5e1938_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32eb571c425833b664a9fb9be4140bea31e808ccd5523f08b4de8b71969b6969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eb571c425833b664a9fb9be4140bea31e808ccd5523f08b4de8b71969b6969->enter($__internal_32eb571c425833b664a9fb9be4140bea31e808ccd5523f08b4de8b71969b6969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dd0534e09101130476ac6a064a3c4333bd4240b1c89eec55a6ddabb9ff15a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd0534e09101130476ac6a064a3c4333bd4240b1c89eec55a6ddabb9ff15a40->enter($__internal_7dd0534e09101130476ac6a064a3c4333bd4240b1c89eec55a6ddabb9ff15a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_7dd0534e09101130476ac6a064a3c4333bd4240b1c89eec55a6ddabb9ff15a40->leave($__internal_7dd0534e09101130476ac6a064a3c4333bd4240b1c89eec55a6ddabb9ff15a40_prof);

        
        $__internal_32eb571c425833b664a9fb9be4140bea31e808ccd5523f08b4de8b71969b6969->leave($__internal_32eb571c425833b664a9fb9be4140bea31e808ccd5523f08b4de8b71969b6969_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\default\\index.html.twig");
    }
}
