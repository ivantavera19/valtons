<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_dbd1b75c479a487b4df85091eac2b3b474a63c1123d79822ea76accb0c795c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b3f7809bd257848047e45ffbb5e92967bac1928700d935a79a4efec123b99ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f7809bd257848047e45ffbb5e92967bac1928700d935a79a4efec123b99ab6->enter($__internal_b3f7809bd257848047e45ffbb5e92967bac1928700d935a79a4efec123b99ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_90d06f480150adfb46ae471a57b6b795d7d9d3c8939d6aeb8be45f9aa8994338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d06f480150adfb46ae471a57b6b795d7d9d3c8939d6aeb8be45f9aa8994338->enter($__internal_90d06f480150adfb46ae471a57b6b795d7d9d3c8939d6aeb8be45f9aa8994338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f7809bd257848047e45ffbb5e92967bac1928700d935a79a4efec123b99ab6->leave($__internal_b3f7809bd257848047e45ffbb5e92967bac1928700d935a79a4efec123b99ab6_prof);

        
        $__internal_90d06f480150adfb46ae471a57b6b795d7d9d3c8939d6aeb8be45f9aa8994338->leave($__internal_90d06f480150adfb46ae471a57b6b795d7d9d3c8939d6aeb8be45f9aa8994338_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78b482f2fcd8062b50ed83115875d9bf760c444abefd3affaf33fc1ad82e5765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b482f2fcd8062b50ed83115875d9bf760c444abefd3affaf33fc1ad82e5765->enter($__internal_78b482f2fcd8062b50ed83115875d9bf760c444abefd3affaf33fc1ad82e5765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_646c5d1232676cb21e0081a43318d82176700b17770cf20a72893fdf4eca28e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646c5d1232676cb21e0081a43318d82176700b17770cf20a72893fdf4eca28e4->enter($__internal_646c5d1232676cb21e0081a43318d82176700b17770cf20a72893fdf4eca28e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_646c5d1232676cb21e0081a43318d82176700b17770cf20a72893fdf4eca28e4->leave($__internal_646c5d1232676cb21e0081a43318d82176700b17770cf20a72893fdf4eca28e4_prof);

        
        $__internal_78b482f2fcd8062b50ed83115875d9bf760c444abefd3affaf33fc1ad82e5765->leave($__internal_78b482f2fcd8062b50ed83115875d9bf760c444abefd3affaf33fc1ad82e5765_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
