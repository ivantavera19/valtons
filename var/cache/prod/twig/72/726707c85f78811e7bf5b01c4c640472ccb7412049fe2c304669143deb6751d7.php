<?php

/* :cartaporte:show.html.twig */
class __TwigTemplate_455431a4c4403944e6a5e57cbc7a2f9ade7d623f7d8e93e35b91d341663244f1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "folio", array()), "html", null, true);
        echo "</td>
  </tr>
</table>

<table class=\"table table-bordered\">
      
      <tr>
        <td colspan=\"7\">
            LUGAR Y FECHA: 
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "lugar", array()), "html", null, true);
        echo " A ";
        if ($this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        // line 24
        echo "        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            ORIGEN:
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "origen", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            REMITENTE:
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "remitente", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            R.F.C.
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "rfc", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DOMICILIO:
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "domicilio", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            SE RECOGERA EN:
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "serecogera", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DESTINATARIO:
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "destinatario", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            DIRECCION:
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "direccion", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            CONTACTO:
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "contacto", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"7\">
            SE ENTREGARA EN:
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "seentrega", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr>
        <td colspan=\"3\">
            VALOR UNITARIO, CUOTA CONVENIDA POR TONELADA O CARGA FRACCIONARIA:
            ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "valorunitario", array()), "html", null, true);
        echo "
        </td>
        <td colspan=\"2\">
            VALOR DECLARADO:
            ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "valordeclarado", array()), "html", null, true);
        echo "
        </td>
        <td colspan=\"2\">
            CONDICIONES DE PAGO:
            ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "condicionespago", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "numcontenedor", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "remitentedicecontenido", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "peso", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "tipo", array()), "html", null, true);
        echo "</td>
        <td rowspan=\"8\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "pesoestimado", array()), "html", null, true);
        echo "</td>
        <td>FLETE</td>
        <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "fleteimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>SEGURO</td>
        <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "seguroimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>MANIOBRAS</td>
        <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "maniobrasimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>AUTOPISTAS LIBRAMIENTOS Y TRANSBORDADORES</td>
        <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "autopistaslibratrans", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>OTROS</td>
        <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "otrosimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>IMPORTE \$</td>
        <td>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "importe", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>I.V.A 16%</td>
        <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "sumiva", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>SUBTOTAL \$</td>
        <td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "subtotalimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td colspan=\"2\">REEMBARCO: ";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "reembarco", array()), "html", null, true);
        echo "</td>
        <td colspan=\"3\">REEMBARCARSE CON: </td>
        <td>RET. I.V.A. \$</td>
        <td>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "retivaimporte", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td colspan=\"2\">CONDUJO ";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "condujo", array()), "html", null, true);
        echo "<br>
            DE: ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "de", array()), "html", null, true);
        echo " A: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "hastaprimero", array()), "html", null, true);
        echo "
        </td>
        <td colspan=\"3\">CONDUCIRA ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "conducira", array()), "html", null, true);
        echo "<br>
            DE : ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "desegundo", array()), "html", null, true);
        echo " A: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "hastasegundo", array()), "html", null, true);
        echo "
            
        </td>
        <td>TOTAL \$</td>
        <td>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "total", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td colspan=\"5\">
            <p align=\"center\">IMPORTE TOTAL EN LETRA<br>
              ";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "importeenletra", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "nombredestinatario", array()), "html", null, true);
        echo "
            </p>
        </td>
        <td colspan=\"2\"><p align=\"center\">RECIBI DE CONFORMIDAD <br><br><br><br>_________________ <br>FIRMA DEL DESTINATARIO</p></td>
        <td>
            <p align=\"center\">OBSERVACIONES</p>
            <p align=\"center\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "observaciones", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartaporte_edit", array("id" => $this->getAttribute((isset($context["cartaporte"]) ? $context["cartaporte"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 198
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 200
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>

";
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
        return array (  357 => 200,  352 => 198,  346 => 195,  340 => 192,  327 => 182,  318 => 176,  303 => 164,  295 => 159,  286 => 155,  282 => 154,  275 => 152,  271 => 151,  265 => 148,  259 => 145,  253 => 142,  246 => 138,  239 => 134,  232 => 130,  225 => 126,  218 => 122,  211 => 118,  204 => 114,  199 => 112,  195 => 111,  191 => 110,  187 => 109,  183 => 108,  163 => 91,  156 => 87,  149 => 83,  140 => 77,  131 => 71,  122 => 65,  113 => 59,  104 => 53,  95 => 47,  86 => 41,  77 => 35,  68 => 29,  61 => 24,  55 => 23,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cartaporte:show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app/Resources\\views/cartaporte/show.html.twig");
    }
}
