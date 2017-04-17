<?php

/* :cartaporte:show.html.twig */
class __TwigTemplate_f28103333986e56d99e22f205c69cacedd3e0fe940b0424246ff237f42b6c014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cartaporte:show.html.twig", 1);
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
        $__internal_0f52af5f8281f0c3bc92ca8c0810e80a3d79bbd85792c6c2a220d7830da279a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f52af5f8281f0c3bc92ca8c0810e80a3d79bbd85792c6c2a220d7830da279a8->enter($__internal_0f52af5f8281f0c3bc92ca8c0810e80a3d79bbd85792c6c2a220d7830da279a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:show.html.twig"));

        $__internal_9a05e6d332039e9335a45fb950aca9f8b56fd693e537db930cdb9312192206bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a05e6d332039e9335a45fb950aca9f8b56fd693e537db930cdb9312192206bd->enter($__internal_9a05e6d332039e9335a45fb950aca9f8b56fd693e537db930cdb9312192206bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cartaporte:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f52af5f8281f0c3bc92ca8c0810e80a3d79bbd85792c6c2a220d7830da279a8->leave($__internal_0f52af5f8281f0c3bc92ca8c0810e80a3d79bbd85792c6c2a220d7830da279a8_prof);

        
        $__internal_9a05e6d332039e9335a45fb950aca9f8b56fd693e537db930cdb9312192206bd->leave($__internal_9a05e6d332039e9335a45fb950aca9f8b56fd693e537db930cdb9312192206bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24d01aa4e54ec8757e4a80e9842a6d2476a0770fd87c5959a28c621c7a988911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d01aa4e54ec8757e4a80e9842a6d2476a0770fd87c5959a28c621c7a988911->enter($__internal_24d01aa4e54ec8757e4a80e9842a6d2476a0770fd87c5959a28c621c7a988911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_511afa12b56538d0f425ea347631f599b5e3059fb923e9a0643d85e0d031ccfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511afa12b56538d0f425ea347631f599b5e3059fb923e9a0643d85e0d031ccfc->enter($__internal_511afa12b56538d0f425ea347631f599b5e3059fb923e9a0643d85e0d031ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<table class=\"table\">
  <tr>
    <th colspan=\"6\" rowspan=\"2\">
      <p align=\"center\">R.F.C VGR131216LD5 <br> RIO CHURUBUSCO 1611 TORRE 3 DESPACHO 501, COL. GABRIEL RAMOS MILLAN <br> DELEG. IZTACALCO CDMX C.P. 08730 <br> SKYPE: atención.valtons E-mail: servicioalcliente@valtons.com.mx / isai.perez@valtons.com.mx</p>
    </th>
    <th>FOLIO</th>
  </tr>
  <tr>
    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "folio", array()), "html", null, true);
        echo "</td>
  </tr>
</table>

<table class=\"table table-bordered\">
      
      <tr>
        <td colspan=\"7\">
            LUGAR Y FECHA: 
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "lugar", array()), "html", null, true);
        echo " A ";
        if ($this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        // line 24
        echo "        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            ORIGEN:
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "origen", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            REMITENTE:
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "remitente", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            R.F.C.
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "rfc", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DOMICILIO:
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "domicilio", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            SE RECOGERA EN:
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "serecogera", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DESTINATARIO:
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "destinatario", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DIRECCION:
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "direccion", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            CONTACTO:
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "contacto", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            SE ENTREGARA EN:
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "seentrega", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"3\">
            VALOR UNITARIO, CUOTA CONVENIDA POR TONELADA O CARGA FRACCIONARIA:
            ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "valorunitario", array()), "html", null, true);
        echo "
        </td>
        <td colspan=\"2\">
            VALOR DECLARADO:
            ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "valordeclarado", array()), "html", null, true);
        echo "
        </td>
        <td colspan=\"2\">
            CONDICIONES DE PAGO:
            ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "condicionespago", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td>BULTOS</td>
        <td rowspan=\"2\">QUE EL REMITENTE DICE QUE CONTIENE</td>
        <td rowspan=\"2\">PESO</td>
        <td colspan=\"2\">VOLUMEN</td>
        <td rowspan=\"2\">CONCEPTO</td>
        <td rowspan=\"2\">IMPORTE</td>
      </tr>
      <tr>
        <td>No. DE CONTENEDOR</td>
        <td>TIPO</td>
        <td>PESO ESTIMADO</td>
      </tr>
      <tr>
        <td rowspan=\"8\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "numcontenedor", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "remitentedicecontenido", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "peso", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "tipo", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "pesoestimado", array()), "html", null, true);
        echo "</td>
        <td>FLETE</td>
        <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "fleteimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>SEGURO</td>
        <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "seguroimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>MANIOBRAS</td>
        <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "maniobrasimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>AUTOPISTAS LIBRAMIENTOS Y TRANSBORDADORES</td>
        <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "autopistaslibratrans", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>OTROS</td>
        <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "otrosimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>IMPORTE \$</td>
        <td>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "importe", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>I.V.A 16%</td>
        <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "sumiva", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>SUBTOTAL \$</td>
        <td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "subtotalimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td colspan=\"2\">REEMBARCO: ";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "reembarco", array()), "html", null, true);
        echo "</td>
        <td colspan=\"3\">REEMBARCARSE CON: </td>
        <td>RET. I.V.A. \$</td>
        <td>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "retivaimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td colspan=\"2\">CONDUJO ";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "condujo", array()), "html", null, true);
        echo "<br>
            DE: ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "de", array()), "html", null, true);
        echo " A: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "hastaprimero", array()), "html", null, true);
        echo "
        </td>
        <td colspan=\"3\">CONDUCIRA ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "conducira", array()), "html", null, true);
        echo "<br>
            DE : ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "desegundo", array()), "html", null, true);
        echo " A: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "hastasegundo", array()), "html", null, true);
        echo "
            
        </td>
        <td>TOTAL \$</td>
        <td>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "total", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td colspan=\"5\">
            <p align=\"center\">IMPORTE TOTAL EN LETRA<br>
              ";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "importeenletra", array()), "html", null, true);
        echo "
            </p> 
         </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan=\"2\">
            <p align=\"center\">ESTE SERVICIO NO INCLUYE SEGURO DE LA <br>MERCANCIA, TANTO LAS MERCANCIAS COMO <br>EL CONTENEDOR VIAJAN POR CUENTA Y <br>RIESGO DEL CLIENTE Y NO ASEGURAMOS <br>LAS MISMAS, DE NO MEDIAR ORDEN <br>EXPRESA POR ESCRITO EN CADA SERVICIO</p>
        </td>
        <td colspan=\"2\">
            <p align=\"center\">NOMBRE DEL DESTINATARIO <br><br>
                ";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "nombredestinatario", array()), "html", null, true);
        echo "
            </p>
        </td>
        <td colspan=\"2\"><p align=\"center\">RECIBI DE CONFORMIDAD <br><br><br><br>_________________ <br>FIRMA DEL DESTINATARIO</p></td>
        <td>
            <p align=\"center\">OBSERVACIONES</p>
            <p align=\"center\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "observaciones", array()), "html", null, true);
        echo "</p> 
        </td>
      </tr>
        
        
