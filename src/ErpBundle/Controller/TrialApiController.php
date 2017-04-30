<?php

namespace ErpBundle\Controller;

use ErpBundle\Entity\Trial;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
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
        return $trials;
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
        $gSponsor = $request->get('g_sponsor');
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



        /*$data->setCreationDate(new \DateTime());*/

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        $lastid = $data->getId();
        $view = View::create(array("newid" => $lastid, "id" => $id, "status" => "success"));
        return $this->viewHandler->handle($view);
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
        $gSponsor = $request->get('g_sponsor');
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

        $sn->flush();
        return new View("Sponsor Updated Successfully", Response::HTTP_OK);
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
