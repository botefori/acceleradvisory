<?php

namespace wagesBundle\Controller;

use wagesBundle\Entity\acc_retirement_organisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acc_retirement_organisation controller.
 *
 * @Route("retirementorganism")
 */
class acc_retirement_organisationController extends Controller
{
    /**
     * Lists all acc_retirement_organisation entities.
     *
     * @Route("/", name="retirementorganism_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acc_retirement_organisations = $em->getRepository('wagesBundle:acc_retirement_organisation')->findAll();

        return $this->render('acc_retirement_organisation/index.html.twig', array(
            'acc_retirement_organisations' => $acc_retirement_organisations,
        ));
    }

    /**
     * Creates a new acc_retirement_organisation entity.
     *
     * @Route("/new", name="retirementorganism_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acc_retirement_organisation = new Acc_retirement_organisation();
        $form = $this->createForm('wagesBundle\Form\acc_retirement_organisationType', $acc_retirement_organisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acc_retirement_organisation);
            $em->flush($acc_retirement_organisation);

            return $this->redirectToRoute('retirementorganism_show', array('id' => $acc_retirement_organisation->getId()));
        }

        return $this->render('acc_retirement_organisation/new.html.twig', array(
            'acc_retirement_organisation' => $acc_retirement_organisation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acc_retirement_organisation entity.
     *
     * @Route("/{id}", name="retirementorganism_show")
     * @Method("GET")
     */
    public function showAction(acc_retirement_organisation $acc_retirement_organisation)
    {
        $deleteForm = $this->createDeleteForm($acc_retirement_organisation);

        return $this->render('acc_retirement_organisation/show.html.twig', array(
            'acc_retirement_organisation' => $acc_retirement_organisation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acc_retirement_organisation entity.
     *
     * @Route("/{id}/edit", name="retirementorganism_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, acc_retirement_organisation $acc_retirement_organisation)
    {
        $deleteForm = $this->createDeleteForm($acc_retirement_organisation);
        $editForm = $this->createForm('wagesBundle\Form\acc_retirement_organisationType', $acc_retirement_organisation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('retirementorganism_edit', array('id' => $acc_retirement_organisation->getId()));
        }

        return $this->render('acc_retirement_organisation/edit.html.twig', array(
            'acc_retirement_organisation' => $acc_retirement_organisation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acc_retirement_organisation entity.
     *
     * @Route("/{id}", name="retirementorganism_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, acc_retirement_organisation $acc_retirement_organisation)
    {
        $form = $this->createDeleteForm($acc_retirement_organisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acc_retirement_organisation);
            $em->flush();
        }

        return $this->redirectToRoute('retirementorganism_index');
    }

    /**
     * Creates a form to delete a acc_retirement_organisation entity.
     *
     * @param acc_retirement_organisation $acc_retirement_organisation The acc_retirement_organisation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(acc_retirement_organisation $acc_retirement_organisation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('retirementorganism_delete', array('id' => $acc_retirement_organisation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
