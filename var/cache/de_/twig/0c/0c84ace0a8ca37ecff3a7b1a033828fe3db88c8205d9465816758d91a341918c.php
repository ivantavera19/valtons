<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_915805008581344a20ff9de0073d2fa1d755fbc288675d5c7e61061cf5d35b06 extends Twig_Template
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
        $__internal_c45823e7f9c41fb085007bfd1c7069e68812f4451e47e0a3aa370bfed7238451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45823e7f9c41fb085007bfd1c7069e68812f4451e47e0a3aa370bfed7238451->enter($__internal_c45823e7f9c41fb085007bfd1c7069e68812f4451e47e0a3aa370bfed7238451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d58def19be315d5606f6738a1a0d9ea0a413cfcb72c659116554b9cfa686bdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58def19be315d5606f6738a1a0d9ea0a413cfcb72c659116554b9cfa686bdc7->enter($__internal_d58def19be315d5606f6738a1a0d9ea0a413cfcb72c659116554b9cfa686bdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_c45823e7f9c41fb085007bfd1c7069e68812f4451e47e0a3aa370bfed7238451->leave($__internal_c45823e7f9c41fb085007bfd1c7069e68812f4451e47e0a3aa370bfed7238451_prof);

        
        $__internal_d58def19be315d5606f6738a1a0d9ea0a413cfcb72c659116554b9cfa686bdc7->leave($__internal_d58def19be315d5606f6738a1a0d9ea0a413cfcb72c659116554b9cfa686bdc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
