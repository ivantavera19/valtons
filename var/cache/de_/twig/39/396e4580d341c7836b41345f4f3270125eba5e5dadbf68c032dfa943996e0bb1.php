<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6bd23555df50be9e30dd726ad963984bbd0acde4a4480fcdaa2cacf481d74b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_000b2f4084b04f4b7de503d0dcc525ce1ac7d513ca81ad05229419e90b3bb304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000b2f4084b04f4b7de503d0dcc525ce1ac7d513ca81ad05229419e90b3bb304->enter($__internal_000b2f4084b04f4b7de503d0dcc525ce1ac7d513ca81ad05229419e90b3bb304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0a521e630866c95e01ead48234644443cc8c474d83d52a365968baa25fe30174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a521e630866c95e01ead48234644443cc8c474d83d52a365968baa25fe30174->enter($__internal_0a521e630866c95e01ead48234644443cc8c474d83d52a365968baa25fe30174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000b2f4084b04f4b7de503d0dcc525ce1ac7d513ca81ad05229419e90b3bb304->leave($__internal_000b2f4084b04f4b7de503d0dcc525ce1ac7d513ca81ad05229419e90b3bb304_prof);

        
        $__internal_0a521e630866c95e01ead48234644443cc8c474d83d52a365968baa25fe30174->leave($__internal_0a521e630866c95e01ead48234644443cc8c474d83d52a365968baa25fe30174_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_953eb8494aacf19c4b63c6ba30e4b916d5d45a26a267bdc8bb9afa0e48927592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953eb8494aacf19c4b63c6ba30e4b916d5d45a26a267bdc8bb9afa0e48927592->enter($__internal_953eb8494aacf19c4b63c6ba30e4b916d5d45a26a267bdc8bb9afa0e48927592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b0352328a68c08d6c8a828aa4cbb5086084597ef96b88f4cb525f84268bcdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0352328a68c08d6c8a828aa4cbb5086084597ef96b88f4cb525f84268bcdd6->enter($__internal_1b0352328a68c08d6c8a828aa4cbb5086084597ef96b88f4cb525f84268bcdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1b0352328a68c08d6c8a828aa4cbb5086084597ef96b88f4cb525f84268bcdd6->leave($__internal_1b0352328a68c08d6c8a828aa4cbb5086084597ef96b88f4cb525f84268bcdd6_prof);

        
        $__internal_953eb8494aacf19c4b63c6ba30e4b916d5d45a26a267bdc8bb9afa0e48927592->leave($__internal_953eb8494aacf19c4b63c6ba30e4b916d5d45a26a267bdc8bb9afa0e48927592_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
