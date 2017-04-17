<?php

namespace ValtonsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartaporteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('folio')
        ->add('lugar')
        ->add('fecha')
        ->add('origen')
        ->add('remitente')
        ->add('rfc')
        ->add('domicilio')
        ->add('serecogera')
        ->add('destinatario')
        ->add('direccion')
        ->add('contacto')
        ->add('seentrega')
        ->add('valorunitario')
        ->add('valordeclarado')
        ->add('condicionespago')
        ->add('numcontenedor')
        ->add('remitentedicecontenido')
        ->add('peso')
        ->add('tipo')
        ->add('pesoestimado')
        ->add('reembarco')
        ->add('condujo')
        ->add('conducira')
        ->add('de')
        ->add('hastaprimero')
        ->add('desegundo')
        ->add('hastasegundo')
        ->add('fleteimporte')
        ->add('seguroimporte')
        ->add('maniobrasimporte')
        ->add('autopistaslibratrans')
        ->add('otrosimporte')
        ->add('sumiva')
        ->add('subtotalimporte')
        ->add('retivaimporte')
        ->add('total')
        ->add('importeenletra')
        ->add('importe')
        ->add('nombredestinatario')
        ->add('observaciones');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ValtonsBundle\Entity\Cartaporte'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'valtonsbundle_cartaporte';
    }


}
