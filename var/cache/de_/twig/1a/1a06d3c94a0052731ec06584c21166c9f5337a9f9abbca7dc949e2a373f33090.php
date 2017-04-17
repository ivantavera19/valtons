<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ee7c73d02ddced61cf53e6d99bdb9febd06490d129d86985cd95d854670e9705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_54cc89e525c015ace6e7ce6407d9eee81845b600a4c13251fdc8d19b83bbb58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cc89e525c015ace6e7ce6407d9eee81845b600a4c13251fdc8d19b83bbb58d->enter($__internal_54cc89e525c015ace6e7ce6407d9eee81845b600a4c13251fdc8d19b83bbb58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0f028bcc37997c47b437a00ac93ff2d4b6ba119a5a4dc2c287c3df3c6c1a5d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f028bcc37997c47b437a00ac93ff2d4b6ba119a5a4dc2c287c3df3c6c1a5d2b->enter($__internal_0f028bcc37997c47b437a00ac93ff2d4b6ba119a5a4dc2c287c3df3c6c1a5d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54cc89e525c015ace6e7ce6407d9eee81845b600a4c13251fdc8d19b83bbb58d->leave($__internal_54cc89e525c015ace6e7ce6407d9eee81845b600a4c13251fdc8d19b83bbb58d_prof);

        
        $__internal_0f028bcc37997c47b437a00ac93ff2d4b6ba119a5a4dc2c287c3df3c6c1a5d2b->leave($__internal_0f028bcc37997c47b437a00ac93ff2d4b6ba119a5a4dc2c287c3df3c6c1a5d2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d07e49b8dc0aa24f2dc6686c1e7ffd418acc66582affe30eb62166f88012599f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07e49b8dc0aa24f2dc6686c1e7ffd418acc66582affe30eb62166f88012599f->enter($__internal_d07e49b8dc0aa24f2dc6686c1e7ffd418acc66582affe30eb62166f88012599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b47774f070513053b79c15f5fc3032401152d0bbe7da60f6338afa09c39e8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b47774f070513053b79c15f5fc3032401152d0bbe7da60f6338afa09c39e8c7->enter($__internal_0b47774f070513053b79c15f5fc3032401152d0bbe7da60f6338afa09c39e8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0b47774f070513053b79c15f5fc3032401152d0bbe7da60f6338afa09c39e8c7->leave($__internal_0b47774f070513053b79c15f5fc3032401152d0bbe7da60f6338afa09c39e8c7_prof);

        
        $__internal_d07e49b8dc0aa24f2dc6686c1e7ffd418acc66582affe30eb62166f88012599f->leave($__internal_d07e49b8dc0aa24f2dc6686c1e7ffd418acc66582affe30eb62166f88012599f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
