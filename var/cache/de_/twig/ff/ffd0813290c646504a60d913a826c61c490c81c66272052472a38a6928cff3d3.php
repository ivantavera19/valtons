<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_dc83a99e1ba977d27644ae10d71a3e35a4c03cf4338da44415f888cd61bf2468 extends Twig_Template
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
        $__internal_cbbd33f6a418eac5946a427188538ebb67e8dd12aa7e038d727fb9231170f17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbd33f6a418eac5946a427188538ebb67e8dd12aa7e038d727fb9231170f17f->enter($__internal_cbbd33f6a418eac5946a427188538ebb67e8dd12aa7e038d727fb9231170f17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_326f5c3c79056fbe7126987ac9b1eb42cb30602aa844e187a0a3cb1be75ce3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326f5c3c79056fbe7126987ac9b1eb42cb30602aa844e187a0a3cb1be75ce3d3->enter($__internal_326f5c3c79056fbe7126987ac9b1eb42cb30602aa844e187a0a3cb1be75ce3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cbbd33f6a418eac5946a427188538ebb67e8dd12aa7e038d727fb9231170f17f->leave($__internal_cbbd33f6a418eac5946a427188538ebb67e8dd12aa7e038d727fb9231170f17f_prof);

        
        $__internal_326f5c3c79056fbe7126987ac9b1eb42cb30602aa844e187a0a3cb1be75ce3d3->leave($__internal_326f5c3c79056fbe7126987ac9b1eb42cb30602aa844e187a0a3cb1be75ce3d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
