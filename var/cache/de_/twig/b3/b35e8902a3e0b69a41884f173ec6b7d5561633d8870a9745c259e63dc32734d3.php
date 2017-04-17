<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_923aafe841f668e6b1190895925974cebae47a5235e5a2eeb4652abca6a1f111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_3bc453d82dc0b4e40e2b16811c2d8c58264d1268f250bc2ffc251e02a4f92f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc453d82dc0b4e40e2b16811c2d8c58264d1268f250bc2ffc251e02a4f92f87->enter($__internal_3bc453d82dc0b4e40e2b16811c2d8c58264d1268f250bc2ffc251e02a4f92f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_826d6b9622ebe35c105e1e92dd03fa499cf3dcb7552502c4eba66e3c51b81225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826d6b9622ebe35c105e1e92dd03fa499cf3dcb7552502c4eba66e3c51b81225->enter($__internal_826d6b9622ebe35c105e1e92dd03fa499cf3dcb7552502c4eba66e3c51b81225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc453d82dc0b4e40e2b16811c2d8c58264d1268f250bc2ffc251e02a4f92f87->leave($__internal_3bc453d82dc0b4e40e2b16811c2d8c58264d1268f250bc2ffc251e02a4f92f87_prof);

        
        $__internal_826d6b9622ebe35c105e1e92dd03fa499cf3dcb7552502c4eba66e3c51b81225->leave($__internal_826d6b9622ebe35c105e1e92dd03fa499cf3dcb7552502c4eba66e3c51b81225_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d6578ec23943cdff575995d8e4bb7f0e1b801134d34168ef002245a2857cc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6578ec23943cdff575995d8e4bb7f0e1b801134d34168ef002245a2857cc48->enter($__internal_1d6578ec23943cdff575995d8e4bb7f0e1b801134d34168ef002245a2857cc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63e1bdc8f470c39600040e0e1484a6f3071826d00009286c26b15d589c281976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e1bdc8f470c39600040e0e1484a6f3071826d00009286c26b15d589c281976->enter($__internal_63e1bdc8f470c39600040e0e1484a6f3071826d00009286c26b15d589c281976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_63e1bdc8f470c39600040e0e1484a6f3071826d00009286c26b15d589c281976->leave($__internal_63e1bdc8f470c39600040e0e1484a6f3071826d00009286c26b15d589c281976_prof);

        
        $__internal_1d6578ec23943cdff575995d8e4bb7f0e1b801134d34168ef002245a2857cc48->leave($__internal_1d6578ec23943cdff575995d8e4bb7f0e1b801134d34168ef002245a2857cc48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
