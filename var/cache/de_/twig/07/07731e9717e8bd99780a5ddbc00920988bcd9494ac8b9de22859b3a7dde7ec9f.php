<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_fcbdd037d469e5160f85f3d8accc02c6106147eb72abd756fd4ae399357ca140 extends Twig_Template
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
        $__internal_567134ddd67d8da2bc7cddb11766174ad294047a34bceb93f46c5d258f4ec264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567134ddd67d8da2bc7cddb11766174ad294047a34bceb93f46c5d258f4ec264->enter($__internal_567134ddd67d8da2bc7cddb11766174ad294047a34bceb93f46c5d258f4ec264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_51f87aab6c009fea808a320651ecb5e38b9dfaaae69a245fcec09319a5f7417d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f87aab6c009fea808a320651ecb5e38b9dfaaae69a245fcec09319a5f7417d->enter($__internal_51f87aab6c009fea808a320651ecb5e38b9dfaaae69a245fcec09319a5f7417d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_567134ddd67d8da2bc7cddb11766174ad294047a34bceb93f46c5d258f4ec264->leave($__internal_567134ddd67d8da2bc7cddb11766174ad294047a34bceb93f46c5d258f4ec264_prof);

        
        $__internal_51f87aab6c009fea808a320651ecb5e38b9dfaaae69a245fcec09319a5f7417d->leave($__internal_51f87aab6c009fea808a320651ecb5e38b9dfaaae69a245fcec09319a5f7417d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
