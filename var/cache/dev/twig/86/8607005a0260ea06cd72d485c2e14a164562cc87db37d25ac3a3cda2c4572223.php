<?php

/* cartaporte/edit.html.twig */
class __TwigTemplate_e175954060f8b2c1cb8d73eb56728f0490c8a5a8e98d8012fee8d8009facf354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cartaporte/edit.html.twig", 1);
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
        $__internal_219116ae7643558b669bd7be498dbfa96daf80325074266831958d0d349e2d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219116ae7643558b669bd7be498dbfa96daf80325074266831958d0d349e2d77->enter($__internal_219116ae7643558b669bd7be498dbfa96daf80325074266831958d0d349e2d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/edit.html.twig"));

        $__internal_00661714ea473ee2d6fa3b7d78974b5aaffdedb53a91df0124325a29c486c5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00661714ea473ee2d6fa3b7d78974b5aaffdedb53a91df0124325a29c486c5c5->enter($__internal_00661714ea473ee2d6fa3b7d78974b5aaffdedb53a91df0124325a29c486c5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219116ae7643558b669bd7be498dbfa96daf80325074266831958d0d349e2d77->leave($__internal_219116ae7643558b669bd7be498dbfa96daf80325074266831958d0d349e2d77_prof);

        
        $__internal_00661714ea473ee2d6fa3b7d78974b5aaffdedb53a91df0124325a29c486c5c5->leave($__internal_00661714ea473ee2d6fa3b7d78974b5aaffdedb53a91df0124325a29c486c5c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dce09b281932f4c6aa2b42e7378d451b74a9cba9c50811707c4a09fc03bc10d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce09b281932f4c6aa2b42e7378d451b74a9cba9c50811707c4a09fc03bc10d6->enter($__internal_dce09b281932f4c6aa2b42e7378d451b74a9cba9c50811707c4a09fc03bc10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d56334c6cb41569549f5ff7c58f47f367dd41bdfe949b488215f23ce3fc29580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56334c6cb41569549f5ff7c58f47f367dd41bdfe949b488215f23ce3fc29580->enter($__internal_d56334c6cb41569549f5ff7c58f47f367dd41bdfe949b488215f23ce3fc29580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cartaporte edit</h1>

";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        echo "   
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d56334c6cb41569549f5ff7c58f47f367dd41bdfe949b488215f23ce3fc29580->leave($__internal_d56334c6cb41569549f5ff7c58f47f367dd41bdfe949b488215f23ce3fc29580_prof);

        
        $__internal_dce09b281932f4c6aa2b42e7378d451b74a9cba9c50811707c4a09fc03bc10d6->leave($__internal_dce09b281932f4c6aa2b42e7378d451b74a9cba9c50811707c4a09fc03bc10d6_prof);

    }

    public function getTemplateName()
    {
        return "cartaporte/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 17,  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% form_theme edit_form 'bootstrap_3_layout.html.twig' %}   
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
", "cartaporte/edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\cartaporte\\edit.html.twig");
    }
}
