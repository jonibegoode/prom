<?php

namespace ErpBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use ErpBundle\Entity\Sponsor;

class ApiController extends FOSRestController
{
    /**
     * @Rest\Get("/api/get")
     */
    public function cgetLoadAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ErpBundle:Sponsor');
        $clients = $repo->findAll();
        return $clients;
    }

    /**
     * @Rest\Get("/api/sponsorlist/get")
     */
    public function cgetLoadSponsorsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ErpBundle:Sponsor');
        $clients = $repo->findAll();
        $array = array();
        foreach ($clients as $key =>$client){
            $array[$key]['id'] = $client->getId();
            $array[$key]['value'] = $client->getName();
        }
        $view = view::create($array);
        $view->setFormat('json');
        return $array;
    }

    public function getAction($id)
    {
        return $this->getDoctrine()->getRepository('ErpBundle:Sponsor')->find($id);
    }

    /**
     * @Rest\Post("/api/", name="api_post")
     */
    public function postAction(Request $request)
    {
        $data = new Sponsor;
        $id = $request->get('id');
        $sponsorCode = $request->get('sponsor_code');
        $name = $request->get('name');
        $city = $request->get('city');
        $zipCode = $request->get('zip_code');
        $address = $request->get('address');
        $country = $request->get('country');
        $phoneNumber = $request->get('phone_number');
        $email = $request->get('email');

        $data->setSponsorCode($sponsorCode);
        $data->setName($name);
        $data->setCity($city);
        $data->setZipCode($zipCode);
        $data->setAddress($address);
        $data->setCountry($country);
        $data->setPhoneNumber($phoneNumber);
        $data->setEmail($email);
        $data->setCreationDate(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        $lastid = $data->getId();

        /*$response=array("id" => $id, "status" => "success", "newid" => $lastid);*/
        /*return new JsonResponse($response);*/

        $view = View::create(array("newid" => $lastid, "id" => $id, "status" => "success"));
        return $this->handleView($view);

    }

    /**
     * @Rest\Put("/api/{id}")
     */
    public function putAction(Request $request, int $id)
    {
        $data = new Sponsor;
        $sponsorCode = $request->get('sponsor_code');
        $name = $request->get('name');
        $city = $request->get('city');
        $zipCode = $request->get('zip_code');
        $address = $request->get('address');
        $country = $request->get('country');
        $phoneNumber = $request->get('phone_number');
        $email = $request->get('email');
        $sn = $this->getDoctrine()->getManager();
        $sponsor = $this->getDoctrine()->getRepository('ErpBundle:Sponsor')->find($id);

        if (empty($sponsor)) {
            return new View("Sponsor not found", Response::HTTP_NOT_FOUND);
        }
        $sponsor->setSponsorCode($sponsorCode);
        $sponsor->setName($name);
        $sponsor->setCity($city);
        $sponsor->setZipCode($zipCode);
        $sponsor->setAddress($address);
        $sponsor->setCountry($country);
        $sponsor->setPhoneNumber($phoneNumber);
        $sponsor->setEmail($email);
        $sn->flush();

        $response=array("id" => $id, "status" => "success");

        return new JsonResponse($response);
    }


    /**
     * @Rest\Delete("/api/{id}")
     */
    public function deleteAction($id)
    {
        $data = new Sponsor;
        $sn = $this->getDoctrine()->getManager();
        $sponsor = $this->getDoctrine()->getRepository('ErpBundle:Sponsor')->find($id);
        if (empty($sponsor)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        else {
            $sn->remove($sponsor);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }

}
