<?php

namespace Proxies\__CG__\ValtonsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cartaporte extends \ValtonsBundle\Entity\Cartaporte implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'id', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'folio', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'lugar', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'fecha', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'origen', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'remitente', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'rfc', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'domicilio', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'serecogera', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'destinatario', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'direccion', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'contacto', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'seentrega', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'valorunitario', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'valordeclarado', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'condicionespago', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'numcontenedor', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'remitentedicecontenido', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'peso', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'tipo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'pesoestimado', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'reembarco', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'condujo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'de', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'hastaprimero', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'conducira', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'desegundo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'hastasegundo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'fleteimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'seguroimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'maniobrasimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'autopistaslibratrans', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'otrosimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'importe', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'sumiva', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'subtotalimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'retivaimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'total', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'importeenletra', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'nombredestinatario', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'observaciones'];
        }

        return ['__isInitialized__', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'id', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'folio', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'lugar', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'fecha', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'origen', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'remitente', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'rfc', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'domicilio', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'serecogera', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'destinatario', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'direccion', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'contacto', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'seentrega', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'valorunitario', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'valordeclarado', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'condicionespago', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'numcontenedor', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'remitentedicecontenido', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'peso', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'tipo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'pesoestimado', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'reembarco', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'condujo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'de', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'hastaprimero', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'conducira', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'desegundo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'hastasegundo', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'fleteimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'seguroimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'maniobrasimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'autopistaslibratrans', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'otrosimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'importe', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'sumiva', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'subtotalimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'retivaimporte', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'total', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'importeenletra', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'nombredestinatario', '' . "\0" . 'ValtonsBundle\\Entity\\Cartaporte' . "\0" . 'observaciones'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cartaporte $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFolio($folio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFolio', [$folio]);

        return parent::setFolio($folio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFolio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFolio', []);

        return parent::getFolio();
    }

    /**
     * {@inheritDoc}
     */
    public function setLugar($lugar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLugar', [$lugar]);

        return parent::setLugar($lugar);
    }

    /**
     * {@inheritDoc}
     */
    public function getLugar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLugar', []);

        return parent::getLugar();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', [$fecha]);

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', []);

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigen($origen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigen', [$origen]);

        return parent::setOrigen($origen);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigen', []);

        return parent::getOrigen();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemitente($remitente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemitente', [$remitente]);

        return parent::setRemitente($remitente);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemitente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemitente', []);

        return parent::getRemitente();
    }

    /**
     * {@inheritDoc}
     */
    public function setRfc($rfc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRfc', [$rfc]);

        return parent::setRfc($rfc);
    }

    /**
     * {@inheritDoc}
     */
    public function getRfc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRfc', []);

        return parent::getRfc();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomicilio($domicilio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomicilio', [$domicilio]);

        return parent::setDomicilio($domicilio);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomicilio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomicilio', []);

        return parent::getDomicilio();
    }

    /**
     * {@inheritDoc}
     */
    public function setSerecogera($serecogera)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerecogera', [$serecogera]);

        return parent::setSerecogera($serecogera);
    }

    /**
     * {@inheritDoc}
     */
    public function getSerecogera()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerecogera', []);

        return parent::getSerecogera();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinatario($destinatario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinatario', [$destinatario]);

        return parent::setDestinatario($destinatario);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinatario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinatario', []);

        return parent::getDestinatario();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setContacto($contacto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContacto', [$contacto]);

        return parent::setContacto($contacto);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacto', []);

        return parent::getContacto();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeentrega($seentrega)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeentrega', [$seentrega]);

        return parent::setSeentrega($seentrega);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeentrega()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeentrega', []);

        return parent::getSeentrega();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorunitario($valorunitario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorunitario', [$valorunitario]);

        return parent::setValorunitario($valorunitario);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorunitario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorunitario', []);

        return parent::getValorunitario();
    }

    /**
     * {@inheritDoc}
     */
    public function setValordeclarado($valordeclarado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValordeclarado', [$valordeclarado]);

        return parent::setValordeclarado($valordeclarado);
    }

    /**
     * {@inheritDoc}
     */
    public function getValordeclarado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValordeclarado', []);

        return parent::getValordeclarado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondicionespago($condicionespago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondicionespago', [$condicionespago]);

        return parent::setCondicionespago($condicionespago);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondicionespago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondicionespago', []);

        return parent::getCondicionespago();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumcontenedor($numcontenedor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumcontenedor', [$numcontenedor]);

        return parent::setNumcontenedor($numcontenedor);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumcontenedor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumcontenedor', []);

        return parent::getNumcontenedor();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemitentedicecontenido($remitentedicecontenido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemitentedicecontenido', [$remitentedicecontenido]);

        return parent::setRemitentedicecontenido($remitentedicecontenido);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemitentedicecontenido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemitentedicecontenido', []);

        return parent::getRemitentedicecontenido();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeso($peso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeso', [$peso]);

        return parent::setPeso($peso);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeso', []);

        return parent::getPeso();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPesoestimado($pesoestimado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPesoestimado', [$pesoestimado]);

        return parent::setPesoestimado($pesoestimado);
    }

    /**
     * {@inheritDoc}
     */
    public function getPesoestimado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPesoestimado', []);

        return parent::getPesoestimado();
    }

    /**
     * {@inheritDoc}
     */
    public function setReembarco($reembarco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReembarco', [$reembarco]);

        return parent::setReembarco($reembarco);
    }

    /**
     * {@inheritDoc}
     */
    public function getReembarco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReembarco', []);

        return parent::getReembarco();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondujo($condujo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondujo', [$condujo]);

        return parent::setCondujo($condujo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondujo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondujo', []);

        return parent::getCondujo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDe($de)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDe', [$de]);

        return parent::setDe($de);
    }

    /**
     * {@inheritDoc}
     */
    public function getDe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDe', []);

        return parent::getDe();
    }

    /**
     * {@inheritDoc}
     */
    public function setHastaprimero($hastaprimero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHastaprimero', [$hastaprimero]);

        return parent::setHastaprimero($hastaprimero);
    }

    /**
     * {@inheritDoc}
     */
    public function getHastaprimero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHastaprimero', []);

        return parent::getHastaprimero();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesegundo($desegundo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesegundo', [$desegundo]);

        return parent::setDesegundo($desegundo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesegundo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesegundo', []);

        return parent::getDesegundo();
    }

    /**
     * {@inheritDoc}
     */
    public function setHastasegundo($hastasegundo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHastasegundo', [$hastasegundo]);

        return parent::setHastasegundo($hastasegundo);
    }

    /**
     * {@inheritDoc}
     */
    public function getHastasegundo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHastasegundo', []);

        return parent::getHastasegundo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFleteimporte($fleteimporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFleteimporte', [$fleteimporte]);

        return parent::setFleteimporte($fleteimporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getFleteimporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFleteimporte', []);

        return parent::getFleteimporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeguroimporte($seguroimporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeguroimporte', [$seguroimporte]);

        return parent::setSeguroimporte($seguroimporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeguroimporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeguroimporte', []);

        return parent::getSeguroimporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setManiobrasimporte($maniobrasimporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManiobrasimporte', [$maniobrasimporte]);

        return parent::setManiobrasimporte($maniobrasimporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getManiobrasimporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManiobrasimporte', []);

        return parent::getManiobrasimporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutopistaslibratrans($autopistaslibratrans)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutopistaslibratrans', [$autopistaslibratrans]);

        return parent::setAutopistaslibratrans($autopistaslibratrans);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutopistaslibratrans()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutopistaslibratrans', []);

        return parent::getAutopistaslibratrans();
    }

    /**
     * {@inheritDoc}
     */
    public function setOtrosimporte($otrosimporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtrosimporte', [$otrosimporte]);

        return parent::setOtrosimporte($otrosimporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getOtrosimporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtrosimporte', []);

        return parent::getOtrosimporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setSumiva($sumiva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSumiva', [$sumiva]);

        return parent::setSumiva($sumiva);
    }

    /**
     * {@inheritDoc}
     */
    public function getSumiva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSumiva', []);

        return parent::getSumiva();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotalimporte($subtotalimporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotalimporte', [$subtotalimporte]);

        return parent::setSubtotalimporte($subtotalimporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotalimporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotalimporte', []);

        return parent::getSubtotalimporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetivaimporte($retivaimporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetivaimporte', [$retivaimporte]);

        return parent::setRetivaimporte($retivaimporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetivaimporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetivaimporte', []);

        return parent::getRetivaimporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', [$total]);

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', []);

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setImporteenletra($importeenletra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImporteenletra', [$importeenletra]);

        return parent::setImporteenletra($importeenletra);
    }

    /**
     * {@inheritDoc}
     */
    public function getImporteenletra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImporteenletra', []);

        return parent::getImporteenletra();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombredestinatario($nombredestinatario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombredestinatario', [$nombredestinatario]);

        return parent::setNombredestinatario($nombredestinatario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombredestinatario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombredestinatario', []);

        return parent::getNombredestinatario();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', [$observaciones]);

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', []);

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setConducira($conducira)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConducira', [$conducira]);

        return parent::setConducira($conducira);
    }

    /**
     * {@inheritDoc}
     */
    public function getConducira()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConducira', []);

        return parent::getConducira();
    }

    /**
     * {@inheritDoc}
     */
    public function setImporte($importe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImporte', [$importe]);

        return parent::setImporte($importe);
    }

    /**
     * {@inheritDoc}
     */
    public function getImporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImporte', []);

        return parent::getImporte();
    }

}