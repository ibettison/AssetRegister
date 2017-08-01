<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Av;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Av controller.
 *
 * @Route("av")
 */
class AvController extends Controller
{
    /**
     * Lists all av entities.
     *
     * @Route("/", name="av_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $avs = $em->getRepository('AppBundle:Av')->findAll();

        return $this->render('av/index.html.twig', array(
            'avs' => $avs,
        ));
    }

    /**
     * Creates a new av entity.
     *
     * @Route("/new", name="av_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $av = new Av();
        $form = $this->createForm('AppBundle\Form\AvType', $av);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($av);
            $em->flush();

            return $this->redirectToRoute('av_show', array('equipId' => $av->getEquipid()));
        }

        return $this->render('av/new.html.twig', array(
            'av' => $av,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a av entity.
     *
     * @Route("/{equipId}", name="av_show")
     * @Method("GET")
     */
    public function showAction(Av $av)
    {
        $deleteForm = $this->createDeleteForm($av);

        return $this->render('av/show.html.twig', array(
            'av' => $av,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing av entity.
     *
     * @Route("/{equipId}/edit", name="av_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Av $av)
    {
        $deleteForm = $this->createDeleteForm($av);
        $editForm = $this->createForm('AppBundle\Form\AvType', $av);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('av_edit', array('equipId' => $av->getEquipid()));
        }

        return $this->render('av/edit.html.twig', array(
            'av' => $av,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a av entity.
     *
     * @Route("/{equipId}", name="av_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Av $av)
    {
        $form = $this->createDeleteForm($av);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($av);
            $em->flush();
        }

        return $this->redirectToRoute('av_index');
    }

    /**
     * Creates a form to delete a av entity.
     *
     * @param Av $av The av entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Av $av)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('av_delete', array('equipId' => $av->getEquipid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
