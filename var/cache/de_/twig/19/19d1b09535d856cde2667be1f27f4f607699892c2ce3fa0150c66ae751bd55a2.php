<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_00e8f6d90e93fffc9fc94ad45972075722a77f55c6787e1d77db367ffc4ced7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_49c906e35c3c863266aadc60ed7c9273ceefe50da48650bcbb47a0ac0752aefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c906e35c3c863266aadc60ed7c9273ceefe50da48650bcbb47a0ac0752aefd->enter($__internal_49c906e35c3c863266aadc60ed7c9273ceefe50da48650bcbb47a0ac0752aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_8cfb8b7423cbfd2727783b9b13303fe5437e48f06faef322a3a38dd7e495704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfb8b7423cbfd2727783b9b13303fe5437e48f06faef322a3a38dd7e495704f->enter($__internal_8cfb8b7423cbfd2727783b9b13303fe5437e48f06faef322a3a38dd7e495704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c906e35c3c863266aadc60ed7c9273ceefe50da48650bcbb47a0ac0752aefd->leave($__internal_49c906e35c3c863266aadc60ed7c9273ceefe50da48650bcbb47a0ac0752aefd_prof);

        
        $__internal_8cfb8b7423cbfd2727783b9b13303fe5437e48f06faef322a3a38dd7e495704f->leave($__internal_8cfb8b7423cbfd2727783b9b13303fe5437e48f06faef322a3a38dd7e495704f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e31712813cf27e3fafe6c91ba6dfd0e1e3e175e7019f88ee95b3dd78e2cc534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e31712813cf27e3fafe6c91ba6dfd0e1e3e175e7019f88ee95b3dd78e2cc534->enter($__internal_1e31712813cf27e3fafe6c91ba6dfd0e1e3e175e7019f88ee95b3dd78e2cc534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5e456b8671b3b23dda4ee81580455ab2c739eab801efbf393945c8389ad2e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e456b8671b3b23dda4ee81580455ab2c739eab801efbf393945c8389ad2e16->enter($__internal_f5e456b8671b3b23dda4ee81580455ab2c739eab801efbf393945c8389ad2e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f5e456b8671b3b23dda4ee81580455ab2c739eab801efbf393945c8389ad2e16->leave($__internal_f5e456b8671b3b23dda4ee81580455ab2c739eab801efbf393945c8389ad2e16_prof);

        
        $__internal_1e31712813cf27e3fafe6c91ba6dfd0e1e3e175e7019f88ee95b3dd78e2cc534->leave($__internal_1e31712813cf27e3fafe6c91ba6dfd0e1e3e175e7019f88ee95b3dd78e2cc534_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
