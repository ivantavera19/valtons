<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_75deec35f7d633e2129b60d241f12f3698b8c5e9d1a72cd4f2b0e40681d28a99 extends Twig_Template
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
        $__internal_cb53f3f165cb77127726058efd72ee4e133883a8b24863b368de057c6aeb6ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb53f3f165cb77127726058efd72ee4e133883a8b24863b368de057c6aeb6ef3->enter($__internal_cb53f3f165cb77127726058efd72ee4e133883a8b24863b368de057c6aeb6ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_59a6ddb0c53c52f97ba91ab1ec75ff42de71e12829dee7f6b9a0c75119ba3491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a6ddb0c53c52f97ba91ab1ec75ff42de71e12829dee7f6b9a0c75119ba3491->enter($__internal_59a6ddb0c53c52f97ba91ab1ec75ff42de71e12829dee7f6b9a0c75119ba3491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cb53f3f165cb77127726058efd72ee4e133883a8b24863b368de057c6aeb6ef3->leave($__internal_cb53f3f165cb77127726058efd72ee4e133883a8b24863b368de057c6aeb6ef3_prof);

        
        $__internal_59a6ddb0c53c52f97ba91ab1ec75ff42de71e12829dee7f6b9a0c75119ba3491->leave($__internal_59a6ddb0c53c52f97ba91ab1ec75ff42de71e12829dee7f6b9a0c75119ba3491_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
