<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_23e7ecc6eeea9058c5a486a1996fc3c235569d49861e9cd0bac932b6366171f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5882b41b757c2b902074cf8953ea89e6c986f31395e23d3752cb930883b73cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5882b41b757c2b902074cf8953ea89e6c986f31395e23d3752cb930883b73cd6->enter($__internal_5882b41b757c2b902074cf8953ea89e6c986f31395e23d3752cb930883b73cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_c13c875346df1a391137fae285a8405d3ca9703dae8d0b0b769c58fe54fd1e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13c875346df1a391137fae285a8405d3ca9703dae8d0b0b769c58fe54fd1e7a->enter($__internal_c13c875346df1a391137fae285a8405d3ca9703dae8d0b0b769c58fe54fd1e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5882b41b757c2b902074cf8953ea89e6c986f31395e23d3752cb930883b73cd6->leave($__internal_5882b41b757c2b902074cf8953ea89e6c986f31395e23d3752cb930883b73cd6_prof);

        
        $__internal_c13c875346df1a391137fae285a8405d3ca9703dae8d0b0b769c58fe54fd1e7a->leave($__internal_c13c875346df1a391137fae285a8405d3ca9703dae8d0b0b769c58fe54fd1e7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32e76797fd5be57b48df0a75d9f44d3ffb35affa5b268744fdc401ac7a9aab00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e76797fd5be57b48df0a75d9f44d3ffb35affa5b268744fdc401ac7a9aab00->enter($__internal_32e76797fd5be57b48df0a75d9f44d3ffb35affa5b268744fdc401ac7a9aab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d7d0ceee43be7774b5c29d3f8162dbd0724408743ec8d16f4a05c84766692ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d0ceee43be7774b5c29d3f8162dbd0724408743ec8d16f4a05c84766692ecf->enter($__internal_d7d0ceee43be7774b5c29d3f8162dbd0724408743ec8d16f4a05c84766692ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d7d0ceee43be7774b5c29d3f8162dbd0724408743ec8d16f4a05c84766692ecf->leave($__internal_d7d0ceee43be7774b5c29d3f8162dbd0724408743ec8d16f4a05c84766692ecf_prof);

        
        $__internal_32e76797fd5be57b48df0a75d9f44d3ffb35affa5b268744fdc401ac7a9aab00->leave($__internal_32e76797fd5be57b48df0a75d9f44d3ffb35affa5b268744fdc401ac7a9aab00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
