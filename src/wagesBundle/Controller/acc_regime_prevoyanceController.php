<?php

namespace wagesBundle\Controller;

use wagesBundle\Entity\acc_regime_prevoyance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acc_regime_prevoyance controller.
 *
 * @Route("prevoyances")
 */
class acc_regime_prevoyanceController extends Controller
{
    /**
     * Lists all acc_regime_prevoyance entities.
     *
     * @Route("/", name="prevoyances_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acc_regime_prevoyances = $em->getRepository('wagesBundle:acc_regime_prevoyance')->findAll();

        return $this->render('acc_regime_prevoyance/index.html.twig', array(
            'acc_regime_prevoyances' => $acc_regime_prevoyances,
        ));
    }

    /**
     * Creates a new acc_regime_prevoyance entity.
     *
     * @Route("/new", name="prevoyances_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acc_regime_prevoyance = new Acc_regime_prevoyance();
        $form = $this->createForm('wagesBundle\Form\acc_regime_prevoyanceType', $acc_regime_prevoyance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acc_regime_prevoyance);
            $em->flush($acc_regime_prevoyance);

            return $this->redirectToRoute('prevoyances_show', array('id' => $acc_regime_prevoyance->getId()));
        }

        return $this->render('acc_regime_prevoyance/new.html.twig', array(
            'acc_regime_prevoyance' => $acc_regime_prevoyance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acc_regime_prevoyance entity.
     *
     * @Route("/{id}", name="prevoyances_show")
     * @Method("GET")
     */
    public function showAction(acc_regime_prevoyance $acc_regime_prevoyance)
    {
        $deleteForm = $this->createDeleteForm($acc_regime_prevoyance);

        return $this->render('acc_regime_prevoyance/show.html.twig', array(
            'acc_regime_prevoyance' => $acc_regime_prevoyance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acc_regime_prevoyance entity.
     *
     * @Route("/{id}/edit", name="prevoyances_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, acc_regime_prevoyance $acc_regime_prevoyance)
    {
        $deleteForm = $this->createDeleteForm($acc_regime_prevoyance);
        $editForm = $this->createForm('wagesBundle\Form\acc_regime_prevoyanceType', $acc_regime_prevoyance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prevoyances_edit', array('id' => $acc_regime_prevoyance->getId()));
        }

        return $this->render('acc_regime_prevoyance/edit.html.twig', array(
            'acc_regime_prevoyance' => $acc_regime_prevoyance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acc_regime_prevoyance entity.
     *
     * @Route("/{id}", name="prevoyances_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, acc_regime_prevoyance $acc_regime_prevoyance)
    {
        $form = $this->createDeleteForm($acc_regime_prevoyance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acc_regime_prevoyance);
            $em->flush();
        }

        return $this->redirectToRoute('prevoyances_index');
    }

    /**
     * Creates a form to delete a acc_regime_prevoyance entity.
     *
     * @param acc_regime_prevoyance $acc_regime_prevoyance The acc_regime_prevoyance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(acc_regime_prevoyance $acc_regime_prevoyance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prevoyances_delete', array('id' => $acc_regime_prevoyance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
