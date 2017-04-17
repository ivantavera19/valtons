<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_11b29e93924129716deb72ea54e76264acb0b666e182b29e50041d6d741898d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b71db14bfdfe280900ebb3defa1be2f2256161a1eefd31713af53737f891f45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71db14bfdfe280900ebb3defa1be2f2256161a1eefd31713af53737f891f45c->enter($__internal_b71db14bfdfe280900ebb3defa1be2f2256161a1eefd31713af53737f891f45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_2e85b5f5eddc96e5fd7248ae94dfcc6a7d7cc1f0ec1db9c754c05abb0a708b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e85b5f5eddc96e5fd7248ae94dfcc6a7d7cc1f0ec1db9c754c05abb0a708b6e->enter($__internal_2e85b5f5eddc96e5fd7248ae94dfcc6a7d7cc1f0ec1db9c754c05abb0a708b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71db14bfdfe280900ebb3defa1be2f2256161a1eefd31713af53737f891f45c->leave($__internal_b71db14bfdfe280900ebb3defa1be2f2256161a1eefd31713af53737f891f45c_prof);

        
        $__internal_2e85b5f5eddc96e5fd7248ae94dfcc6a7d7cc1f0ec1db9c754c05abb0a708b6e->leave($__internal_2e85b5f5eddc96e5fd7248ae94dfcc6a7d7cc1f0ec1db9c754c05abb0a708b6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6caced15d75968b58f9d0201d638be69257dc938445c9776bdc298233d510499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6caced15d75968b58f9d0201d638be69257dc938445c9776bdc298233d510499->enter($__internal_6caced15d75968b58f9d0201d638be69257dc938445c9776bdc298233d510499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27075dfabc7b8c73f94b6e85b1bd98aa0d7755f14bf2749ab366956ce7ccbf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27075dfabc7b8c73f94b6e85b1bd98aa0d7755f14bf2749ab366956ce7ccbf58->enter($__internal_27075dfabc7b8c73f94b6e85b1bd98aa0d7755f14bf2749ab366956ce7ccbf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_27075dfabc7b8c73f94b6e85b1bd98aa0d7755f14bf2749ab366956ce7ccbf58->leave($__internal_27075dfabc7b8c73f94b6e85b1bd98aa0d7755f14bf2749ab366956ce7ccbf58_prof);

        
        $__internal_6caced15d75968b58f9d0201d638be69257dc938445c9776bdc298233d510499->leave($__internal_6caced15d75968b58f9d0201d638be69257dc938445c9776bdc298233d510499_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
