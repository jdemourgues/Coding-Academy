<?php

namespace CA\PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CAPlatypusBundle:Default:index.html.twig');
    }
}
