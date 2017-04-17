<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5793dcbbf80016a29c102cf059561a5a505c4e8f9df15a57e0c5fb2498655f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_393c3c2127e55b80be544663e8b48606361002727a75468beae07e631b0d798c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393c3c2127e55b80be544663e8b48606361002727a75468beae07e631b0d798c->enter($__internal_393c3c2127e55b80be544663e8b48606361002727a75468beae07e631b0d798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_892e0704bd4701f7fda88bbe3995f815d4a6af23138dfb6692feff4d44b07c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892e0704bd4701f7fda88bbe3995f815d4a6af23138dfb6692feff4d44b07c9e->enter($__internal_892e0704bd4701f7fda88bbe3995f815d4a6af23138dfb6692feff4d44b07c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393c3c2127e55b80be544663e8b48606361002727a75468beae07e631b0d798c->leave($__internal_393c3c2127e55b80be544663e8b48606361002727a75468beae07e631b0d798c_prof);

        
        $__internal_892e0704bd4701f7fda88bbe3995f815d4a6af23138dfb6692feff4d44b07c9e->leave($__internal_892e0704bd4701f7fda88bbe3995f815d4a6af23138dfb6692feff4d44b07c9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5db87eea3b9c2e490d2b96f5b3d1cc61fbe0294763bf0477825b204e6b2624ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db87eea3b9c2e490d2b96f5b3d1cc61fbe0294763bf0477825b204e6b2624ae->enter($__internal_5db87eea3b9c2e490d2b96f5b3d1cc61fbe0294763bf0477825b204e6b2624ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8617cfdc0d41f9f1104d064efd5c017cc342a3fc769eef5b3a3fa02a2395133e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8617cfdc0d41f9f1104d064efd5c017cc342a3fc769eef5b3a3fa02a2395133e->enter($__internal_8617cfdc0d41f9f1104d064efd5c017cc342a3fc769eef5b3a3fa02a2395133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8617cfdc0d41f9f1104d064efd5c017cc342a3fc769eef5b3a3fa02a2395133e->leave($__internal_8617cfdc0d41f9f1104d064efd5c017cc342a3fc769eef5b3a3fa02a2395133e_prof);

        
        $__internal_5db87eea3b9c2e490d2b96f5b3d1cc61fbe0294763bf0477825b204e6b2624ae->leave($__internal_5db87eea3b9c2e490d2b96f5b3d1cc61fbe0294763bf0477825b204e6b2624ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
