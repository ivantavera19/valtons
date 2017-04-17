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
        $__internal_ba1b8d305b436b45c06b980d2131ebc801f8d3f65510b170632f61166891dde9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1b8d305b436b45c06b980d2131ebc801f8d3f65510b170632f61166891dde9->enter($__internal_ba1b8d305b436b45c06b980d2131ebc801f8d3f65510b170632f61166891dde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_cae9fabc6c7d2712cb053f7f28a9e43bc5915b89ef4c07bd5ae0a934f4504bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae9fabc6c7d2712cb053f7f28a9e43bc5915b89ef4c07bd5ae0a934f4504bbd->enter($__internal_cae9fabc6c7d2712cb053f7f28a9e43bc5915b89ef4c07bd5ae0a934f4504bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1b8d305b436b45c06b980d2131ebc801f8d3f65510b170632f61166891dde9->leave($__internal_ba1b8d305b436b45c06b980d2131ebc801f8d3f65510b170632f61166891dde9_prof);

        
        $__internal_cae9fabc6c7d2712cb053f7f28a9e43bc5915b89ef4c07bd5ae0a934f4504bbd->leave($__internal_cae9fabc6c7d2712cb053f7f28a9e43bc5915b89ef4c07bd5ae0a934f4504bbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d837fefabf5b504308e452064b1252d74f29fb81dd9a813754ba23bd0266c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d837fefabf5b504308e452064b1252d74f29fb81dd9a813754ba23bd0266c01->enter($__internal_7d837fefabf5b504308e452064b1252d74f29fb81dd9a813754ba23bd0266c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb3603f149f3ee9dbdf1baa20e3958a7830e03dd97ed1362f05a9db70c9b351b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3603f149f3ee9dbdf1baa20e3958a7830e03dd97ed1362f05a9db70c9b351b->enter($__internal_bb3603f149f3ee9dbdf1baa20e3958a7830e03dd97ed1362f05a9db70c9b351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_bb3603f149f3ee9dbdf1baa20e3958a7830e03dd97ed1362f05a9db70c9b351b->leave($__internal_bb3603f149f3ee9dbdf1baa20e3958a7830e03dd97ed1362f05a9db70c9b351b_prof);

        
        $__internal_7d837fefabf5b504308e452064b1252d74f29fb81dd9a813754ba23bd0266c01->leave($__internal_7d837fefabf5b504308e452064b1252d74f29fb81dd9a813754ba23bd0266c01_prof);

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
