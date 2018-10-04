<?php

namespace CA\PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheckerController extends Controller
{
    public function viewAction($type)
    {
        return $this->render('CAPlatypusBundle:Checker:view.html.twig', array(
            'variable' => $type
        ));
    }

}
