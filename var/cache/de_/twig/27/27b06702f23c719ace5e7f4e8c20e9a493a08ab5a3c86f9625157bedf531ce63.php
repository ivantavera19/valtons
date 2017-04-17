<?php

/* :cartaporte:edit.html.twig */
class __TwigTemplate_e318e08c41b9c9569b2fc39c10867ad99523c56903e8152efa5447d42934828b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cartaporte:edit.html.twig", 1);
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
        $__internal_7021c7262ac4332443e64b76a465c3dc94d4d8c12226eba8bd02a12ca6f7937e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7021c7262ac4332443e64b76a465c3dc94d4d8c12226eba8bd02a12ca6f7937e->enter($__internal_7021c7262ac4332443e64b76a465c3dc94d4d8c12226eba8bd02a12ca6f7937e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:edit.html.twig"));

        $__internal_bf0bdcff651e46197ee9885dbdb5625606030391b3e1fa11d5a9210a086f70e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0bdcff651e46197ee9885dbdb5625606030391b3e1fa11d5a9210a086f70e0->enter($__internal_bf0bdcff651e46197ee9885dbdb5625606030391b3e1fa11d5a9210a086f70e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7021c7262ac4332443e64b76a465c3dc94d4d8c12226eba8bd02a12ca6f7937e->leave($__internal_7021c7262ac4332443e64b76a465c3dc94d4d8c12226eba8bd02a12ca6f7937e_prof);

        
        $__internal_bf0bdcff651e46197ee9885dbdb5625606030391b3e1fa11d5a9210a086f70e0->leave($__internal_bf0bdcff651e46197ee9885dbdb5625606030391b3e1fa11d5a9210a086f70e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32b9a2a456e741d2272595011730f555c4b394c6acf054d00767a47f89b67c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b9a2a456e741d2272595011730f555c4b394c6acf054d00767a47f89b67c78->enter($__internal_32b9a2a456e741d2272595011730f555c4b394c6acf054d00767a47f89b67c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c6b17af47150b3bc174402c1a0f7df8c146b224881c257d7c0e9247f37737c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6b17af47150b3bc174402c1a0f7df8c146b224881c257d7c0e9247f37737c9->enter($__internal_4c6b17af47150b3bc174402c1a0f7df8c146b224881c257d7c0e9247f37737c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cartaporte edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4c6b17af47150b3bc174402c1a0f7df8c146b224881c257d7c0e9247f37737c9->leave($__internal_4c6b17af47150b3bc174402c1a0f7df8c146b224881c257d7c0e9247f37737c9_prof);

        
        $__internal_32b9a2a456e741d2272595011730f555c4b394c6acf054d00767a47f89b67c78->leave($__internal_32b9a2a456e741d2272595011730f555c4b394c6acf054d00767a47f89b67c78_prof);

    }

    public function getTemplateName()
    {
        return ":cartaporte:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cartaporte edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cartaporte_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":cartaporte:edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/cartaporte/edit.html.twig");
    }
}
