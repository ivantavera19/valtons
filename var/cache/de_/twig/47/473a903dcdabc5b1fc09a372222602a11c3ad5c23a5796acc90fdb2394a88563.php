<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7bdee7163a62bfdfcf8e240468d7a15c625f6030febdce8906c49a959e0cff85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a6cf117362c322d37de6c8180d983e3e44194a23681ad9b70927eaeb015b0337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cf117362c322d37de6c8180d983e3e44194a23681ad9b70927eaeb015b0337->enter($__internal_a6cf117362c322d37de6c8180d983e3e44194a23681ad9b70927eaeb015b0337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a1d5fdeebde239347295f39bae72b01b685429ee1b51061778bc83078b249661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d5fdeebde239347295f39bae72b01b685429ee1b51061778bc83078b249661->enter($__internal_a1d5fdeebde239347295f39bae72b01b685429ee1b51061778bc83078b249661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cf117362c322d37de6c8180d983e3e44194a23681ad9b70927eaeb015b0337->leave($__internal_a6cf117362c322d37de6c8180d983e3e44194a23681ad9b70927eaeb015b0337_prof);

        
        $__internal_a1d5fdeebde239347295f39bae72b01b685429ee1b51061778bc83078b249661->leave($__internal_a1d5fdeebde239347295f39bae72b01b685429ee1b51061778bc83078b249661_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_612784269ca1dee5c36f08439a20731a12250242bd709278d24600d4f4860c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612784269ca1dee5c36f08439a20731a12250242bd709278d24600d4f4860c90->enter($__internal_612784269ca1dee5c36f08439a20731a12250242bd709278d24600d4f4860c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f70ae9babada40ea50a47d89c281b74af52cc8170a729c6f0800e5f87bd3411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f70ae9babada40ea50a47d89c281b74af52cc8170a729c6f0800e5f87bd3411->enter($__internal_4f70ae9babada40ea50a47d89c281b74af52cc8170a729c6f0800e5f87bd3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4f70ae9babada40ea50a47d89c281b74af52cc8170a729c6f0800e5f87bd3411->leave($__internal_4f70ae9babada40ea50a47d89c281b74af52cc8170a729c6f0800e5f87bd3411_prof);

        
        $__internal_612784269ca1dee5c36f08439a20731a12250242bd709278d24600d4f4860c90->leave($__internal_612784269ca1dee5c36f08439a20731a12250242bd709278d24600d4f4860c90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
