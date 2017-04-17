<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7971ffdcff58086332a168365aa18ecdf099eefc4340541f0127ebcb4d9e42d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_74b38d13546a6c9d9a7d85b33f5ed63588ee23af94c6b6784a587e5e22b74324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b38d13546a6c9d9a7d85b33f5ed63588ee23af94c6b6784a587e5e22b74324->enter($__internal_74b38d13546a6c9d9a7d85b33f5ed63588ee23af94c6b6784a587e5e22b74324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_8a423890e96c7c1d608d63c891fd65bdbcb7f8121c5126630a2c2deced743426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a423890e96c7c1d608d63c891fd65bdbcb7f8121c5126630a2c2deced743426->enter($__internal_8a423890e96c7c1d608d63c891fd65bdbcb7f8121c5126630a2c2deced743426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b38d13546a6c9d9a7d85b33f5ed63588ee23af94c6b6784a587e5e22b74324->leave($__internal_74b38d13546a6c9d9a7d85b33f5ed63588ee23af94c6b6784a587e5e22b74324_prof);

        
        $__internal_8a423890e96c7c1d608d63c891fd65bdbcb7f8121c5126630a2c2deced743426->leave($__internal_8a423890e96c7c1d608d63c891fd65bdbcb7f8121c5126630a2c2deced743426_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea5c37967b8dc9841fbc6e1365c15ece0c5b4944cc9a5a6b2fd4548879ce5ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5c37967b8dc9841fbc6e1365c15ece0c5b4944cc9a5a6b2fd4548879ce5ff0->enter($__internal_ea5c37967b8dc9841fbc6e1365c15ece0c5b4944cc9a5a6b2fd4548879ce5ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88469a1dd307f5a104f786266a6427848a49e769eacde0ee9116157491d396bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88469a1dd307f5a104f786266a6427848a49e769eacde0ee9116157491d396bd->enter($__internal_88469a1dd307f5a104f786266a6427848a49e769eacde0ee9116157491d396bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_88469a1dd307f5a104f786266a6427848a49e769eacde0ee9116157491d396bd->leave($__internal_88469a1dd307f5a104f786266a6427848a49e769eacde0ee9116157491d396bd_prof);

        
        $__internal_ea5c37967b8dc9841fbc6e1365c15ece0c5b4944cc9a5a6b2fd4548879ce5ff0->leave($__internal_ea5c37967b8dc9841fbc6e1365c15ece0c5b4944cc9a5a6b2fd4548879ce5ff0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
