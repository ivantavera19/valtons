<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9a6d5f7db34d8bfb78f904a4ffb0f245ac568bf24fbbbf9b5594f504735cc98f extends Twig_Template
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
        $__internal_4a1aabbfa94b49bd41c8acc7d32bcda764b21a90e2c8f80677ca3e03c70818d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1aabbfa94b49bd41c8acc7d32bcda764b21a90e2c8f80677ca3e03c70818d3->enter($__internal_4a1aabbfa94b49bd41c8acc7d32bcda764b21a90e2c8f80677ca3e03c70818d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7a2163d4c3e74b20d2e381f931e0a6082610fb4f54baea7bee3a0241a55389d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2163d4c3e74b20d2e381f931e0a6082610fb4f54baea7bee3a0241a55389d2->enter($__internal_7a2163d4c3e74b20d2e381f931e0a6082610fb4f54baea7bee3a0241a55389d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4a1aabbfa94b49bd41c8acc7d32bcda764b21a90e2c8f80677ca3e03c70818d3->leave($__internal_4a1aabbfa94b49bd41c8acc7d32bcda764b21a90e2c8f80677ca3e03c70818d3_prof);

        
        $__internal_7a2163d4c3e74b20d2e381f931e0a6082610fb4f54baea7bee3a0241a55389d2->leave($__internal_7a2163d4c3e74b20d2e381f931e0a6082610fb4f54baea7bee3a0241a55389d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
