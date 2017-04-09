<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\Sponsor;
use ErpBundle\Entity\Trial;
use ErpBundle\Entity\Trialimage;
use ErpBundle\Form\TrialimageType;
use ErpBundle\Form\TrialType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ErpBundle\Form\ImageType;
use ErpBundle\Form\SponsorType;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class TrialController extends Controller
{
    public function listAction()
    {

    }

/*    public function viewAction(Request $request)
    {
        $image = new Trialimage();
        $form = $this->get('form.factory')->create(TrialimageType::class, $image);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();
        }

        return $this->render('@Erp/Trial/view2.html.twig', array('form' => $form->createView()));
    }*/

    public function viewAction(Request $request, $id)
    {
        $image = new Trialimage();
        $form = $this->get('form.factory')->create(TrialimageType::class, $image);
        $trial = $this->getDoctrine()->getManager()->find('ErpBundle:Trials', $id);
        if(!$trial){
            throw new Exception('ouistiti');
        }

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();
        }
        return $this->render('@Erp/Trial/view2.html.twig', array('trial'=>$trial, 'form' => $form->createView()));
    }

    public function testAction(Request $request)
    {
        $sponsor = new Sponsor();
        $form = $this->get('form.factory')->create(SponsorType::class, $sponsor);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => $sponsor->getId()));
        }

        return $this->render('ErpBundle:Trial:test.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
