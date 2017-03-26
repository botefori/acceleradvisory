<?php

namespace wagesBundle\Controller;

use wagesBundle\Entity\acc_users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acc_user controller.
 *
 * @Route("users")
 */
class acc_usersController extends Controller
{
    /**
     * Lists all acc_user entities.
     *
     * @Route("/", name="users_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acc_users = $em->getRepository('wagesBundle:acc_users')->findAll();

        return $this->render('acc_users/index.html.twig', array(
            'acc_users' => $acc_users,
        ));
    }

    /**
     * Creates a new acc_user entity.
     *
     * @Route("/new", name="users_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acc_user = new Acc_user();
        $form = $this->createForm('wagesBundle\Form\acc_usersType', $acc_user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acc_user);
            $em->flush($acc_user);

            return $this->redirectToRoute('users_show', array('id' => $acc_user->getId()));
        }

        return $this->render('acc_users/new.html.twig', array(
            'acc_user' => $acc_user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acc_user entity.
     *
     * @Route("/{id}", name="users_show")
     * @Method("GET")
     */
    public function showAction(acc_users $acc_user)
    {
        $deleteForm = $this->createDeleteForm($acc_user);

        return $this->render('acc_users/show.html.twig', array(
            'acc_user' => $acc_user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acc_user entity.
     *
     * @Route("/{id}/edit", name="users_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, acc_users $acc_user)
    {
        $deleteForm = $this->createDeleteForm($acc_user);
        $editForm = $this->createForm('wagesBundle\Form\acc_usersType', $acc_user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('users_edit', array('id' => $acc_user->getId()));
        }

        return $this->render('acc_users/edit.html.twig', array(
            'acc_user' => $acc_user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acc_user entity.
     *
     * @Route("/{id}", name="users_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, acc_users $acc_user)
    {
        $form = $this->createDeleteForm($acc_user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acc_user);
            $em->flush();
        }

        return $this->redirectToRoute('users_index');
    }

    /**
     * Creates a form to delete a acc_user entity.
     *
     * @param acc_users $acc_user The acc_user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(acc_users $acc_user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('users_delete', array('id' => $acc_user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
