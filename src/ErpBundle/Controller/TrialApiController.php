<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\Sponsor;
use ErpBundle\Entity\Trial;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;

class TrialApiController extends FOSRestController
{
    /**
     * @Rest\Get("/api_t/get")
     */
    public function cgetLoadAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ErpBundle:Trial');
        $trials = $repo->findAll();
/*        $array = array();
        foreach ($trials as $trial){
            $array['id'] = $trial->getId();
            $array['gProjectManager'] = $trial->getGProjectManager();
            $array['gDepartement'] = $trial->getGDepartement();
            $array['gCountry'] = $trial->getGCountry();
            $array['gTechnician'] = $trial->getGTechnician();
            $array['gCofracCode'] = $trial->getGCofracCode();
            $array['gYear'] = $trial->getGYear();
            $array['gEfip'] = $trial->getGEfip();
            $array['gHfieds'] = $trial->getGHfieds();
            $array['gCropCode'] = $trial->getGCropCode();
            $array['gSponsor'] = $trial->getGSponsor()->getId();
            $array['gBps'] = $trial->getGBps();
            $array['gProtocolNumber'] = $trial->getGProtocolNumber();
            $array['gTrialNumber'] = $trial->getGTrialNumber();
            $array['gSponsorContact'] = $trial->getGSponsorContact();
            $array['gSponsorProtocolNumber'] = $trial->getGSponsorProtocolNumber();
            $array['gSponsorTrialNumber'] = $trial->getGSponsorTrialNumber();
            $array['gDeclarationNumber'] = $trial->getGDeclarationNumber();
            $array['gTheme'] = $trial->getGTheme();
            $array['gCrop'] = $trial->getGCrop();
            $array['gPathogen'] = $trial->getGPathogen();
            $array['pClReceivedDate'] = $trial->getPClReceivedDate();
            $array['pClArmReceived'] = $trial->getPClArmReceived();
            $array['pPvArmContractInfo'] = $trial->getPPvArmContractInfo();
            $array['pPermitDerogationCl'] = $trial->getPPermitDerogationCl();
            $array['pDerogationPvDate'] = $trial->getPDerogationPvDate();
            $array['pOfficialDeclarationDate'] = $trial->getPOfficialDeclarationDate();
            $array['pPvVersionSent'] = $trial->getPPvVersionSent();
            $array['pPvVersionSentDate'] = $trial->getPPvVersionSentDate();
            $array['pTechSentDate'] = $trial->getPTechSentDate();
        }*/
        /*return $trials;*/
        $view = view::create($trials);
        $view->setFormat('json');
        return $view;
    }

    public function getAction($id)
    {
        return $this->getDoctrine()->getRepository('ErpBundle:Trial')->find($id);
    }

    /**
     * @Rest\Post("/api_t/", name="api_post_t")
     */
    public function postAction(Request $request)
    {
        $data = new Trial;

        $id = $request->get('id');
        $gProjectManager = $request->get('g_project_manager');
        $gDepartement = $request->get('g_departement');
        $gCountry = $request->get('g_country');
        $gTechnician = $request->get('g_technician');
        $gCofracCode = $request->get('g_cofrac_code');
        $gYear = $request->get('g_year');
        $gEfip = $request->get('g_efip');
        $gHfieds = $request->get('g_hfieds');
        $gCropCode = $request->get('g_crop_code');
        $sponsor = $request->get('g_sponsor');
        $gSponsor = $this->getDoctrine()->getManager()->getRepository('ErpBundle:Sponsor')->findOneById($sponsor);
        $gBps = $request->get('g_bps');
        $gProtocolNumber = $request->get('g_protocol_number');
        $gTrialNumber = $request->get('g_trial_number');
        $gSponsorContact = $request->get('g_sponsor_contact');
        $gSponsorProtocolNumber = $request->get('g_sponsor_protocol_number');
        $gSponsorTrialNumber = $request->get('g_sponsor_trial_number');
        $gDeclarationNumber = $request->get('g_declaration_number');
        $gTheme = $request->get('g_theme');
        $gCrop = $request->get('g_crop');
        $gPathogen = $request->get('g_pathogen');
        $pClReceivedDate = $request->get('p_cl_received_date');
        $pClArmReceived = $request->get('p_cl_arm_received');
        $pPvArmContractInfo = $request->get('p_pv_arm_contract_info');
        $pPermitDerogationCl = $request->get('p_permit_derogation_cl');
        $pDerogationPvDate = $request->get('p_derogation_pv_date');
        $pOfficialDeclarationDate = $request->get('p_official_declaration_date');
        $pPvVersionSent = $request->get('p_pv_version_sent');
        $pPvVersionSentDate = $request->get('p_pv_version_sent_date');
        $pTechSentDate = $request->get('p_tech_sent_date');

        $data->setGProjectManager($gProjectManager);
        $data->setGDepartement($gDepartement);
        $data->setGCountry($gCountry);
        $data->setGTechnician($gTechnician);
        $data->setGCofracCode($gCofracCode);
        $data->setGYear($gYear);
        $data->setGEfip($gEfip);
        $data->setGHfieds($gHfieds);
        $data->setGCropCode($gCropCode);
        $data->setGSponsor($gSponsor);
        $data->setGBps($gBps);
        $data->setGProtocolNumber($gProtocolNumber);
        $data->setGTrialNumber($gTrialNumber);
        $data->setGSponsorContact($gSponsorContact);
        $data->setGSponsorProtocolNumber($gSponsorProtocolNumber);
        $data->setGSponsorTrialNumber($gSponsorTrialNumber);
        $data->setGDeclarationNumber($gDeclarationNumber);
        $data->setGTheme($gTheme);
        $data->setGCrop($gCrop);
        $data->setGPathogen($gPathogen);
        $data->setPClReceivedDate($pClReceivedDate);
        $data->setPClArmReceived($pClArmReceived);
        $data->setPPvArmContractInfo($pPvArmContractInfo);
        $data->setPPermitDerogationCl($pPermitDerogationCl);
        $data->setPDerogationPvDate($pDerogationPvDate);
        $data->setPOfficialDeclarationDate($pOfficialDeclarationDate);
        $data->setPPvVersionSent($pPvVersionSent);
        $data->setPPvVersionSentDate($pPvVersionSentDate);
        $data->setPTechSentDate($pTechSentDate);



        /*$data->setCreationDate(new \DateTime());*/

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        $lastid = $data->getId();

        $view = View::create(array("newid" => $lastid, "id" => $id, "status" => "success"));
        return $this->handleView($view);
    }

    /**
     * @Rest\Put("/api_t/{id}")
     */
    public function putAction(Request $request, int $id)
    {
        $data = new Trial;
        $gProjectManager = $request->get('g_project_manager');
        $gDepartement = $request->get('g_departement');
        $gCountry = $request->get('g_country');
        $gTechnician = $request->get('g_technician');
        $gCofracCode = $request->get('g_cofrac_code');
        $gYear = $request->get('g_year');
        $gEfip = $request->get('g_efip');
        $gHfieds = $request->get('g_hfieds');
        $gCropCode = $request->get('g_crop_code');
        $sponsor = $request->get('g_sponsor');
        $gSponsor = $this->getDoctrine()->getManager()->getRepository('ErpBundle:Sponsor')->findOneById($sponsor);
        $gBps = $request->get('g_bps');
        $gProtocolNumber = $request->get('g_protocol_number');
        $gTrialNumber = $request->get('g_trial_number');
        $gSponsorContact = $request->get('g_sponsor_contact');
        $gSponsorProtocolNumber = $request->get('g_sponsor_protocol_number');
        $gSponsorTrialNumber = $request->get('g_sponsor_trial_number');
        $gDeclarationNumber = $request->get('g_declaration_number');
        $gTheme = $request->get('g_theme');
        $gCrop = $request->get('g_crop');
        $gPathogen = $request->get('g_pathogen');
        $pClReceivedDate = $request->get('p_cl_received_date');
        $pClArmReceived = $request->get('p_cl_arm_received');
        $pPvArmContractInfo = $request->get('p_pv_arm_contract_info');
        $pPermitDerogationCl = $request->get('p_permit_derogation_cl');
        $pDerogationPvDate = $request->get('p_derogation_pv_date');
        $pOfficialDeclarationDate = $request->get('p_official_declaration_date');
        $pPvVersionSent = $request->get('p_pv_version_sent');
        $pPvVersionSentDate = $request->get('p_pv_version_sent_date');
        $pTechSentDate = $request->get('p_tech_sent_date');

        $sn = $this->getDoctrine()->getManager();
        $trial = $this->getDoctrine()->getRepository('ErpBundle:Trial')->find($id);

        if (empty($trial)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }

        $trial->setGProjectManager($gProjectManager);
        $trial->setGDepartement($gDepartement);
        $trial->setGCountry($gCountry);
        $trial->setGTechnician($gTechnician);
        $trial->setGCofracCode($gCofracCode);
        $trial->setGYear($gYear);
        $trial->setGEfip($gEfip);
        $trial->setGHfieds($gHfieds);
        $trial->setGCropCode($gCropCode);
        $trial->setGSponsor($gSponsor);
        $trial->setGBps($gBps);
        $trial->setGProtocolNumber($gProtocolNumber);
        $trial->setGTrialNumber($gTrialNumber);
        $trial->setGSponsorContact($gSponsorContact);
        $trial->setGSponsorProtocolNumber($gSponsorProtocolNumber);
        $trial->setGSponsorTrialNumber($gSponsorTrialNumber);
        $trial->setGDeclarationNumber($gDeclarationNumber);
        $trial->setGTheme($gTheme);
        $trial->setGCrop($gCrop);
        $trial->setGPathogen($gPathogen);
        $trial->setPClReceivedDate(new \DateTime($pClReceivedDate));
        $trial->setPClArmReceived($pClArmReceived);
        $trial->setPPvArmContractInfo($pPvArmContractInfo);
        $trial->setPPermitDerogationCl($pPermitDerogationCl);
        $trial->setPDerogationPvDate($pDerogationPvDate);
        $trial->setPOfficialDeclarationDate($pOfficialDeclarationDate);
        $trial->setPPvVersionSent($pPvVersionSent);
        $trial->setPPvVersionSentDate($pPvVersionSentDate);
        $trial->setPTechSentDate($pTechSentDate);

        $sn->flush();

        $response=array("id" => $id, "status" => "success");
        return new JsonResponse($response);
    }


    /**
     * @Rest\Delete("/api_t/{id}")
     */
    public function deleteAction($id)
    {
        $data = new Trial;
        $sn = $this->getDoctrine()->getManager();
        $trial = $this->getDoctrine()->getRepository('ErpBundle:Trial')->find($id);
        if (empty($trial)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        else {
            $sn->remove($trial);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }
}
