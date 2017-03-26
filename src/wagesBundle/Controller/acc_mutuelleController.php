<?php

namespace wagesBundle\Controller;

use wagesBundle\Entity\acc_mutuelle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acc_mutuelle controller.
 *
 * @Route("mutuelle")
 */
class acc_mutuelleController extends Controller
{
    /**
     * Lists all acc_mutuelle entities.
     *
     * @Route("/", name="mutuelle_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acc_mutuelles = $em->getRepository('wagesBundle:acc_mutuelle')->findAll();

        return $this->render('acc_mutuelle/index.html.twig', array(
            'acc_mutuelles' => $acc_mutuelles,
        ));
    }

    /**
     * Creates a new acc_mutuelle entity.
     *
     * @Route("/new", name="mutuelle_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acc_mutuelle = new Acc_mutuelle();
        $form = $this->createForm('wagesBundle\Form\acc_mutuelleType', $acc_mutuelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acc_mutuelle);
            $em->flush($acc_mutuelle);

            return $this->redirectToRoute('mutuelle_show', array('id' => $acc_mutuelle->getId()));
        }

        return $this->render('acc_mutuelle/new.html.twig', array(
            'acc_mutuelle' => $acc_mutuelle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acc_mutuelle entity.
     *
     * @Route("/{id}", name="mutuelle_show")
     * @Method("GET")
     */
    public function showAction(acc_mutuelle $acc_mutuelle)
    {
        $deleteForm = $this->createDeleteForm($acc_mutuelle);

        return $this->render('acc_mutuelle/show.html.twig', array(
            'acc_mutuelle' => $acc_mutuelle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acc_mutuelle entity.
     *
     * @Route("/{id}/edit", name="mutuelle_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, acc_mutuelle $acc_mutuelle)
    {
        $deleteForm = $this->createDeleteForm($acc_mutuelle);
        $editForm = $this->createForm('wagesBundle\Form\acc_mutuelleType', $acc_mutuelle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mutuelle_edit', array('id' => $acc_mutuelle->getId()));
        }

        return $this->render('acc_mutuelle/edit.html.twig', array(
            'acc_mutuelle' => $acc_mutuelle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acc_mutuelle entity.
     *
     * @Route("/{id}", name="mutuelle_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, acc_mutuelle $acc_mutuelle)
    {
        $form = $this->createDeleteForm($acc_mutuelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acc_mutuelle);
            $em->flush();
        }

        return $this->redirectToRoute('mutuelle_index');
    }

    /**
     * Creates a form to delete a acc_mutuelle entity.
     *
     * @param acc_mutuelle $acc_mutuelle The acc_mutuelle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(acc_mutuelle $acc_mutuelle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mutuelle_delete', array('id' => $acc_mutuelle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
