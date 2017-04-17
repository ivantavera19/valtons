<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a09bd14bb6805ea0f81af4967649640b6d305bc19c1da5dde5aff2d2586ae2a0 extends Twig_Template
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
        $__internal_c6b225fed909e6b7dd19f4b0ac453e7ab356f450fdedf87abea522696957ce58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b225fed909e6b7dd19f4b0ac453e7ab356f450fdedf87abea522696957ce58->enter($__internal_c6b225fed909e6b7dd19f4b0ac453e7ab356f450fdedf87abea522696957ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_051cbda70187508fa5a0689d12925af8cd41743f3acb581a5ce685e8acc7270a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051cbda70187508fa5a0689d12925af8cd41743f3acb581a5ce685e8acc7270a->enter($__internal_051cbda70187508fa5a0689d12925af8cd41743f3acb581a5ce685e8acc7270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c6b225fed909e6b7dd19f4b0ac453e7ab356f450fdedf87abea522696957ce58->leave($__internal_c6b225fed909e6b7dd19f4b0ac453e7ab356f450fdedf87abea522696957ce58_prof);

        
        $__internal_051cbda70187508fa5a0689d12925af8cd41743f3acb581a5ce685e8acc7270a->leave($__internal_051cbda70187508fa5a0689d12925af8cd41743f3acb581a5ce685e8acc7270a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
