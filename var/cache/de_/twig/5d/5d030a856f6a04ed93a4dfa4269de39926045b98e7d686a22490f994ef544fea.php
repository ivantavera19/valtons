<?php

/* :cartaporte:new.html.twig */
class __TwigTemplate_4b825e09f8487f4637a8adbe663842a8bf60d9845d5b04476cbfbdc0d7111e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cartaporte:new.html.twig", 1);
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
        $__internal_93fc79a80f68a3a876418258d92eb5eb916684fe109b6fd0ecec01f14e3350be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fc79a80f68a3a876418258d92eb5eb916684fe109b6fd0ecec01f14e3350be->enter($__internal_93fc79a80f68a3a876418258d92eb5eb916684fe109b6fd0ecec01f14e3350be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:new.html.twig"));

        $__internal_85350b91dd59f2c73d93b9cecaa5b18b5b5fd52ee273a9359c069b57024e725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85350b91dd59f2c73d93b9cecaa5b18b5b5fd52ee273a9359c069b57024e725a->enter($__internal_85350b91dd59f2c73d93b9cecaa5b18b5b5fd52ee273a9359c069b57024e725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fc79a80f68a3a876418258d92eb5eb916684fe109b6fd0ecec01f14e3350be->leave($__internal_93fc79a80f68a3a876418258d92eb5eb916684fe109b6fd0ecec01f14e3350be_prof);

        
        $__internal_85350b91dd59f2c73d93b9cecaa5b18b5b5fd52ee273a9359c069b57024e725a->leave($__internal_85350b91dd59f2c73d93b9cecaa5b18b5b5fd52ee273a9359c069b57024e725a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfdedbb0c626128049e54573952088198ccfa8bd4247370ed828472236abf5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdedbb0c626128049e54573952088198ccfa8bd4247370ed828472236abf5ba->enter($__internal_dfdedbb0c626128049e54573952088198ccfa8bd4247370ed828472236abf5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea123c145cc3d9c5a95921ebc6096878a15661fbe4c924b439bd6e8cb6aab9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea123c145cc3d9c5a95921ebc6096878a15661fbe4c924b439bd6e8cb6aab9c1->enter($__internal_ea123c145cc3d9c5a95921ebc6096878a15661fbe4c924b439bd6e8cb6aab9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea123c145cc3d9c5a95921ebc6096878a15661fbe4c924b439bd6e8cb6aab9c1->leave($__internal_ea123c145cc3d9c5a95921ebc6096878a15661fbe4c924b439bd6e8cb6aab9c1_prof);

        
        $__internal_dfdedbb0c626128049e54573952088198ccfa8bd4247370ed828472236abf5ba->leave($__internal_dfdedbb0c626128049e54573952088198ccfa8bd4247370ed828472236abf5ba_prof);

    }

    public function getTemplateName()
    {
        return ":cartaporte:new.html.twig";
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
", ":cartaporte:new.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/cartaporte/new.html.twig");
    }
}
