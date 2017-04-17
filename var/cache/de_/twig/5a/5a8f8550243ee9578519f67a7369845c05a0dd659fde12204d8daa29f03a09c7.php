<?php

/* :cartaporte:index.html.twig */
class __TwigTemplate_2b4d99f482bc0553570aeffddedfce8909bac4ffc56f86f8501abf404b013cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cartaporte:index.html.twig", 1);
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
        $__internal_5c09fbf1ed6979e9934ee1c083efb68991f3d6e743b1597365d011e56c16ec0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c09fbf1ed6979e9934ee1c083efb68991f3d6e743b1597365d011e56c16ec0c->enter($__internal_5c09fbf1ed6979e9934ee1c083efb68991f3d6e743b1597365d011e56c16ec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:index.html.twig"));

        $__internal_7681b80219b9628aa42458ee954aa537071bf7321da920196193c79cf1649fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7681b80219b9628aa42458ee954aa537071bf7321da920196193c79cf1649fcc->enter($__internal_7681b80219b9628aa42458ee954aa537071bf7321da920196193c79cf1649fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c09fbf1ed6979e9934ee1c083efb68991f3d6e743b1597365d011e56c16ec0c->leave($__internal_5c09fbf1ed6979e9934ee1c083efb68991f3d6e743b1597365d011e56c16ec0c_prof);

        
        $__internal_7681b80219b9628aa42458ee954aa537071bf7321da920196193c79cf1649fcc->leave($__internal_7681b80219b9628aa42458ee954aa537071bf7321da920196193c79cf1649fcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43ceb74402171d52d2f49f68d2b2ba98b8ab272000f0bec167789c1d5d75b1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ceb74402171d52d2f49f68d2b2ba98b8ab272000f0bec167789c1d5d75b1d9->enter($__internal_43ceb74402171d52d2f49f68d2b2ba98b8ab272000f0bec167789c1d5d75b1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9751aa54be3557186d4c0671e385d30eab44a64977f885d012b71ec77289de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9751aa54be3557186d4c0671e385d30eab44a64977f885d012b71ec77289de3->enter($__internal_a9751aa54be3557186d4c0671e385d30eab44a64977f885d012b71ec77289de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cartaportes list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Folio</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Origen</th>
                <th>Remitente</th>
                <th>Rfc</th>
                <th>Actions</th>
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
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_show", array("id" => $this->getAttribute($context["cartaporte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartaporte"], "id", array()), "html", null, true);
            echo "</a></td>
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
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_show", array("id" => $this->getAttribute($context["cartaporte"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_edit", array("id" => $this->getAttribute($context["cartaporte"], "id", array()))), "html", null, true);
            echo "\">edit</a>
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
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_new");
        echo "\">Create a new cartaporte</a>
        </li>
    </ul>
";
        
        $__internal_a9751aa54be3557186d4c0671e385d30eab44a64977f885d012b71ec77289de3->leave($__internal_a9751aa54be3557186d4c0671e385d30eab44a64977f885d012b71ec77289de3_prof);

        
        $__internal_43ceb74402171d52d2f49f68d2b2ba98b8ab272000f0bec167789c1d5d75b1d9->leave($__internal_43ceb74402171d52d2f49f68d2b2ba98b8ab272000f0bec167789c1d5d75b1d9_prof);

    }

    public function getTemplateName()
    {
        return ":cartaporte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 41,  115 => 35,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cartaportes list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Folio</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Origen</th>
                <th>Remitente</th>
                <th>Rfc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cartaporte in cartaportes %}
            <tr>
                <td><a href=\"{{ path('cartaporte_show', { 'id': cartaporte.id }) }}\">{{ cartaporte.id }}</a></td>
                <td>{{ cartaporte.folio }}</td>
                <td>{{ cartaporte.lugar }}</td>
                <td>{% if cartaporte.fecha %}{{ cartaporte.fecha|date('Y-m-d') }}{% endif %}</td>
                <td>{{ cartaporte.origen }}</td>
                <td>{{ cartaporte.remitente }}</td>
                <td>{{ cartaporte.rfc }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cartaporte_show', { 'id': cartaporte.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cartaporte_edit', { 'id': cartaporte.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cartaporte_new') }}\">Create a new cartaporte</a>
        </li>
    </ul>
{% endblock %}
", ":cartaporte:index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/cartaporte/index.html.twig");
    }
}
