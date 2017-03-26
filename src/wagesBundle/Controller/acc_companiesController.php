<?php

namespace wagesBundle\Controller;

use wagesBundle\Entity\acc_companies;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acc_company controller.
 *
 * @Route("companies")
 */
class acc_companiesController extends Controller
{
    /**
     * Lists all acc_company entities.
     *
     * @Route("/", name="companies_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acc_companies = $em->getRepository('wagesBundle:acc_companies')->findAll();

        return $this->render('acc_companies/index.html.twig', array(
            'acc_companies' => $acc_companies,
        ));
    }

    /**
     * Creates a new acc_company entity.
     *
     * @Route("/new", name="companies_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acc_company = new Acc_company();
        $form = $this->createForm('wagesBundle\Form\acc_companiesType', $acc_company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acc_company);
            $em->flush($acc_company);

            return $this->redirectToRoute('companies_show', array('id' => $acc_company->getId()));
        }

        return $this->render('acc_companies/new.html.twig', array(
            'acc_company' => $acc_company,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acc_company entity.
     *
     * @Route("/{id}", name="companies_show")
     * @Method("GET")
     */
    public function showAction(acc_companies $acc_company)
    {
        $deleteForm = $this->createDeleteForm($acc_company);

        return $this->render('acc_companies/show.html.twig', array(
            'acc_company' => $acc_company,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acc_company entity.
     *
     * @Route("/{id}/edit", name="companies_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, acc_companies $acc_company)
    {
        $deleteForm = $this->createDeleteForm($acc_company);
        $editForm = $this->createForm('wagesBundle\Form\acc_companiesType', $acc_company);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('companies_edit', array('id' => $acc_company->getId()));
        }

        return $this->render('acc_companies/edit.html.twig', array(
            'acc_company' => $acc_company,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acc_company entity.
     *
     * @Route("/{id}", name="companies_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, acc_companies $acc_company)
    {
        $form = $this->createDeleteForm($acc_company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acc_company);
            $em->flush();
        }

        return $this->redirectToRoute('companies_index');
    }

    /**
     * Creates a form to delete a acc_company entity.
     *
     * @param acc_companies $acc_company The acc_company entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(acc_companies $acc_company)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('companies_delete', array('id' => $acc_company->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
