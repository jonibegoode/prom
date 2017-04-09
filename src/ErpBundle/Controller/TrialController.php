<?php

namespace ErpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrialController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
