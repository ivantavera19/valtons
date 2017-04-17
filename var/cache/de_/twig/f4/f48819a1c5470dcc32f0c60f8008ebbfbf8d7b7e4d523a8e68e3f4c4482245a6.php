<?php

/* :default:index.html.twig */
class __TwigTemplate_d5558c16b9ddf2ed9f1f283695bf574b5a5a100cf96697650aa4493bb604ec52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7ce78853230cd419c6d68b71c9b5d470aaec950bded7dad40fa006253e8305f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ce78853230cd419c6d68b71c9b5d470aaec950bded7dad40fa006253e8305f->enter($__internal_a7ce78853230cd419c6d68b71c9b5d470aaec950bded7dad40fa006253e8305f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_bb3c88ede3ddf19e5fb61ef70e5e494c9d0d29095e2473e26ce596ba32d71b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3c88ede3ddf19e5fb61ef70e5e494c9d0d29095e2473e26ce596ba32d71b48->enter($__internal_bb3c88ede3ddf19e5fb61ef70e5e494c9d0d29095e2473e26ce596ba32d71b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7ce78853230cd419c6d68b71c9b5d470aaec950bded7dad40fa006253e8305f->leave($__internal_a7ce78853230cd419c6d68b71c9b5d470aaec950bded7dad40fa006253e8305f_prof);

        
        $__internal_bb3c88ede3ddf19e5fb61ef70e5e494c9d0d29095e2473e26ce596ba32d71b48->leave($__internal_bb3c88ede3ddf19e5fb61ef70e5e494c9d0d29095e2473e26ce596ba32d71b48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d2d977f8ddca2534aeabf482f78de9924c0b39911c1ee987f91e06ff4124d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2d977f8ddca2534aeabf482f78de9924c0b39911c1ee987f91e06ff4124d3c->enter($__internal_2d2d977f8ddca2534aeabf482f78de9924c0b39911c1ee987f91e06ff4124d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69a467427657bfedac105d7c11c48f9d7fda1c94e3569f6f2f110a4543af9197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a467427657bfedac105d7c11c48f9d7fda1c94e3569f6f2f110a4543af9197->enter($__internal_69a467427657bfedac105d7c11c48f9d7fda1c94e3569f6f2f110a4543af9197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_69a467427657bfedac105d7c11c48f9d7fda1c94e3569f6f2f110a4543af9197->leave($__internal_69a467427657bfedac105d7c11c48f9d7fda1c94e3569f6f2f110a4543af9197_prof);

        
        $__internal_2d2d977f8ddca2534aeabf482f78de9924c0b39911c1ee987f91e06ff4124d3c->leave($__internal_2d2d977f8ddca2534aeabf482f78de9924c0b39911c1ee987f91e06ff4124d3c_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
{% endblock %}
", ":default:index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/default/index.html.twig");
    }
}
