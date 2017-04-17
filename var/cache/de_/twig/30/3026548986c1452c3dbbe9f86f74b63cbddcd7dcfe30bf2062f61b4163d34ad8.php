<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e7f343a636d31c2ed89058e20230bbe4f4c096546eaf693373598971a073e375 extends Twig_Template
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
        $__internal_fad155c7ade3cb0fc31040ae2d34ed8c1af07f0c58635245032b1ebc97fcee57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad155c7ade3cb0fc31040ae2d34ed8c1af07f0c58635245032b1ebc97fcee57->enter($__internal_fad155c7ade3cb0fc31040ae2d34ed8c1af07f0c58635245032b1ebc97fcee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a735ba322d3938720b560144bf5281f2ccfa7bd2a92fe039cc1305ab088ab09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a735ba322d3938720b560144bf5281f2ccfa7bd2a92fe039cc1305ab088ab09a->enter($__internal_a735ba322d3938720b560144bf5281f2ccfa7bd2a92fe039cc1305ab088ab09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fad155c7ade3cb0fc31040ae2d34ed8c1af07f0c58635245032b1ebc97fcee57->leave($__internal_fad155c7ade3cb0fc31040ae2d34ed8c1af07f0c58635245032b1ebc97fcee57_prof);

        
        $__internal_a735ba322d3938720b560144bf5281f2ccfa7bd2a92fe039cc1305ab088ab09a->leave($__internal_a735ba322d3938720b560144bf5281f2ccfa7bd2a92fe039cc1305ab088ab09a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
