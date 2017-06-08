<?php

namespace ErpBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ErpBundle\Entity\Sponsor;
use ErpBundle\Entity\Trial;
use ErpBundle\Entity\TrialArmFile;
use ErpBundle\Entity\TrialDiscussionS;
use ErpBundle\Entity\TrialDiscussionT;
use ErpBundle\Entity\Trialimage;
use ErpBundle\Entity\TrialProtocolFile;
use ErpBundle\Form\DeleteProtocolType;
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
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TrialController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ErpBundle:Trial');
        $trials = $repo->findAll();



        return $this->render('ErpBundle:Trial:list.html.twig', array('trials' => $trials));
    }


    public function viewAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $image = new Trialimage();
        $arm = new TrialArmFile();
        $protocol = new TrialProtocolFile();
        $discussion_with_sponsor = new TrialDiscussionS();
        $discussion_with_technician = new TrialDiscussionT();
        $user_email = $this->getUser()->getEmail();
        $trial = $this->getDoctrine()->getManager()->find('ErpBundle:Trial', $id);
        $url = $this->get('router')->generate('erp_trial', array('id' => $trial->getId()), UrlGeneratorInterface::ABSOLUTE_URL);


        $form1 = $this->get('form.factory')->createNamed('form1', TrialimageType::class, $image);
        $form2 = $this->get('form.factory')->createNamed('form2', TrialarmfileType::class, $arm);
        $form3 = $this->get('form.factory')->createNamed('form3', TrialprotocolfileType::class, $protocol);
        $form4 = $this->get('form.factory')->createNamed('form4', TrialDiscussionSType::class, $discussion_with_sponsor);
        $form5 = $this->get('form.factory')->createNamed('form5', TrialDiscussionTType::class, $discussion_with_technician);

        $form6 = $this->get('form.factory')->createNamed('form6', DeleteProtocolType::class, $protocol);




        $list_of_comments_with_sponsors = $em->getRepository('ErpBundle:TrialDiscussionS')->findBy(
            array('trial' => $trial)
        );
        $list_of_comments_with_technician = $em->getRepository('ErpBundle:TrialDiscussionT')->findBy(
            array('trial' => $trial)
        );
        $list_of_images = $em->getRepository('ErpBundle:Trialimage')->findBy(array('trial' => $trial));
        $arm_file = $em->getRepository('ErpBundle:TrialArmFile')->findBy(array('trial' => $trial));
        $list_of_protocol_files = $em->getRepository('ErpBundle:TrialProtocolFile')->findBy(array('trial' => $trial));

        if (!$trial) {
            throw new Exception('ouistiti');
        }

        if ($request->isMethod('POST')) {
            if ($request->request->has('form1') && $form1->handleRequest($request)->isValid()) {
                $image->setTrial($trial);
                $em->persist($image);
                $em->flush();

                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form2') && $form2->handleRequest($request)->isValid()) {
                try {
                    $arm->setTrial($trial);
                    $em->persist($arm);
                    $em->flush();

                }
                catch (UniqueConstraintViolationException $e){
                    $request->getSession()->getFlashbag()->add('notice', 'Only One ARM File is allowed');
                    return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
                }



                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form3') && $form3->handleRequest($request)->isValid()) {
                $protocol->setTrial($trial);
                $em->persist($protocol);
                $em->flush();

                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form4') && $form4->handleRequest($request)->isValid()) {
                $discussion_with_sponsor->setTrial($trial);
                $discussion_with_sponsor->setAuthor($user);
                $em->persist($discussion_with_sponsor);
                $em->flush();
                $object = $discussion_with_sponsor->getComment()." you can go there by clicking this link ".$url;
                $subject = "you've got a new message from promovert relative to the trial  ".$trial->getGTrialNumber();
                $message = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom('promovert.postmaster@gmail.com')
                    ->setTo($user_email)
                    ->setBody($object, 'text/html');
                $this->get('mailer')->send($message);

                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
            if ($request->request->has('form5') && $form5->handleRequest($request)->isValid()) {
                $discussion_with_technician->setTrial($trial);
                $discussion_with_technician->setAuthor($user);
                $em->persist($discussion_with_technician);
                $em->flush();

                return $this->redirectToRoute('erp_trial', array('id' => $trial->getId()));
            }
        }

        if ($request->isMethod('DELETE')) {
            if ($request->request->has('form6') && $form6->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity = $em->getRepository('ErpBundle:TrialProtocolFile')->find($id);
                $em->remove($entity);
                $em->flush();
            }
        }

        return $this->render(
            '@Erp/Trial/view2.html.twig',
            array(
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
                'form5' => $form5->createView(),
                'form6' => $form6->createView(),
            )
        );
    }

    public function deleteAction(TrialProtocolFile $trialProtocolFile)
    {
        $trial = $trialProtocolFile->getTrial();
        $em = $this->getDoctrine()->getManager();
        $em->remove($trialProtocolFile);
        $em->flush();

        return $this->redirectToRoute('erp_trial', array('id' => $trial->getID()));
    }

    public function downloadarmAction(TrialArmFile $trialArmFile)
    {
        $web = $this->getParameter('web_dir');
        $id = $trialArmFile->getTrial()->getId();
        $name = $trialArmFile->getArmName();
        $response = new BinaryFileResponse($web.'/arm/'.$id.'/'.$name);
        $response->deleteFileAfterSend(true);

        $em = $this->getDoctrine()->getManager();
        $em->remove($trialArmFile);
        $em->flush();


        return $response;

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
            array('form' => $form->createView())
        );
    }
}
