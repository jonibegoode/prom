<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\TrialArmFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trialarmfile controller.
 *
 */
class TrialArmFileController extends Controller
{
    /**
     * Lists all trialArmFile entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trialArmFiles = $em->getRepository('ErpBundle:TrialArmFile')->findAll();

        return $this->render('trialarmfile/index.html.twig', array(
            'trialArmFiles' => $trialArmFiles,
        ));
    }

    /**
     * Creates a new trialArmFile entity.
     *
     */
    public function newAction(Request $request)
    {
        $trialArmFile = new Trialarmfile();
        $form = $this->createForm('ErpBundle\Form\TrialArmFileType', $trialArmFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trialArmFile);
            $em->flush();

            return $this->redirectToRoute('arm_show', array('id' => $trialArmFile->getId()));
        }

        return $this->render('trialarmfile/new.html.twig', array(
            'trialArmFile' => $trialArmFile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trialArmFile entity.
     *
     */
    public function showAction(TrialArmFile $trialArmFile)
    {
        $deleteForm = $this->createDeleteForm($trialArmFile);

        return $this->render('trialarmfile/show.html.twig', array(
            'trialArmFile' => $trialArmFile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trialArmFile entity.
     *
     */
    public function editAction(Request $request, TrialArmFile $trialArmFile)
    {
        $deleteForm = $this->createDeleteForm($trialArmFile);
        $editForm = $this->createForm('ErpBundle\Form\TrialArmFileType', $trialArmFile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('arm_edit', array('id' => $trialArmFile->getId()));
        }

        return $this->render('trialarmfile/edit.html.twig', array(
            'trialArmFile' => $trialArmFile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trialArmFile entity.
     *
     */
    public function deleteAction(Request $request, TrialArmFile $trialArmFile)
    {
        $form = $this->createDeleteForm($trialArmFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trialArmFile);
            $em->flush();
        }

        return $this->redirectToRoute('arm_index');
    }

    /**
     * Creates a form to delete a trialArmFile entity.
     *
     * @param TrialArmFile $trialArmFile The trialArmFile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrialArmFile $trialArmFile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('arm_delete', array('id' => $trialArmFile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
