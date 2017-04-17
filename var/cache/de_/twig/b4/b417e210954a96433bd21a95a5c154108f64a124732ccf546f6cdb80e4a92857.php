<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e1dc7024c0c5331030807caecae9982bd09782eac2728b21e6dbfdc4e12f3b01 extends Twig_Template
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
        $__internal_5c471d2f009e430f8016ad99678cbc2ae766aa1d61f289bcc6218096fc853cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c471d2f009e430f8016ad99678cbc2ae766aa1d61f289bcc6218096fc853cf9->enter($__internal_5c471d2f009e430f8016ad99678cbc2ae766aa1d61f289bcc6218096fc853cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d5ece7de6fc8a7de75dc2d87804c28be8aea96fd968b08a6f797fc8663bc2e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ece7de6fc8a7de75dc2d87804c28be8aea96fd968b08a6f797fc8663bc2e73->enter($__internal_d5ece7de6fc8a7de75dc2d87804c28be8aea96fd968b08a6f797fc8663bc2e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5c471d2f009e430f8016ad99678cbc2ae766aa1d61f289bcc6218096fc853cf9->leave($__internal_5c471d2f009e430f8016ad99678cbc2ae766aa1d61f289bcc6218096fc853cf9_prof);

        
        $__internal_d5ece7de6fc8a7de75dc2d87804c28be8aea96fd968b08a6f797fc8663bc2e73->leave($__internal_d5ece7de6fc8a7de75dc2d87804c28be8aea96fd968b08a6f797fc8663bc2e73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
