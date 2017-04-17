<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_4a490c91d854d3f736e2047b4c80d8748fc989ce9e33afd8d1c6349c58ab198e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_e9ab02d599b2291d9894e923b68213a41576a544417994284977fa06bf63b659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ab02d599b2291d9894e923b68213a41576a544417994284977fa06bf63b659->enter($__internal_e9ab02d599b2291d9894e923b68213a41576a544417994284977fa06bf63b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_0b51cc2b8700c9f302b9e4b0c0a7d21dc35ee402a15c6559d9d709b4259ab3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b51cc2b8700c9f302b9e4b0c0a7d21dc35ee402a15c6559d9d709b4259ab3fd->enter($__internal_0b51cc2b8700c9f302b9e4b0c0a7d21dc35ee402a15c6559d9d709b4259ab3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ab02d599b2291d9894e923b68213a41576a544417994284977fa06bf63b659->leave($__internal_e9ab02d599b2291d9894e923b68213a41576a544417994284977fa06bf63b659_prof);

        
        $__internal_0b51cc2b8700c9f302b9e4b0c0a7d21dc35ee402a15c6559d9d709b4259ab3fd->leave($__internal_0b51cc2b8700c9f302b9e4b0c0a7d21dc35ee402a15c6559d9d709b4259ab3fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1480230f39f51d8b7e752ba7c3521f5df44830b933e2502b08553d3e74b5239e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1480230f39f51d8b7e752ba7c3521f5df44830b933e2502b08553d3e74b5239e->enter($__internal_1480230f39f51d8b7e752ba7c3521f5df44830b933e2502b08553d3e74b5239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_473cf56a39ad7665a753279f801767c9a987fabe764ad01888a790cadeb84744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473cf56a39ad7665a753279f801767c9a987fabe764ad01888a790cadeb84744->enter($__internal_473cf56a39ad7665a753279f801767c9a987fabe764ad01888a790cadeb84744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_473cf56a39ad7665a753279f801767c9a987fabe764ad01888a790cadeb84744->leave($__internal_473cf56a39ad7665a753279f801767c9a987fabe764ad01888a790cadeb84744_prof);

        
        $__internal_1480230f39f51d8b7e752ba7c3521f5df44830b933e2502b08553d3e74b5239e->leave($__internal_1480230f39f51d8b7e752ba7c3521f5df44830b933e2502b08553d3e74b5239e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
