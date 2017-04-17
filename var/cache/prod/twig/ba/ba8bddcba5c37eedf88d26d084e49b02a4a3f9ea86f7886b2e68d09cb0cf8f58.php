<?php

/* :cartaporte:index.html.twig */
class __TwigTemplate_35330bed5cd990d1bf5fed77d3d4be17aabf95dc4c9d463fe4c332254014292f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cartaportes"]) ? $context["cartaportes"] : null));
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
        return array (  111 => 46,  104 => 41,  92 => 35,  86 => 32,  79 => 28,  75 => 27,  71 => 26,  65 => 25,  61 => 24,  57 => 23,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cartaporte:index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/cartaporte/index.html.twig");
    }
}
