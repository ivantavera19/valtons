<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d172f071adefd7fd85ab6a772fd9b8a87b391f44e10c4ec141599483cb63931a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f886b12bc1533a2163e535554accf5330a0923076bdcd76bae9900fb6ebfa1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f886b12bc1533a2163e535554accf5330a0923076bdcd76bae9900fb6ebfa1f2->enter($__internal_f886b12bc1533a2163e535554accf5330a0923076bdcd76bae9900fb6ebfa1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_259ab8a6d794f5b2830f66541438d5bfe4637f6a639751dfa48b17409fb72589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259ab8a6d794f5b2830f66541438d5bfe4637f6a639751dfa48b17409fb72589->enter($__internal_259ab8a6d794f5b2830f66541438d5bfe4637f6a639751dfa48b17409fb72589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f886b12bc1533a2163e535554accf5330a0923076bdcd76bae9900fb6ebfa1f2->leave($__internal_f886b12bc1533a2163e535554accf5330a0923076bdcd76bae9900fb6ebfa1f2_prof);

        
        $__internal_259ab8a6d794f5b2830f66541438d5bfe4637f6a639751dfa48b17409fb72589->leave($__internal_259ab8a6d794f5b2830f66541438d5bfe4637f6a639751dfa48b17409fb72589_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd1ab59ae30cfe2db5b440090f709b25b8c76f5192f0abd2761041a071a2e065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1ab59ae30cfe2db5b440090f709b25b8c76f5192f0abd2761041a071a2e065->enter($__internal_cd1ab59ae30cfe2db5b440090f709b25b8c76f5192f0abd2761041a071a2e065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7826fe23e147ea3f8b3897cbd8eff29ec586feae4ef6f7e7dcf9752b351b0aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7826fe23e147ea3f8b3897cbd8eff29ec586feae4ef6f7e7dcf9752b351b0aac->enter($__internal_7826fe23e147ea3f8b3897cbd8eff29ec586feae4ef6f7e7dcf9752b351b0aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7826fe23e147ea3f8b3897cbd8eff29ec586feae4ef6f7e7dcf9752b351b0aac->leave($__internal_7826fe23e147ea3f8b3897cbd8eff29ec586feae4ef6f7e7dcf9752b351b0aac_prof);

        
        $__internal_cd1ab59ae30cfe2db5b440090f709b25b8c76f5192f0abd2761041a071a2e065->leave($__internal_cd1ab59ae30cfe2db5b440090f709b25b8c76f5192f0abd2761041a071a2e065_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
