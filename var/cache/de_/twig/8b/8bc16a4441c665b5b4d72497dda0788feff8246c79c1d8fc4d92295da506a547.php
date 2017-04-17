<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5c6fc4667820a0b78bbd22d0688f5579f4eebae691ebd3e0d5622b23cb5a9901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6e92943b83a78749161a21756d3e212746ba78640395a63f7102abcb7ccc3d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e92943b83a78749161a21756d3e212746ba78640395a63f7102abcb7ccc3d31->enter($__internal_6e92943b83a78749161a21756d3e212746ba78640395a63f7102abcb7ccc3d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_3c453a43513db6e1a1cf338e1ef17e52c37d126178ab63740fbfabf23e07fad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c453a43513db6e1a1cf338e1ef17e52c37d126178ab63740fbfabf23e07fad5->enter($__internal_3c453a43513db6e1a1cf338e1ef17e52c37d126178ab63740fbfabf23e07fad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e92943b83a78749161a21756d3e212746ba78640395a63f7102abcb7ccc3d31->leave($__internal_6e92943b83a78749161a21756d3e212746ba78640395a63f7102abcb7ccc3d31_prof);

        
        $__internal_3c453a43513db6e1a1cf338e1ef17e52c37d126178ab63740fbfabf23e07fad5->leave($__internal_3c453a43513db6e1a1cf338e1ef17e52c37d126178ab63740fbfabf23e07fad5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1ab8bb197c426a4cd7f124fa3d47281bcd110fc31695344850dd3fa732eb666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ab8bb197c426a4cd7f124fa3d47281bcd110fc31695344850dd3fa732eb666->enter($__internal_f1ab8bb197c426a4cd7f124fa3d47281bcd110fc31695344850dd3fa732eb666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_529522652af667e7b66a76bc60e0810bb1aced0ad6e15902457689794133c57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529522652af667e7b66a76bc60e0810bb1aced0ad6e15902457689794133c57a->enter($__internal_529522652af667e7b66a76bc60e0810bb1aced0ad6e15902457689794133c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_529522652af667e7b66a76bc60e0810bb1aced0ad6e15902457689794133c57a->leave($__internal_529522652af667e7b66a76bc60e0810bb1aced0ad6e15902457689794133c57a_prof);

        
        $__internal_f1ab8bb197c426a4cd7f124fa3d47281bcd110fc31695344850dd3fa732eb666->leave($__internal_f1ab8bb197c426a4cd7f124fa3d47281bcd110fc31695344850dd3fa732eb666_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
