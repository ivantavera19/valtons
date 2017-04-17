<?php

namespace ValtonsBundle\Controller;

use ValtonsBundle\Entity\Cartaporte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cartaporte controller.
 *
 */
class CartaporteController extends Controller
{
    /**
     * Lists all cartaporte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cartaportes = $em->getRepository('ValtonsBundle:Cartaporte')->findAll();

        return $this->render('cartaporte/index.html.twig', array(
            'cartaportes' => $cartaportes,
        ));
    }

    /**
     * Creates a new cartaporte entity.
     *
     */
    public function newAction(Request $request)
    {
        $cartaporte = new Cartaporte();
        $form = $this->createForm('ValtonsBundle\Form\CartaporteType', $cartaporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cartaporte);
            $em->flush($cartaporte);

            return $this->redirectToRoute('cartaporte_show', array('id' => $cartaporte->getId()));
        }

        return $this->render('cartaporte/new.html.twig', array(
            'cartaporte' => $cartaporte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cartaporte entity.
     *
     */
    public function showAction(Cartaporte $cartaporte)
    {
        $deleteForm = $this->createDeleteForm($cartaporte);

        return $this->render('cartaporte/show.html.twig', array(
            'cartaporte' => $cartaporte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cartaporte entity.
     *
     */
    public function editAction(Request $request, Cartaporte $cartaporte)
    {
        $deleteForm = $this->createDeleteForm($cartaporte);
        $editForm = $this->createForm('ValtonsBundle\Form\CartaporteType', $cartaporte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cartaporte_edit', array('id' => $cartaporte->getId()));
        }

        return $this->render('cartaporte/edit.html.twig', array(
            'cartaporte' => $cartaporte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cartaporte entity.
     *
     */
    public function deleteAction(Request $request, Cartaporte $cartaporte)
    {
        $form = $this->createDeleteForm($cartaporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cartaporte);
            $em->flush();
        }

        return $this->redirectToRoute('cartaporte_index');
    }

    /**
     * Creates a form to delete a cartaporte entity.
     *
     * @param Cartaporte $cartaporte The cartaporte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cartaporte $cartaporte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cartaporte_delete', array('id' => $cartaporte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
