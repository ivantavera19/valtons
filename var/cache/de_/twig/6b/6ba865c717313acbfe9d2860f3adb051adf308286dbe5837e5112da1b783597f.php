<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3bd97c157579cb4ee52a0bacbe7f624c124339dffe10c6a8df92463f29c624ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_35013b90796c5f92ef2eb224ee614e3da868b1cbdc27e241f3f5b75d8f7740a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35013b90796c5f92ef2eb224ee614e3da868b1cbdc27e241f3f5b75d8f7740a1->enter($__internal_35013b90796c5f92ef2eb224ee614e3da868b1cbdc27e241f3f5b75d8f7740a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_526fb9190d1d01a3b46eb79b9ea20c58586e4d9aded0c3d892cea394394c59f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526fb9190d1d01a3b46eb79b9ea20c58586e4d9aded0c3d892cea394394c59f3->enter($__internal_526fb9190d1d01a3b46eb79b9ea20c58586e4d9aded0c3d892cea394394c59f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35013b90796c5f92ef2eb224ee614e3da868b1cbdc27e241f3f5b75d8f7740a1->leave($__internal_35013b90796c5f92ef2eb224ee614e3da868b1cbdc27e241f3f5b75d8f7740a1_prof);

        
        $__internal_526fb9190d1d01a3b46eb79b9ea20c58586e4d9aded0c3d892cea394394c59f3->leave($__internal_526fb9190d1d01a3b46eb79b9ea20c58586e4d9aded0c3d892cea394394c59f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_926572a0dc6c985cd801e27d49ff77b362ba3696bd91e40f8b785c9461875034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926572a0dc6c985cd801e27d49ff77b362ba3696bd91e40f8b785c9461875034->enter($__internal_926572a0dc6c985cd801e27d49ff77b362ba3696bd91e40f8b785c9461875034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_884e2c32bf606ef9c0e0b52a8852ec79a02efad0c33128e1d0add36b84e4d6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e2c32bf606ef9c0e0b52a8852ec79a02efad0c33128e1d0add36b84e4d6d6->enter($__internal_884e2c32bf606ef9c0e0b52a8852ec79a02efad0c33128e1d0add36b84e4d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_884e2c32bf606ef9c0e0b52a8852ec79a02efad0c33128e1d0add36b84e4d6d6->leave($__internal_884e2c32bf606ef9c0e0b52a8852ec79a02efad0c33128e1d0add36b84e4d6d6_prof);

        
        $__internal_926572a0dc6c985cd801e27d49ff77b362ba3696bd91e40f8b785c9461875034->leave($__internal_926572a0dc6c985cd801e27d49ff77b362ba3696bd91e40f8b785c9461875034_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