</table>


    <ul>
        <li>
            <a href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_edit", array("id" => $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : $this->getContext($context, "cartaporte")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 198
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 200
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

";
        
        $__internal_511afa12b56538d0f425ea347631f599b5e3059fb923e9a0643d85e0d031ccfc->leave($__internal_511afa12b56538d0f425ea347631f599b5e3059fb923e9a0643d85e0d031ccfc_prof);

        
        $__internal_24d01aa4e54ec8757e4a80e9842a6d2476a0770fd87c5959a28c621c7a988911->leave($__internal_24d01aa4e54ec8757e4a80e9842a6d2476a0770fd87c5959a28c621c7a988911_prof);

    }

    public function getTemplateName()
    {
        return ":cartaporte:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 200,  370 => 198,  364 => 195,  358 => 192,  345 => 182,  336 => 176,  321 => 164,  313 => 159,  304 => 155,  300 => 154,  293 => 152,  289 => 151,  283 => 148,  277 => 145,  271 => 142,  264 => 138,  257 => 134,  250 => 130,  243 => 126,  236 => 122,  229 => 118,  222 => 114,  217 => 112,  213 => 111,  209 => 110,  205 => 109,  201 => 108,  181 => 91,  174 => 87,  167 => 83,  158 => 77,  149 => 71,  140 => 65,  131 => 59,  122 => 53,  113 => 47,  104 => 41,  95 => 35,  86 => 29,  79 => 24,  73 => 23,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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


<table class=\"table\">
  <tr>
    <th colspan=\"6\" rowspan=\"2\">
      <p align=\"center\">R.F.C VGR131216LD5 <br> RIO CHURUBUSCO 1611 TORRE 3 DESPACHO 501, COL. GABRIEL RAMOS MILLAN <br> DELEG. IZTACALCO CDMX C.P. 08730 <br> SKYPE: atención.valtons E-mail: servicioalcliente@valtons.com.mx / isai.perez@valtons.com.mx</p>
    </th>
    <th>FOLIO</th>
  </tr>
  <tr>
    <td>{{ cartaporte.folio }}</td>
  </tr>
</table>

<table class=\"table table-bordered\">
      
      <tr>
        <td colspan=\"7\">
            LUGAR Y FECHA: 
            {{ cartaporte.lugar }} A {% if cartaporte.fecha %}{{ cartaporte.fecha|date('Y-m-d') }}{% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            ORIGEN:
            {{ cartaporte.origen }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            REMITENTE:
            {{ cartaporte.remitente }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            R.F.C.
            {{ cartaporte.rfc }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DOMICILIO:
            {{ cartaporte.domicilio }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            SE RECOGERA EN:
            {{ cartaporte.serecogera }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DESTINATARIO:
            {{ cartaporte.destinatario }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DIRECCION:
            {{ cartaporte.direccion }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            CONTACTO:
            {{ cartaporte.contacto }}
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            SE ENTREGARA EN:
            {{ cartaporte.seentrega }}
        </td>
      </tr>
      <tr>
        <td colspan=\"3\">
            VALOR UNITARIO, CUOTA CONVENIDA POR TONELADA O CARGA FRACCIONARIA:
            {{ cartaporte.valorunitario }}
        </td>
        <td colspan=\"2\">
            VALOR DECLARADO:
            {{ cartaporte.valordeclarado }}
        </td>
        <td colspan=\"2\">
            CONDICIONES DE PAGO:
            {{ cartaporte.condicionespago }}
        </td>
      </tr>
      <tr>
        <td>BULTOS</td>
        <td rowspan=\"2\">QUE EL REMITENTE DICE QUE CONTIENE</td>
        <td rowspan=\"2\">PESO</td>
        <td colspan=\"2\">VOLUMEN</td>
        <td rowspan=\"2\">CONCEPTO</td>
        <td rowspan=\"2\">IMPORTE</td>
      </tr>
      <tr>
        <td>No. DE CONTENEDOR</td>
        <td>TIPO</td>
        <td>PESO ESTIMADO</td>
      </tr>
      <tr>
        <td rowspan=\"8\">{{ cartaporte.numcontenedor }}</td>
        <td rowspan=\"8\">{{ cartaporte.remitentedicecontenido }}</td>
        <td rowspan=\"8\">{{ cartaporte.peso }}</td>
        <td rowspan=\"8\">{{ cartaporte.tipo }}</td>
        <td rowspan=\"8\">{{ cartaporte.pesoestimado }}</td>
        <td>FLETE</td>
        <td>{{ cartaporte.fleteimporte }}</td>
      </tr>
      <tr>
        <td>SEGURO</td>
        <td>{{ cartaporte.seguroimporte }}</td>
      </tr>
      <tr>
        <td>MANIOBRAS</td>
        <td>{{ cartaporte.maniobrasimporte }}</td>
      </tr>
      <tr>
        <td>AUTOPISTAS LIBRAMIENTOS Y TRANSBORDADORES</td>
        <td>{{ cartaporte.autopistaslibratrans }}</td>
      </tr>
      <tr>
        <td>OTROS</td>
        <td>{{ cartaporte.otrosimporte }}</td>
      </tr>
      <tr>
        <td>IMPORTE \$</td>
        <td>{{ cartaporte.importe }}</td>
      </tr>
      <tr>
        <td>I.V.A 16%</td>
        <td>{{ cartaporte.sumiva }}</td>
      </tr>
      <tr>
        <td>SUBTOTAL \$</td>
        <td>{{ cartaporte.subtotalimporte }}</td>
      </tr>
      <tr>
        <td colspan=\"2\">REEMBARCO: {{ cartaporte.reembarco }}</td>
        <td colspan=\"3\">REEMBARCARSE CON: </td>
        <td>RET. I.V.A. \$</td>
        <td>{{ cartaporte.retivaimporte }}</td>
      </tr>
      <tr>
        <td colspan=\"2\">CONDUJO {{ cartaporte.condujo }}<br>
            DE: {{ cartaporte.de }} A: {{ cartaporte.hastaprimero }}
        </td>
        <td colspan=\"3\">CONDUCIRA {{ cartaporte.conducira }}<br>
            DE : {{ cartaporte.desegundo }} A: {{ cartaporte.hastasegundo }}
            
        </td>
        <td>TOTAL \$</td>
        <td>{{ cartaporte.total }}</td>
      </tr>
      <tr>
        <td colspan=\"5\">
            <p align=\"center\">IMPORTE TOTAL EN LETRA<br>
              {{ cartaporte.importeenletra }}
            </p> 
         </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan=\"2\">
            <p align=\"center\">ESTE SERVICIO NO INCLUYE SEGURO DE LA <br>MERCANCIA, TANTO LAS MERCANCIAS COMO <br>EL CONTENEDOR VIAJAN POR CUENTA Y <br>RIESGO DEL CLIENTE Y NO ASEGURAMOS <br>LAS MISMAS, DE NO MEDIAR ORDEN <br>EXPRESA POR ESCRITO EN CADA SERVICIO</p>
        </td>
        <td colspan=\"2\">
            <p align=\"center\">NOMBRE DEL DESTINATARIO <br><br>
                {{ cartaporte.nombredestinatario }}
            </p>
        </td>
        <td colspan=\"2\"><p align=\"center\">RECIBI DE CONFORMIDAD <br><br><br><br>_________________ <br>FIRMA DEL DESTINATARIO</p></td>
        <td>
            <p align=\"center\">OBSERVACIONES</p>
            <p align=\"center\">{{ cartaporte.observaciones }}</p> 
        </td>
      </tr>
        
        
</table>


    <ul>
        <li>
            <a href=\"{{ path('cartaporte_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('cartaporte_edit', { 'id': cartaporte.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

{% endblock %}
", ":cartaporte:show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/cartaporte/show.html.twig");
    }
}
