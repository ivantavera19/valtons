<?php

namespace ValtonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartaporte
 *
 * @ORM\Table(name="cartaporte")
 * @ORM\Entity(repositoryClass="ValtonsBundle\Repository\CartaporteRepository")
 */
class Cartaporte
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="folio", type="string", length=10)
     */
    private $folio;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    private $lugar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=255)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="remitente", type="string", length=255)
     */
    private $remitente;

    /**
     * @var string
     *
     * @ORM\Column(name="rfc", type="string", length=255)
     */
    private $rfc;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="serecogera", type="string", length=255)
     */
    private $serecogera;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatario", type="string", length=255)
     */
    private $destinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=255)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="seentrega", type="string", length=255)
     */
    private $seentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="valorunitario", type="string", length=255)
     */
    private $valorunitario;

    /**
     * @var string
     *
     * @ORM\Column(name="valordeclarado", type="string", length=255)
     */
    private $valordeclarado;

    /**
     * @var string
     *
     * @ORM\Column(name="condicionespago", type="string", length=255)
     */
    private $condicionespago;

    /**
     * @var string
     *
     * @ORM\Column(name="numcontenedor", type="string", length=255)
     */
    private $numcontenedor;

    /**
     * @var string
     *
     * @ORM\Column(name="remitentedicecontenido", type="string", length=255)
     */
    private $remitentedicecontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="string", length=255)
     */
    private $peso;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="pesoestimado", type="string", length=255)
     */
    private $pesoestimado;

    /**
     * @var string
     *
     * @ORM\Column(name="reembarco", type="string", length=255)
     */
    private $reembarco;

    /**
     * @var string
     *
     * @ORM\Column(name="condujo", type="string", length=255)
     */
    private $condujo;

    /**
     * @var string
     *
     * @ORM\Column(name="de", type="string", length=255)
     */
    private $de;

    /**
     * @var string
     *
     * @ORM\Column(name="hastaprimero", type="string", length=255)
     */
    private $hastaprimero;

    /**
     * @var string
     *
     * @ORM\Column(name="conducira", type="string", length=255)
     */
    private $conducira;

    /**
     * @var string
     *
     * @ORM\Column(name="desegundo", type="string", length=255)
     */
    private $desegundo;

    /**
     * @var string
     *
     * @ORM\Column(name="hastasegundo", type="string", length=255)
     */
    private $hastasegundo;

    /**
     * @var string
     *
     * @ORM\Column(name="fleteimporte", type="string", length=255)
     */
    private $fleteimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="seguroimporte", type="string", length=255)
     */
    private $seguroimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="maniobrasimporte", type="string", length=255)
     */
    private $maniobrasimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="autopistaslibratrans", type="string", length=255)
     */
    private $autopistaslibratrans;

    /**
     * @var string
     *
     * @ORM\Column(name="otrosimporte", type="string", length=255)
     */
    private $otrosimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="string", length=255)
     */
    private $importe;


    /**
     * @var string
     *
     * @ORM\Column(name="sumiva", type="string", length=255)
     */
    private $sumiva;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotalimporte", type="string", length=255)
     */
    private $subtotalimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="retivaimporte", type="string", length=255)
     */
    private $retivaimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="string", length=255)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="importeenletra", type="string", length=255)
     */
    private $importeenletra;

    /**
     * @var string
     *
     * @ORM\Column(name="nombredestinatario", type="string", length=255)
     */
    private $nombredestinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set folio
     *
     * @param string $folio
     *
     * @return Cartaporte
     */
    public function setFolio($folio)
    {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get folio
     *
     * @return string
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Cartaporte
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Cartaporte
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set origen
     *
     * @param string $origen
     *
     * @return Cartaporte
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set remitente
     *
     * @param string $remitente
     *
     * @return Cartaporte
     */
    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return string
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     *
     * @return Cartaporte
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Cartaporte
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set serecogera
     *
     * @param string $serecogera
     *
     * @return Cartaporte
     */
    public function setSerecogera($serecogera)
    {
        $this->serecogera = $serecogera;

        return $this;
    }

    /**
     * Get serecogera
     *
     * @return string
     */
    public function getSerecogera()
    {
        return $this->serecogera;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     *
     * @return Cartaporte
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cartaporte
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Cartaporte
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set seentrega
     *
     * @param string $seentrega
     *
     * @return Cartaporte
     */
    public function setSeentrega($seentrega)
    {
        $this->seentrega = $seentrega;

        return $this;
    }

    /**
     * Get seentrega
     *
     * @return string
     */
    public function getSeentrega()
    {
        return $this->seentrega;
    }

    /**
     * Set valorunitario
     *
     * @param string $valorunitario
     *
     * @return Cartaporte
     */
    public function setValorunitario($valorunitario)
    {
        $this->valorunitario = $valorunitario;

        return $this;
    }

    /**
     * Get valorunitario
     *
     * @return string
     */
    public function getValorunitario()
    {
        return $this->valorunitario;
    }

    /**
     * Set valordeclarado
     *
     * @param string $valordeclarado
     *
     * @return Cartaporte
     */
    public function setValordeclarado($valordeclarado)
    {
        $this->valordeclarado = $valordeclarado;

        return $this;
    }

    /**
     * Get valordeclarado
     *
     * @return string
     */
    public function getValordeclarado()
    {
        return $this->valordeclarado;
    }

    /**
     * Set condicionespago
     *
     * @param string $condicionespago
     *
     * @return Cartaporte
     */
    public function setCondicionespago($condicionespago)
    {
        $this->condicionespago = $condicionespago;

        return $this;
    }

    /**
     * Get condicionespago
     *
     * @return string
     */
    public function getCondicionespago()
    {
        return $this->condicionespago;
    }

    /**
     * Set numcontenedor
     *
     * @param string $numcontenedor
     *
     * @return Cartaporte
     */
    public function setNumcontenedor($numcontenedor)
    {
        $this->numcontenedor = $numcontenedor;

        return $this;
    }

    /**
     * Get numcontenedor
     *
     * @return string
     */
    public function getNumcontenedor()
    {
        return $this->numcontenedor;
    }

    /**
     * Set remitentedicecontenido
     *
     * @param string $remitentedicecontenido
     *
     * @return Cartaporte
     */
    public function setRemitentedicecontenido($remitentedicecontenido)
    {
        $this->remitentedicecontenido = $remitentedicecontenido;

        return $this;
    }

    /**
     * Get remitentedicecontenido
     *
     * @return string
     */
    public function getRemitentedicecontenido()
    {
        return $this->remitentedicecontenido;
    }

    /**
     * Set peso
     *
     * @param string $peso
     *
     * @return Cartaporte
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Cartaporte
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set pesoestimado
     *
     * @param string $pesoestimado
     *
     * @return Cartaporte
     */
    public function setPesoestimado($pesoestimado)
    {
        $this->pesoestimado = $pesoestimado;

        return $this;
    }

    /**
     * Get pesoestimado
     *
     * @return string
     */
    public function getPesoestimado()
    {
        return $this->pesoestimado;
    }

    /**
     * Set reembarco
     *
     * @param string $reembarco
     *
     * @return Cartaporte
     */
    public function setReembarco($reembarco)
    {
        $this->reembarco = $reembarco;

        return $this;
    }

    /**
     * Get reembarco
     *
     * @return string
     */
    public function getReembarco()
    {
        return $this->reembarco;
    }

    /**
     * Set condujo
     *
     * @param string $condujo
     *
     * @return Cartaporte
     */
    public function setCondujo($condujo)
    {
        $this->condujo = $condujo;

        return $this;
    }

    /**
     * Get condujo
     *
     * @return string
     */
    public function getCondujo()
    {
        return $this->condujo;
    }

    /**
     * Set de
     *
     * @param string $de
     *
     * @return Cartaporte
     */
    public function setDe($de)
    {
        $this->de = $de;

        return $this;
    }

    /**
     * Get de
     *
     * @return string
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set hastaprimero
     *
     * @param string $hastaprimero
     *
     * @return Cartaporte
     */
    public function setHastaprimero($hastaprimero)
    {
        $this->hastaprimero = $hastaprimero;

        return $this;
    }

    /**
     * Get hastaprimero
     *
     * @return string
     */
    public function getHastaprimero()
    {
        return $this->hastaprimero;
    }

    /**
     * Set desegundo
     *
     * @param string $desegundo
     *
     * @return Cartaporte
     */
    public function setDesegundo($desegundo)
    {
        $this->desegundo = $desegundo;

        return $this;
    }

    /**
     * Get desegundo
     *
     * @return string
     */
    public function getDesegundo()
    {
        return $this->desegundo;
    }

    /**
     * Set hastasegundo
     *
     * @param string $hastasegundo
     *
     * @return Cartaporte
     */
    public function setHastasegundo($hastasegundo)
    {
        $this->hastasegundo = $hastasegundo;

        return $this;
    }

    /**
     * Get hastasegundo
     *
     * @return string
     */
    public function getHastasegundo()
    {
        return $this->hastasegundo;
    }

    /**
     * Set fleteimporte
     *
     * @param string $fleteimporte
     *
     * @return Cartaporte
     */
    public function setFleteimporte($fleteimporte)
    {
        $this->fleteimporte = $fleteimporte;

        return $this;
    }

    /**
     * Get fleteimporte
     *
     * @return string
     */
    public function getFleteimporte()
    {
        return $this->fleteimporte;
    }

    /**
     * Set seguroimporte
     *
     * @param string $seguroimporte
     *
     * @return Cartaporte
     */
    public function setSeguroimporte($seguroimporte)
    {
        $this->seguroimporte = $seguroimporte;

        return $this;
    }

    /**
     * Get seguroimporte
     *
     * @return string
     */
    public function getSeguroimporte()
    {
        return $this->seguroimporte;
    }

    /**
     * Set maniobrasimporte
     *
     * @param string $maniobrasimporte
     *
     * @return Cartaporte
     */
    public function setManiobrasimporte($maniobrasimporte)
    {
        $this->maniobrasimporte = $maniobrasimporte;

        return $this;
    }

    /**
     * Get maniobrasimporte
     *
     * @return string
     */
    public function getManiobrasimporte()
    {
        return $this->maniobrasimporte;
    }

    /**
     * Set autopistaslibratrans
     *
     * @param string $autopistaslibratrans
     *
     * @return Cartaporte
     */
    public function setAutopistaslibratrans($autopistaslibratrans)
    {
        $this->autopistaslibratrans = $autopistaslibratrans;

        return $this;
    }

    /**
     * Get autopistaslibratrans
     *
     * @return string
     */
    public function getAutopistaslibratrans()
    {
        return $this->autopistaslibratrans;
    }

    /**
     * Set otrosimporte
     *
     * @param string $otrosimporte
     *
     * @return Cartaporte
     */
    public function setOtrosimporte($otrosimporte)
    {
        $this->otrosimporte = $otrosimporte;

        return $this;
    }

    /**
     * Get otrosimporte
     *
     * @return string
     */
    public function getOtrosimporte()
    {
        return $this->otrosimporte;
    }

    /**
     * Set sumiva
     *
     * @param string $sumiva
     *
     * @return Cartaporte
     */
    public function setSumiva($sumiva)
    {
        $this->sumiva = $sumiva;

        return $this;
    }

    /**
     * Get sumiva
     *
     * @return string
     */
    public function getSumiva()
    {
        return $this->sumiva;
    }

    /**
     * Set subtotalimporte
     *
     * @param string $subtotalimporte
     *
     * @return Cartaporte
     */
    public function setSubtotalimporte($subtotalimporte)
    {
        $this->subtotalimporte = $subtotalimporte;

        return $this;
    }

    /**
     * Get subtotalimporte
     *
     * @return string
     */
    public function getSubtotalimporte()
    {
        return $this->subtotalimporte;
    }

    /**
     * Set retivaimporte
     *
     * @param string $retivaimporte
     *
     * @return Cartaporte
     */
    public function setRetivaimporte($retivaimporte)
    {
        $this->retivaimporte = $retivaimporte;

        return $this;
    }

    /**
     * Get retivaimporte
     *
     * @return string
     */
    public function getRetivaimporte()
    {
        return $this->retivaimporte;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Cartaporte
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set importeenletra
     *
     * @param string $importeenletra
     *
     * @return Cartaporte
     */
    public function setImporteenletra($importeenletra)
    {
        $this->importeenletra = $importeenletra;

        return $this;
    }

    /**
     * Get importeenletra
     *
     * @return string
     */
    public function getImporteenletra()
    {
        return $this->importeenletra;
    }

    /**
     * Set nombredestinatario
     *
     * @param string $nombredestinatario
     *
     * @return Cartaporte
     */
    public function setNombredestinatario($nombredestinatario)
    {
        $this->nombredestinatario = $nombredestinatario;

        return $this;
    }

    /**
     * Get nombredestinatario
     *
     * @return string
     */
    public function getNombredestinatario()
    {
        return $this->nombredestinatario;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Cartaporte
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set conducira
     *
     * @param string $conducira
     *
     * @return Cartaporte
     */
    public function setConducira($conducira)
    {
        $this->conducira = $conducira;

        return $this;
    }

    /**
     * Get conducira
     *
     * @return string
     */
    public function getConducira()
    {
        return $this->conducira;
    }

    /**
     * Set importe
     *
     * @param string $importe
     *
     * @return Cartaporte
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string
     */
    public function getImporte()
    {
        return $this->importe;
    }
}
