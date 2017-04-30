<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\Sponsor;
use ErpBundle\Entity\Trial;
use ErpBundle\Entity\TrialArmFile;
use ErpBundle\Entity\TrialDiscussionS;
use ErpBundle\Entity\TrialDiscussionT;
use ErpBundle\Entity\Trialimage;
use ErpBundle\Entity\TrialProtocolFile;
use ErpBundle\Form\TrialarmfileType;
use ErpBundle\Form\TrialDiscussionSType;
use ErpBundle\Form\TrialDiscussionTType;
use ErpBundle\Form\TrialimageType;
use ErpBundle\Form\TrialprotocolfileType;
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
        return $this->render('ErpBundle:Trial:list.html.twig');
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
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $image = new Trialimage();
        $arm = new TrialArmFile();
        $protocol = new TrialProtocolFile();
        $discussion_with_sponsor = new TrialDiscussionS();
        $discussion_with_technician = new TrialDiscussionT();


        $form1 = $this->get('form.factory')->createNamed('form1', TrialimageType::class, $image);
        $form2 = $this->get('form.factory')->createNamed('form2', TrialarmfileType::class, $arm);
        $form3 = $this->get('form.factory')->createNamed('form3', TrialprotocolfileType::class, $protocol);
        $form4 = $this->get('form.factory')->createNamed('form4', TrialDiscussionSType::class, $discussion_with_sponsor);
        $form5 = $this->get('form.factory')->createNamed('form5', TrialDiscussionTType::class, $discussion_with_technician);

        $trial = $this->getDoctrine()->getManager()->find('ErpBundle:Trials', $id);

        $list_of_comments_with_sponsors = $em->getRepository('ErpBundle:TrialDiscussionS')->findBy(array('trials' => $trial));
        $list_of_comments_with_technician = $em->getRepository('ErpBundle:TrialDiscussionT')->findBy(array('trials' => $trial));
        $list_of_images = $em->getRepository('ErpBundle:Trialimage')->findBy(array('trials' => $trial));
        $arm_file = $em->getRepository('ErpBundle:TrialArmFile')->findBy(array('trials' => $trial));
        $list_of_protocol_files = $em->getRepository('ErpBundle:TrialProtocolFile')->findBy(array('trials' => $trial));

        if (!$trial) {
            throw new Exception('ouistiti');
        }

        if ($request->isMethod('POST')) {
            if ($request->request->has('form1') && $form1->handleRequest($request)->isValid()) {
                $image->setTrials($trial);
                $em->persist($image);
                $em->flush();
                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form2') && $form2->handleRequest($request)->isValid()) {
                $arm->setTrials($trial);
                $em->persist($arm);
                $em->flush();
                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form3') && $form3->handleRequest($request)->isValid()) {
                $protocol->setTrials($trial);
                $em->persist($protocol);
                $em->flush();
                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form4') && $form4->handleRequest($request)->isValid()){
                $discussion_with_sponsor->setTrials($trial);
                $discussion_with_sponsor->setAuthor($user);
                $em->persist($discussion_with_sponsor);
                $em->flush();
                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form5') && $form5->handleRequest($request)->isValid()){
                $discussion_with_technician->setTrials($trial);
                $discussion_with_technician->setAuthor($user);
                $em->persist($discussion_with_technician);
                $em->flush();
                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
        }

        return $this->render('@Erp/Trial/view2.html.twig', array(
            'trial' => $trial,
            'list_of_comments_with_sponsors' => $list_of_comments_with_sponsors,
            'list_of_comments_with_technician' => $list_of_comments_with_technician,
            'list_of_images' => $list_of_images,
            'arm_file' => $arm_file,
            'list_of_protocol_files' => $list_of_protocol_files,
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView(),
            'form4' => $form4->createView(),
            'form5' => $form5->createView()
        ));
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

        return $this->render(
            'ErpBundle:Trial:test.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }
}
