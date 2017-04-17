<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0d6da3d269b57df170a380cd12cf14a9b588638f1fba119c9176bbf5197566c0 extends Twig_Template
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
        $__internal_0d200b550e792731fcf8878b9d54abca6c7e8bff3843308f14ec36fa03633596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d200b550e792731fcf8878b9d54abca6c7e8bff3843308f14ec36fa03633596->enter($__internal_0d200b550e792731fcf8878b9d54abca6c7e8bff3843308f14ec36fa03633596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_02dc2625f47f92758064c7db8b42b67ebe84ab5a62b8e57bfee3aab763c805f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02dc2625f47f92758064c7db8b42b67ebe84ab5a62b8e57bfee3aab763c805f9->enter($__internal_02dc2625f47f92758064c7db8b42b67ebe84ab5a62b8e57bfee3aab763c805f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0d200b550e792731fcf8878b9d54abca6c7e8bff3843308f14ec36fa03633596->leave($__internal_0d200b550e792731fcf8878b9d54abca6c7e8bff3843308f14ec36fa03633596_prof);

        
        $__internal_02dc2625f47f92758064c7db8b42b67ebe84ab5a62b8e57bfee3aab763c805f9->leave($__internal_02dc2625f47f92758064c7db8b42b67ebe84ab5a62b8e57bfee3aab763c805f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
