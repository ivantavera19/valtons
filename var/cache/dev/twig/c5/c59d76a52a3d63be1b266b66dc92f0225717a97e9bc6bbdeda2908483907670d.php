<?php

/* cartaporte/index.html.twig */
class __TwigTemplate_be51a3af1347e8d5f7806295e40d08de5b58ed5c1ac6c4a82bdc5f86255c1a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cartaporte/index.html.twig", 1);
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
        $__internal_f6f9880ae3a03c35d1c4af5678f8b339b7f01a80ed1b84a1bb43e719d5b0ef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f9880ae3a03c35d1c4af5678f8b339b7f01a80ed1b84a1bb43e719d5b0ef05->enter($__internal_f6f9880ae3a03c35d1c4af5678f8b339b7f01a80ed1b84a1bb43e719d5b0ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/index.html.twig"));

        $__internal_16f19fef069f16bfb7a192e4173cf7b1a6da451026f1dfa440f78e3b2624386e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f19fef069f16bfb7a192e4173cf7b1a6da451026f1dfa440f78e3b2624386e->enter($__internal_16f19fef069f16bfb7a192e4173cf7b1a6da451026f1dfa440f78e3b2624386e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartaporte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f9880ae3a03c35d1c4af5678f8b339b7f01a80ed1b84a1bb43e719d5b0ef05->leave($__internal_f6f9880ae3a03c35d1c4af5678f8b339b7f01a80ed1b84a1bb43e719d5b0ef05_prof);

        
        $__internal_16f19fef069f16bfb7a192e4173cf7b1a6da451026f1dfa440f78e3b2624386e->leave($__internal_16f19fef069f16bfb7a192e4173cf7b1a6da451026f1dfa440f78e3b2624386e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_371e2ea58eecef3bddc82cf25919d7a05b19fd0730493ee2501b3910180857d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371e2ea58eecef3bddc82cf25919d7a05b19fd0730493ee2501b3910180857d3->enter($__internal_371e2ea58eecef3bddc82cf25919d7a05b19fd0730493ee2501b3910180857d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_213691164017df20d8835e58820cdf7b2fe23865508fdbcdcde2ff9bbadb5377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213691164017df20d8835e58820cdf7b2fe23865508fdbcdcde2ff9bbadb5377->enter($__internal_213691164017df20d8835e58820cdf7b2fe23865508fdbcdcde2ff9bbadb5377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>LISTA DE CARTAS PORTE</h1>

    <table class=\"table\">
        <thead>
            <tr>
                
                <th>FOLIO</th>
                <th>LUGAR</th>
                <th>FECHA</th>
                <th>ORIGEN</th>
                <th>REMITENTE</th>
                <th>RFC</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartaportes"]) ? $context["cartaportes"] : $this->getContext($context, "cartaportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cartaporte"]) {
            // line 21
            echo "            <tr>
                
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartaporte"], "folio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartaporte"], "lugar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["cartaporte"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cartaporte"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartaporte"], "origen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartaporte"], "remitente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartaporte"], "rfc", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li style=\"list-style:none;\">
                            <a class=\"btn btn-sm btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_show", array("id" => $this->getAttribute($context["cartaporte"], "id", array()))), "html", null, true);
            echo "\">MOSTRAR</a>
                        </li>
                        <li style=\"list-style:none;\">
                            <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_edit", array("id" => $this->getAttribute($context["cartaporte"], "id", array()))), "html", null, true);
            echo "\">EDITAR</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartaporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li style=\"list-style:none;\">
            <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_new");
        echo "\">CREAR NUEVA CARTA PORTE</a>
        </li>
    </ul>
";
        
        $__internal_213691164017df20d8835e58820cdf7b2fe23865508fdbcdcde2ff9bbadb5377->leave($__internal_213691164017df20d8835e58820cdf7b2fe23865508fdbcdcde2ff9bbadb5377_prof);

        
        $__internal_371e2ea58eecef3bddc82cf25919d7a05b19fd0730493ee2501b3910180857d3->leave($__internal_371e2ea58eecef3bddc82cf25919d7a05b19fd0730493ee2501b3910180857d3_prof);

    }

    public function getTemplateName()
    {
        return "cartaporte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  122 => 41,  110 => 35,  104 => 32,  97 => 28,  93 => 27,  89 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>LISTA DE CARTAS PORTE</h1>

    <table class=\"table\">
        <thead>
            <tr>
                
                <th>FOLIO</th>
                <th>LUGAR</th>
                <th>FECHA</th>
                <th>ORIGEN</th>
                <th>REMITENTE</th>
                <th>RFC</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        {% for cartaporte in cartaportes %}
            <tr>
                
                <td>{{ cartaporte.folio }}</td>
                <td>{{ cartaporte.lugar }}</td>
                <td>{% if cartaporte.fecha %}{{ cartaporte.fecha|date('Y-m-d') }}{% endif %}</td>
                <td>{{ cartaporte.origen }}</td>
                <td>{{ cartaporte.remitente }}</td>
                <td>{{ cartaporte.rfc }}</td>
                <td>
                    <ul>
                        <li style=\"list-style:none;\">
                            <a class=\"btn btn-sm btn-success\" href=\"{{ path('cartaporte_show', { 'id': cartaporte.id }) }}\">MOSTRAR</a>
                        </li>
                        <li style=\"list-style:none;\">
                            <a class=\"btn btn-sm btn-warning\" href=\"{{ path('cartaporte_edit', { 'id': cartaporte.id }) }}\">EDITAR</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li style=\"list-style:none;\">
            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('cartaporte_new') }}\">CREAR NUEVA CARTA PORTE</a>
        </li>
    </ul>
{% endblock %}
", "cartaporte/index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\cartaporte\\index.html.twig");
    }
}
