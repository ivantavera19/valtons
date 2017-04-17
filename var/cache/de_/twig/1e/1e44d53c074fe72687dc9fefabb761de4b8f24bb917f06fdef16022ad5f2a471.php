<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_02ac01f7b63f5cea03a2aad1bcac2833467fad5941d89913c4555fd2fe3e5b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_9e57fa514f6257b0afd1fafcee34c723c7a085c5638741b6f384b4a807df209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e57fa514f6257b0afd1fafcee34c723c7a085c5638741b6f384b4a807df209c->enter($__internal_9e57fa514f6257b0afd1fafcee34c723c7a085c5638741b6f384b4a807df209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_487e3fb803fcaf79c915b8ad9b27116ee92c12d1d5810f3c980f7e7bfbe3d2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487e3fb803fcaf79c915b8ad9b27116ee92c12d1d5810f3c980f7e7bfbe3d2c2->enter($__internal_487e3fb803fcaf79c915b8ad9b27116ee92c12d1d5810f3c980f7e7bfbe3d2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e57fa514f6257b0afd1fafcee34c723c7a085c5638741b6f384b4a807df209c->leave($__internal_9e57fa514f6257b0afd1fafcee34c723c7a085c5638741b6f384b4a807df209c_prof);

        
        $__internal_487e3fb803fcaf79c915b8ad9b27116ee92c12d1d5810f3c980f7e7bfbe3d2c2->leave($__internal_487e3fb803fcaf79c915b8ad9b27116ee92c12d1d5810f3c980f7e7bfbe3d2c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d26d94560e1682e3e2ba6fe30a676fee4165f3a642e8b82c349451ebbe380db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26d94560e1682e3e2ba6fe30a676fee4165f3a642e8b82c349451ebbe380db3->enter($__internal_d26d94560e1682e3e2ba6fe30a676fee4165f3a642e8b82c349451ebbe380db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7847cd1cc6dc07c72314e310d492eea7678a2eebf2ba0fe5cc7b00c38f708eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7847cd1cc6dc07c72314e310d492eea7678a2eebf2ba0fe5cc7b00c38f708eb->enter($__internal_f7847cd1cc6dc07c72314e310d492eea7678a2eebf2ba0fe5cc7b00c38f708eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f7847cd1cc6dc07c72314e310d492eea7678a2eebf2ba0fe5cc7b00c38f708eb->leave($__internal_f7847cd1cc6dc07c72314e310d492eea7678a2eebf2ba0fe5cc7b00c38f708eb_prof);

        
        $__internal_d26d94560e1682e3e2ba6fe30a676fee4165f3a642e8b82c349451ebbe380db3->leave($__internal_d26d94560e1682e3e2ba6fe30a676fee4165f3a642e8b82c349451ebbe380db3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
