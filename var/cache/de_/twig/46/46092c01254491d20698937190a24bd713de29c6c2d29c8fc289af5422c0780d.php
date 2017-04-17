<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bc4aa508fa507f6e799d778c57026a449a85d83d46c32467104ce2b28c814a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fe469f2d8c5318ace466e795bb613b39e78fd6caba09ebdd014a45cff8498ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe469f2d8c5318ace466e795bb613b39e78fd6caba09ebdd014a45cff8498ed->enter($__internal_7fe469f2d8c5318ace466e795bb613b39e78fd6caba09ebdd014a45cff8498ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_26e3d3e13f75307f701084c2524de1305054cbcf5ea6c06f7bce7235d8f904cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e3d3e13f75307f701084c2524de1305054cbcf5ea6c06f7bce7235d8f904cb->enter($__internal_26e3d3e13f75307f701084c2524de1305054cbcf5ea6c06f7bce7235d8f904cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7fe469f2d8c5318ace466e795bb613b39e78fd6caba09ebdd014a45cff8498ed->leave($__internal_7fe469f2d8c5318ace466e795bb613b39e78fd6caba09ebdd014a45cff8498ed_prof);

        
        $__internal_26e3d3e13f75307f701084c2524de1305054cbcf5ea6c06f7bce7235d8f904cb->leave($__internal_26e3d3e13f75307f701084c2524de1305054cbcf5ea6c06f7bce7235d8f904cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
