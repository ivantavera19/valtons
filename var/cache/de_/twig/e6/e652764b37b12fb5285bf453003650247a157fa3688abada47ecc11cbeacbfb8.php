<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ba2c9c6653249656a5b527bfb1a065ad7669a2343aa93f250caf2227fcfe53ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc21f7fe842d575752cf2184e9e41e90bd5c1dbce94a0e7e5c8479b42d947bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc21f7fe842d575752cf2184e9e41e90bd5c1dbce94a0e7e5c8479b42d947bd8->enter($__internal_bc21f7fe842d575752cf2184e9e41e90bd5c1dbce94a0e7e5c8479b42d947bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d37169fa1c5783d660d8f33b6fdb5c5402a3fc74dd1ec009ce773c8631ba88cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37169fa1c5783d660d8f33b6fdb5c5402a3fc74dd1ec009ce773c8631ba88cc->enter($__internal_d37169fa1c5783d660d8f33b6fdb5c5402a3fc74dd1ec009ce773c8631ba88cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bc21f7fe842d575752cf2184e9e41e90bd5c1dbce94a0e7e5c8479b42d947bd8->leave($__internal_bc21f7fe842d575752cf2184e9e41e90bd5c1dbce94a0e7e5c8479b42d947bd8_prof);

        
        $__internal_d37169fa1c5783d660d8f33b6fdb5c5402a3fc74dd1ec009ce773c8631ba88cc->leave($__internal_d37169fa1c5783d660d8f33b6fdb5c5402a3fc74dd1ec009ce773c8631ba88cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
