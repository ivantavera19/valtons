<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07b9dd8bb00f04fbdf98042be15f69075581e401b4e98e42a2cf4d6eca16055c extends Twig_Template
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
        $__internal_bbb4d6118f500c3b9d1ac38b83469c5d084d54e5a64ed32bac86891c7ae60da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb4d6118f500c3b9d1ac38b83469c5d084d54e5a64ed32bac86891c7ae60da0->enter($__internal_bbb4d6118f500c3b9d1ac38b83469c5d084d54e5a64ed32bac86891c7ae60da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_abda00257d7c9c39c5092de7f8540ca9b27c3b8474a28765daddc21c1d59afef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abda00257d7c9c39c5092de7f8540ca9b27c3b8474a28765daddc21c1d59afef->enter($__internal_abda00257d7c9c39c5092de7f8540ca9b27c3b8474a28765daddc21c1d59afef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bbb4d6118f500c3b9d1ac38b83469c5d084d54e5a64ed32bac86891c7ae60da0->leave($__internal_bbb4d6118f500c3b9d1ac38b83469c5d084d54e5a64ed32bac86891c7ae60da0_prof);

        
        $__internal_abda00257d7c9c39c5092de7f8540ca9b27c3b8474a28765daddc21c1d59afef->leave($__internal_abda00257d7c9c39c5092de7f8540ca9b27c3b8474a28765daddc21c1d59afef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
