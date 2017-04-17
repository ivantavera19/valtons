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
        $__internal_4f51d3ee24a70649044b6e2c5a383ff07dd6c2282e29503222112ed8020514c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f51d3ee24a70649044b6e2c5a383ff07dd6c2282e29503222112ed8020514c2->enter($__internal_4f51d3ee24a70649044b6e2c5a383ff07dd6c2282e29503222112ed8020514c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/edit.html.twig"));

        $__internal_a1e5c0a38ebe21551aed0b47eb91f94aeb2c0a666e997124bb3d477661e284aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e5c0a38ebe21551aed0b47eb91f94aeb2c0a666e997124bb3d477661e284aa->enter($__internal_a1e5c0a38ebe21551aed0b47eb91f94aeb2c0a666e997124bb3d477661e284aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f51d3ee24a70649044b6e2c5a383ff07dd6c2282e29503222112ed8020514c2->leave($__internal_4f51d3ee24a70649044b6e2c5a383ff07dd6c2282e29503222112ed8020514c2_prof);

        
        $__internal_a1e5c0a38ebe21551aed0b47eb91f94aeb2c0a666e997124bb3d477661e284aa->leave($__internal_a1e5c0a38ebe21551aed0b47eb91f94aeb2c0a666e997124bb3d477661e284aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f5b24ea819640a0b3c5880a614f9cf6fd3a32514bcf906814439bec88276e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5b24ea819640a0b3c5880a614f9cf6fd3a32514bcf906814439bec88276e61->enter($__internal_7f5b24ea819640a0b3c5880a614f9cf6fd3a32514bcf906814439bec88276e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f642c288bb77aa7bc8586547ae5f0c94377fb7db2f8267449e7182772fa9b0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f642c288bb77aa7bc8586547ae5f0c94377fb7db2f8267449e7182772fa9b0db->enter($__internal_f642c288bb77aa7bc8586547ae5f0c94377fb7db2f8267449e7182772fa9b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f642c288bb77aa7bc8586547ae5f0c94377fb7db2f8267449e7182772fa9b0db->leave($__internal_f642c288bb77aa7bc8586547ae5f0c94377fb7db2f8267449e7182772fa9b0db_prof);

        
        $__internal_7f5b24ea819640a0b3c5880a614f9cf6fd3a32514bcf906814439bec88276e61->leave($__internal_7f5b24ea819640a0b3c5880a614f9cf6fd3a32514bcf906814439bec88276e61_prof);

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
", "cartaporte/edit.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\cartaporte\\edit.html.twig");
    }
}
