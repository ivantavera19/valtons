<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2258561f07ff140e32c1f4f73224d9e8986815460ce10492ae868cda41c8499c extends Twig_Template
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
        $__internal_c2c9f0f504d6acbf0c1b3021c02c4538a58e9fabde167700d0e9fff7808d1ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c9f0f504d6acbf0c1b3021c02c4538a58e9fabde167700d0e9fff7808d1ba4->enter($__internal_c2c9f0f504d6acbf0c1b3021c02c4538a58e9fabde167700d0e9fff7808d1ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fcb179feb41e39aa79eef877932e3ba50a1c2f9c8085a798c47cf443a84fbaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb179feb41e39aa79eef877932e3ba50a1c2f9c8085a798c47cf443a84fbaa5->enter($__internal_fcb179feb41e39aa79eef877932e3ba50a1c2f9c8085a798c47cf443a84fbaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c2c9f0f504d6acbf0c1b3021c02c4538a58e9fabde167700d0e9fff7808d1ba4->leave($__internal_c2c9f0f504d6acbf0c1b3021c02c4538a58e9fabde167700d0e9fff7808d1ba4_prof);

        
        $__internal_fcb179feb41e39aa79eef877932e3ba50a1c2f9c8085a798c47cf443a84fbaa5->leave($__internal_fcb179feb41e39aa79eef877932e3ba50a1c2f9c8085a798c47cf443a84fbaa5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
