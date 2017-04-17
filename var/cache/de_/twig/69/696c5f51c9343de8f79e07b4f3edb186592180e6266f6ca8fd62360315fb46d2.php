<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_041edde2d2a2e3085913ea5de7b9370a87f28ad002adcdbe56e455ae9bf3d98a extends Twig_Template
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
        $__internal_014c4f0e7a17fdcefe1d7c2e7fd9ab41a614997b5e5701a08df6b2c19ebfb7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014c4f0e7a17fdcefe1d7c2e7fd9ab41a614997b5e5701a08df6b2c19ebfb7b9->enter($__internal_014c4f0e7a17fdcefe1d7c2e7fd9ab41a614997b5e5701a08df6b2c19ebfb7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_17f9ab22f9fbdf9c22cd771f16600263936ad74ff418cc8327f68376c2da3ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f9ab22f9fbdf9c22cd771f16600263936ad74ff418cc8327f68376c2da3ed4->enter($__internal_17f9ab22f9fbdf9c22cd771f16600263936ad74ff418cc8327f68376c2da3ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_014c4f0e7a17fdcefe1d7c2e7fd9ab41a614997b5e5701a08df6b2c19ebfb7b9->leave($__internal_014c4f0e7a17fdcefe1d7c2e7fd9ab41a614997b5e5701a08df6b2c19ebfb7b9_prof);

        
        $__internal_17f9ab22f9fbdf9c22cd771f16600263936ad74ff418cc8327f68376c2da3ed4->leave($__internal_17f9ab22f9fbdf9c22cd771f16600263936ad74ff418cc8327f68376c2da3ed4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
