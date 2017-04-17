<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5c6fc4667820a0b78bbd22d0688f5579f4eebae691ebd3e0d5622b23cb5a9901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_cebd7b8d417832420d9bc1c1eef2efa14e07a783882508b013a186f5231a9d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebd7b8d417832420d9bc1c1eef2efa14e07a783882508b013a186f5231a9d5d->enter($__internal_cebd7b8d417832420d9bc1c1eef2efa14e07a783882508b013a186f5231a9d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_55d583396664c69a16e1e35bcf4a9141450b9ab371bde1073abbafcef4148d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d583396664c69a16e1e35bcf4a9141450b9ab371bde1073abbafcef4148d61->enter($__internal_55d583396664c69a16e1e35bcf4a9141450b9ab371bde1073abbafcef4148d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebd7b8d417832420d9bc1c1eef2efa14e07a783882508b013a186f5231a9d5d->leave($__internal_cebd7b8d417832420d9bc1c1eef2efa14e07a783882508b013a186f5231a9d5d_prof);

        
        $__internal_55d583396664c69a16e1e35bcf4a9141450b9ab371bde1073abbafcef4148d61->leave($__internal_55d583396664c69a16e1e35bcf4a9141450b9ab371bde1073abbafcef4148d61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9d00466c1612291158f90b69d4b2c108ebe5ed29a64623ed4a83716fbec7c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d00466c1612291158f90b69d4b2c108ebe5ed29a64623ed4a83716fbec7c4f->enter($__internal_c9d00466c1612291158f90b69d4b2c108ebe5ed29a64623ed4a83716fbec7c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44ac94cf3b7791f11767ebe554a2a632111e1881f732321bcfae044b7edb1d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ac94cf3b7791f11767ebe554a2a632111e1881f732321bcfae044b7edb1d70->enter($__internal_44ac94cf3b7791f11767ebe554a2a632111e1881f732321bcfae044b7edb1d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_44ac94cf3b7791f11767ebe554a2a632111e1881f732321bcfae044b7edb1d70->leave($__internal_44ac94cf3b7791f11767ebe554a2a632111e1881f732321bcfae044b7edb1d70_prof);

        
        $__internal_c9d00466c1612291158f90b69d4b2c108ebe5ed29a64623ed4a83716fbec7c4f->leave($__internal_c9d00466c1612291158f90b69d4b2c108ebe5ed29a64623ed4a83716fbec7c4f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
