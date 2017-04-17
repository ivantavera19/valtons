<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_27264416f4f373b2bfd24a36c338081e1a0efad02351c1c26ace0aa950fcc68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3a7b27333f9f5c88d9a60e15fee947d7df5772a59bba6cac05cf309453cf4d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7b27333f9f5c88d9a60e15fee947d7df5772a59bba6cac05cf309453cf4d2e->enter($__internal_3a7b27333f9f5c88d9a60e15fee947d7df5772a59bba6cac05cf309453cf4d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_45408f154787a2cb9c99b58cf20d925f337527f88ec36894f44d7ebcebc6fec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45408f154787a2cb9c99b58cf20d925f337527f88ec36894f44d7ebcebc6fec7->enter($__internal_45408f154787a2cb9c99b58cf20d925f337527f88ec36894f44d7ebcebc6fec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7b27333f9f5c88d9a60e15fee947d7df5772a59bba6cac05cf309453cf4d2e->leave($__internal_3a7b27333f9f5c88d9a60e15fee947d7df5772a59bba6cac05cf309453cf4d2e_prof);

        
        $__internal_45408f154787a2cb9c99b58cf20d925f337527f88ec36894f44d7ebcebc6fec7->leave($__internal_45408f154787a2cb9c99b58cf20d925f337527f88ec36894f44d7ebcebc6fec7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3d65a1a7f24b3cdaf0f372f91cf15136cd70ae09871ee1a04a706ece9c3118a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d65a1a7f24b3cdaf0f372f91cf15136cd70ae09871ee1a04a706ece9c3118a->enter($__internal_d3d65a1a7f24b3cdaf0f372f91cf15136cd70ae09871ee1a04a706ece9c3118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb7c46435ff71eefe5440adab4bb817879de33e3208021621d5ce415ec6ffc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7c46435ff71eefe5440adab4bb817879de33e3208021621d5ce415ec6ffc5e->enter($__internal_eb7c46435ff71eefe5440adab4bb817879de33e3208021621d5ce415ec6ffc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_eb7c46435ff71eefe5440adab4bb817879de33e3208021621d5ce415ec6ffc5e->leave($__internal_eb7c46435ff71eefe5440adab4bb817879de33e3208021621d5ce415ec6ffc5e_prof);

        
        $__internal_d3d65a1a7f24b3cdaf0f372f91cf15136cd70ae09871ee1a04a706ece9c3118a->leave($__internal_d3d65a1a7f24b3cdaf0f372f91cf15136cd70ae09871ee1a04a706ece9c3118a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
