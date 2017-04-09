<?php

namespace ErpBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends FOSRestController implements ClassResourceInterface
{
    public function cgetLoadAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('DataBundle:Sponsor');
        $clients = $repo->findAll();
        return $clients;
    }

    public function getAction($id)
    {
        return $this->getDoctrine()->getRepository('ErpBundle:Sponsor')->find($id);
    }

    public function postAction(Request $request)
    {

    }

    public function putAction(Request $request, int $id)
    {

    }

    public function deleteAction(int $id)
    {

    }
}
