<?php

/* ValtonsBundle:Default:index.html.twig */
class __TwigTemplate_24d1daa2915fee294c3d1114a024fdfb7aed08adacf41150c3e2067130f7124d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ValtonsBundle:Default:index.html.twig", 1);
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
        $__internal_8243c945390217f6e3aa30fbf8779cc10c0de237e581f62c83c73b7c99cc9a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8243c945390217f6e3aa30fbf8779cc10c0de237e581f62c83c73b7c99cc9a72->enter($__internal_8243c945390217f6e3aa30fbf8779cc10c0de237e581f62c83c73b7c99cc9a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ValtonsBundle:Default:index.html.twig"));

        $__internal_4e8d47b3ce18cee3c320879b580ad46c91374716902933b541257d32db9ecef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8d47b3ce18cee3c320879b580ad46c91374716902933b541257d32db9ecef7->enter($__internal_4e8d47b3ce18cee3c320879b580ad46c91374716902933b541257d32db9ecef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ValtonsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8243c945390217f6e3aa30fbf8779cc10c0de237e581f62c83c73b7c99cc9a72->leave($__internal_8243c945390217f6e3aa30fbf8779cc10c0de237e581f62c83c73b7c99cc9a72_prof);

        
        $__internal_4e8d47b3ce18cee3c320879b580ad46c91374716902933b541257d32db9ecef7->leave($__internal_4e8d47b3ce18cee3c320879b580ad46c91374716902933b541257d32db9ecef7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f55072efa1eaa7165dbd9fe1ef78fc932d522127a36a8e8ce7a05e16850fd5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55072efa1eaa7165dbd9fe1ef78fc932d522127a36a8e8ce7a05e16850fd5f0->enter($__internal_f55072efa1eaa7165dbd9fe1ef78fc932d522127a36a8e8ce7a05e16850fd5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e484cbb7c770ed2f2775be0408d2b484976d399e4adaefec033db183c3f4f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e484cbb7c770ed2f2775be0408d2b484976d399e4adaefec033db183c3f4f4e->enter($__internal_5e484cbb7c770ed2f2775be0408d2b484976d399e4adaefec033db183c3f4f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_5e484cbb7c770ed2f2775be0408d2b484976d399e4adaefec033db183c3f4f4e->leave($__internal_5e484cbb7c770ed2f2775be0408d2b484976d399e4adaefec033db183c3f4f4e_prof);

        
        $__internal_f55072efa1eaa7165dbd9fe1ef78fc932d522127a36a8e8ce7a05e16850fd5f0->leave($__internal_f55072efa1eaa7165dbd9fe1ef78fc932d522127a36a8e8ce7a05e16850fd5f0_prof);

    }

    public function getTemplateName()
    {
        return "ValtonsBundle:Default:index.html.twig";
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
", "ValtonsBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\src\\ValtonsBundle/Resources/views/Default/index.html.twig");
    }
}
