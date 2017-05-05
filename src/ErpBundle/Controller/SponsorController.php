<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\Sponsor;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SponsorController extends Controller
{

    public function listAction()
    {
        return $this->render('ErpBundle:Sponsor:list.html.twig');
    }

    public function viewAction(Request $request, int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getManager()->getRepository('ErpBundle:Sponsor');
        $sponsor= $repository->find($id);

        $list_of_trials = $em->getRepository('ErpBundle:Trials')->findBy(array('sponsor' => $sponsor)
        );



        return $this->render('ErpBundle:Sponsor:view.html.twig', array(
            'sponsor' => $sponsor,
            'list_of_trials' => $list_of_trials
            ));
    }

    Public function addAction(Request $request)
    {
        $sponsor = new sponsor();
        $form = $this->createForm('ErpBundle\Form\SponsorType', $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            return $this->redirectToRoute('erp_sponsor', array('id' => $sponsor->getId()));
        }

        return $this->render('ErpBundle:Sponsor:new.html.twig', array(
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ));
    }

    Public function editAction(Request $request, Sponsor $sponsor){

            $deleteForm = $this->createDeleteForm($sponsor);
            $editForm = $this->createForm('ErpBundle\Form\SponsorType', $sponsor);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('erp_sponsor', array('id' => $sponsor->getId()));
            }

            return $this->render('ErpBundle:Sponsor:edit.html.twig', array(
                'sponsor' => $sponsor,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
    }

    public function deleteAction(Request $request, Sponsor $sponsor)
    {
        $form = $this->createDeleteForm($sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sponsor);
            $em->flush();
        }

        return $this->redirectToRoute('erp_homepage');
    }

    /**
     * Creates a form to delete a sponsor entity.
     *
     * @param Sponsor $sponsor The sponsor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sponsor $sponsor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('erp_sponsor_delete', array('id' => $sponsor->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
