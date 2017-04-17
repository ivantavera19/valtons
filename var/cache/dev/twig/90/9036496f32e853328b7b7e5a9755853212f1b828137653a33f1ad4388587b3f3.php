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
        $__internal_c3a523c7c76adb75f200dc220274be4dda532672ea6e9350207a0054832adeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a523c7c76adb75f200dc220274be4dda532672ea6e9350207a0054832adeae->enter($__internal_c3a523c7c76adb75f200dc220274be4dda532672ea6e9350207a0054832adeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/new.html.twig"));

        $__internal_98246dbc25af4f269f9e65c4de695013e64d7e80d58764e53d853ff6b4475109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98246dbc25af4f269f9e65c4de695013e64d7e80d58764e53d853ff6b4475109->enter($__internal_98246dbc25af4f269f9e65c4de695013e64d7e80d58764e53d853ff6b4475109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a523c7c76adb75f200dc220274be4dda532672ea6e9350207a0054832adeae->leave($__internal_c3a523c7c76adb75f200dc220274be4dda532672ea6e9350207a0054832adeae_prof);

        
        $__internal_98246dbc25af4f269f9e65c4de695013e64d7e80d58764e53d853ff6b4475109->leave($__internal_98246dbc25af4f269f9e65c4de695013e64d7e80d58764e53d853ff6b4475109_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f33a343c5285539f2acea7f7f8f9b1c6c27c38e88bb1598f6a0c81f94b1befcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33a343c5285539f2acea7f7f8f9b1c6c27c38e88bb1598f6a0c81f94b1befcf->enter($__internal_f33a343c5285539f2acea7f7f8f9b1c6c27c38e88bb1598f6a0c81f94b1befcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d535bd7f500001948a55dc1c7640d128dc66b815709dd010495710e0215a5221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d535bd7f500001948a55dc1c7640d128dc66b815709dd010495710e0215a5221->enter($__internal_d535bd7f500001948a55dc1c7640d128dc66b815709dd010495710e0215a5221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NUEVA CARTA PORTE</h1>

";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-sm btn-primary\" type=\"submit\" value=\"CREAR\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   <br>
            <a class=\"btn btn-sm btn-success\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_index");
        echo "\">REGRESAR A LA LISTA</a>

";
        
        $__internal_d535bd7f500001948a55dc1c7640d128dc66b815709dd010495710e0215a5221->leave($__internal_d535bd7f500001948a55dc1c7640d128dc66b815709dd010495710e0215a5221_prof);

        
        $__internal_f33a343c5285539f2acea7f7f8f9b1c6c27c38e88bb1598f6a0c81f94b1befcf->leave($__internal_f33a343c5285539f2acea7f7f8f9b1c6c27c38e88bb1598f6a0c81f94b1befcf_prof);

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
        return array (  71 => 13,  65 => 10,  60 => 8,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NUEVA CARTA PORTE</h1>

{% form_theme form 'bootstrap_3_layout.html.twig' %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class=\"btn btn-sm btn-primary\" type=\"submit\" value=\"CREAR\" />
    {{ form_end(form) }}

   <br>
            <a class=\"btn btn-sm btn-success\" href=\"{{ path('cartaporte_index') }}\">REGRESAR A LA LISTA</a>

{% endblock %}
", "cartaporte/new.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\cartaporte\\new.html.twig");
    }
}
