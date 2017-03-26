<?php

namespace wagesBundle\Controller;

use wagesBundle\Entity\acc_users_groups;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acc_users_group controller.
 *
 * @Route("usergroups")
 */
class acc_users_groupsController extends Controller
{
    /**
     * Lists all acc_users_group entities.
     *
     * @Route("/", name="usergroups_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acc_users_groups = $em->getRepository('wagesBundle:acc_users_groups')->findAll();

        return $this->render('acc_users_groups/index.html.twig', array(
            'acc_users_groups' => $acc_users_groups,
        ));
    }

    /**
     * Creates a new acc_users_group entity.
     *
     * @Route("/new", name="usergroups_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acc_users_group = new acc_users_groups();
        $form = $this->createForm('wagesBundle\Form\acc_users_groupsType', $acc_users_group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acc_users_group);
            $em->flush($acc_users_group);

            return $this->redirectToRoute('usergroups_show', array('id' => $acc_users_group->getId()));
        }

        return $this->render('acc_users_groups/new.html.twig', array(
            'acc_users_group' => $acc_users_group,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acc_users_group entity.
     *
     * @Route("/{id}", name="usergroups_show")
     * @Method("GET")
     */
    public function showAction(acc_users_groups $acc_users_group)
    {
        $deleteForm = $this->createDeleteForm($acc_users_group);

        return $this->render('acc_users_groups/show.html.twig', array(
            'acc_users_group' => $acc_users_group,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acc_users_group entity.
     *
     * @Route("/{id}/edit", name="usergroups_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, acc_users_groups $acc_users_group)
    {
        $deleteForm = $this->createDeleteForm($acc_users_group);
        $editForm = $this->createForm('wagesBundle\Form\acc_users_groupsType', $acc_users_group);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usergroups_edit', array('id' => $acc_users_group->getId()));
        }

        return $this->render('acc_users_groups/edit.html.twig', array(
            'acc_users_group' => $acc_users_group,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acc_users_group entity.
     *
     * @Route("/{id}", name="usergroups_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, acc_users_groups $acc_users_group)
    {
        $form = $this->createDeleteForm($acc_users_group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acc_users_group);
            $em->flush();
        }

        return $this->redirectToRoute('usergroups_index');
    }

    /**
     * Creates a form to delete a acc_users_group entity.
     *
     * @param acc_users_groups $acc_users_group The acc_users_group entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(acc_users_groups $acc_users_group)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usergroups_delete', array('id' => $acc_users_group->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
