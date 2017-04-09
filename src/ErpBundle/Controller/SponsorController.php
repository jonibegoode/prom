<?php

namespace ErpBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SponsorController extends FOSRestController implements ClassResourceInterface
{

    public function listAction()
    {
        return $this->render('ErpBundle:Sponsor:list.html.twig');
    }

    public function getViewAction($id)
    {
    }
}
