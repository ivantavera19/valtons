<?php

/* cartaporte/new.html.twig */
class __TwigTemplate_8bbed13184054ad4693a6f43ea502b39ef2ca87a40500b330bd768c1cc95d9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cartaporte/new.html.twig", 1);
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
        $__internal_d7869e7a3213eab915ce80f538bf4a4107b9f06f14011532da1947055452f0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7869e7a3213eab915ce80f538bf4a4107b9f06f14011532da1947055452f0b1->enter($__internal_d7869e7a3213eab915ce80f538bf4a4107b9f06f14011532da1947055452f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/new.html.twig"));

        $__internal_c19917679f0321d8a4a2e86e6e465125014f97955621b726af198c889bb900df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19917679f0321d8a4a2e86e6e465125014f97955621b726af198c889bb900df->enter($__internal_c19917679f0321d8a4a2e86e6e465125014f97955621b726af198c889bb900df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7869e7a3213eab915ce80f538bf4a4107b9f06f14011532da1947055452f0b1->leave($__internal_d7869e7a3213eab915ce80f538bf4a4107b9f06f14011532da1947055452f0b1_prof);

        
        $__internal_c19917679f0321d8a4a2e86e6e465125014f97955621b726af198c889bb900df->leave($__internal_c19917679f0321d8a4a2e86e6e465125014f97955621b726af198c889bb900df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68cbe3a4eab9b7cb86d8447a6c2916fb5f3937ac4c5f0e37a702fdba369fb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68cbe3a4eab9b7cb86d8447a6c2916fb5f3937ac4c5f0e37a702fdba369fb1c->enter($__internal_a68cbe3a4eab9b7cb86d8447a6c2916fb5f3937ac4c5f0e37a702fdba369fb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a7e41f18581f1c2e4e728d03e39e8e1f27215623342a10907eb0004531c97db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7e41f18581f1c2e4e728d03e39e8e1f27215623342a10907eb0004531c97db->enter($__internal_7a7e41f18581f1c2e4e728d03e39e8e1f27215623342a10907eb0004531c97db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cartaporte creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7a7e41f18581f1c2e4e728d03e39e8e1f27215623342a10907eb0004531c97db->leave($__internal_7a7e41f18581f1c2e4e728d03e39e8e1f27215623342a10907eb0004531c97db_prof);

        
        $__internal_a68cbe3a4eab9b7cb86d8447a6c2916fb5f3937ac4c5f0e37a702fdba369fb1c->leave($__internal_a68cbe3a4eab9b7cb86d8447a6c2916fb5f3937ac4c5f0e37a702fdba369fb1c_prof);

    }

    public function getTemplateName()
    {
        return "cartaporte/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cartaporte creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cartaporte_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "cartaporte/new.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\cartaporte\\new.html.twig");
    }
}
