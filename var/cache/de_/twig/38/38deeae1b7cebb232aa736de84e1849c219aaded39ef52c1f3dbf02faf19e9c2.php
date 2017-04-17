<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5482f9a861099b4c9932fefbbe9fc01ae0fcb81082a41152c096e84a01c43f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_06e3e23d56a253d64af4df3fd5e94104e0182de9bd4ba80e55cb912c203d8fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e3e23d56a253d64af4df3fd5e94104e0182de9bd4ba80e55cb912c203d8fde->enter($__internal_06e3e23d56a253d64af4df3fd5e94104e0182de9bd4ba80e55cb912c203d8fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_40e81448124d6b2fb1f611145abd35c23e669591f271d8a326df4b6f92234592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e81448124d6b2fb1f611145abd35c23e669591f271d8a326df4b6f92234592->enter($__internal_40e81448124d6b2fb1f611145abd35c23e669591f271d8a326df4b6f92234592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e3e23d56a253d64af4df3fd5e94104e0182de9bd4ba80e55cb912c203d8fde->leave($__internal_06e3e23d56a253d64af4df3fd5e94104e0182de9bd4ba80e55cb912c203d8fde_prof);

        
        $__internal_40e81448124d6b2fb1f611145abd35c23e669591f271d8a326df4b6f92234592->leave($__internal_40e81448124d6b2fb1f611145abd35c23e669591f271d8a326df4b6f92234592_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a848dd4ac3bfffa99365bf2443fb5c93d34c30f35479b5278b65a42555dca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a848dd4ac3bfffa99365bf2443fb5c93d34c30f35479b5278b65a42555dca93->enter($__internal_3a848dd4ac3bfffa99365bf2443fb5c93d34c30f35479b5278b65a42555dca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d16b6bd48432622fb639c9d11b5f51e34a037c79243dc9d546b7d3aa63616b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16b6bd48432622fb639c9d11b5f51e34a037c79243dc9d546b7d3aa63616b73->enter($__internal_d16b6bd48432622fb639c9d11b5f51e34a037c79243dc9d546b7d3aa63616b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d16b6bd48432622fb639c9d11b5f51e34a037c79243dc9d546b7d3aa63616b73->leave($__internal_d16b6bd48432622fb639c9d11b5f51e34a037c79243dc9d546b7d3aa63616b73_prof);

        
        $__internal_3a848dd4ac3bfffa99365bf2443fb5c93d34c30f35479b5278b65a42555dca93->leave($__internal_3a848dd4ac3bfffa99365bf2443fb5c93d34c30f35479b5278b65a42555dca93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
