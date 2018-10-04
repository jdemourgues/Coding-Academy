<?php

namespace CA\PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheckerController extends Controller
{
    public function viewAction($type, $id=null)
    {
        if ($type === "Platypus") {
            return $this->render('CAPlatypusBundle:Checker:view.html.twig', array(
                'variable' => "I salute you Ô great master",
                'varId' => ""
                ));
            }
            elseif ($type === "Human" || $type === "Gecko") {
                if (!isset($id)) {
                    return $this->render('CAPlatypusBundle:Checker:view.html.twig', array(
                        'variable' => $type,
                        'varId' => ""
                ));
                }
                return $this->render('CAPlatypusBundle:Checker:view.html.twig', array(
                    'variable' => $type,
                    'varId' => $id
                ));
            }
        return $this->render('CAPlatypusBundle:Checker:view.html.twig', array(
            'variable' => "Illegals type values",
            'varId' => ""
        ));

    }
}
