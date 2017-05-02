<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\TrialProtocolFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trialprotocolfile controller.
 *
 * @Route("protocol")
 */
class TrialProtocolFileController extends Controller
{
    /**
     * Lists all trialProtocolFile entities.
     *
     * @Route("/", name="protocol_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trialProtocolFiles = $em->getRepository('ErpBundle:TrialProtocolFile')->findAll();

        return $this->render('trialprotocolfile/index.html.twig', array(
            'trialProtocolFiles' => $trialProtocolFiles,
        ));
    }

    /**
     * Creates a new trialProtocolFile entity.
     *
     * @Route("/new", name="protocol_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trialProtocolFile = new Trialprotocolfile();
        $form = $this->createForm('ErpBundle\Form\TrialProtocolFileType', $trialProtocolFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trialProtocolFile);
            $em->flush();

            return $this->redirectToRoute('protocol_show', array('id' => $trialProtocolFile->getId()));
        }

        return $this->render('trialprotocolfile/new.html.twig', array(
            'trialProtocolFile' => $trialProtocolFile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trialProtocolFile entity.
     *
     * @Route("/{id}", name="protocol_show")
     * @Method("GET")
     */
    public function showAction(TrialProtocolFile $trialProtocolFile)
    {
        $deleteForm = $this->createDeleteForm($trialProtocolFile);

        return $this->render('trialprotocolfile/show.html.twig', array(
            'trialProtocolFile' => $trialProtocolFile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trialProtocolFile entity.
     *
     * @Route("/{id}/edit", name="protocol_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrialProtocolFile $trialProtocolFile)
    {
        $deleteForm = $this->createDeleteForm($trialProtocolFile);
        $editForm = $this->createForm('ErpBundle\Form\TrialProtocolFileType', $trialProtocolFile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('protocol_edit', array('id' => $trialProtocolFile->getId()));
        }

        return $this->render('trialprotocolfile/edit.html.twig', array(
            'trialProtocolFile' => $trialProtocolFile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trialProtocolFile entity.
     *
     * @Route("/{id}", name="protocol_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrialProtocolFile $trialProtocolFile)
    {
        $trial = $trialProtocolFile->getTrials();
        $form = $this->createDeleteForm($trialProtocolFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trialProtocolFile);
            $em->flush();
        }

        return $this->redirectToRoute('erp_trial', array('id' =>$trial->getID()));

    }

    /**
     * Creates a form to delete a trialProtocolFile entity.
     *
     * @param TrialProtocolFile $trialProtocolFile The trialProtocolFile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrialProtocolFile $trialProtocolFile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('protocol_delete', array('id' => $trialProtocolFile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
