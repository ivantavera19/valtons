<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_576994f5913837225f3c2eeea4e5421fe6e3b664a0231d5b5e83d2e31b6666b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_2bea96ce68b2f75ee91babefc5399103e09c8311c524b7775a2cad5dc880ae34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bea96ce68b2f75ee91babefc5399103e09c8311c524b7775a2cad5dc880ae34->enter($__internal_2bea96ce68b2f75ee91babefc5399103e09c8311c524b7775a2cad5dc880ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_5ff4e472586bcd6db22400ab0db99b9f3fd64f284a544e6e2cdb17a5f38cc3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff4e472586bcd6db22400ab0db99b9f3fd64f284a544e6e2cdb17a5f38cc3d3->enter($__internal_5ff4e472586bcd6db22400ab0db99b9f3fd64f284a544e6e2cdb17a5f38cc3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bea96ce68b2f75ee91babefc5399103e09c8311c524b7775a2cad5dc880ae34->leave($__internal_2bea96ce68b2f75ee91babefc5399103e09c8311c524b7775a2cad5dc880ae34_prof);

        
        $__internal_5ff4e472586bcd6db22400ab0db99b9f3fd64f284a544e6e2cdb17a5f38cc3d3->leave($__internal_5ff4e472586bcd6db22400ab0db99b9f3fd64f284a544e6e2cdb17a5f38cc3d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf92fff888cfab7f3ce74a73eb737218a430a6c3f50ba104d50667263fd8d503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf92fff888cfab7f3ce74a73eb737218a430a6c3f50ba104d50667263fd8d503->enter($__internal_bf92fff888cfab7f3ce74a73eb737218a430a6c3f50ba104d50667263fd8d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c88ecf73d0bd51e2e2e471e9e085073de0b23aa4919d72dd54db306cc058877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c88ecf73d0bd51e2e2e471e9e085073de0b23aa4919d72dd54db306cc058877->enter($__internal_0c88ecf73d0bd51e2e2e471e9e085073de0b23aa4919d72dd54db306cc058877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_0c88ecf73d0bd51e2e2e471e9e085073de0b23aa4919d72dd54db306cc058877->leave($__internal_0c88ecf73d0bd51e2e2e471e9e085073de0b23aa4919d72dd54db306cc058877_prof);

        
        $__internal_bf92fff888cfab7f3ce74a73eb737218a430a6c3f50ba104d50667263fd8d503->leave($__internal_bf92fff888cfab7f3ce74a73eb737218a430a6c3f50ba104d50667263fd8d503_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
