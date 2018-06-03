<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {



        $me = array(
            "Name" => "Mikhail",
            "Sername" => "Filippov",
            "Birthday" => "26.08.1999(dd.mm.yyyy)",
            "Education" => array (
                "School" => "FTL№1",
                "University" => "SGU faculty CSIT"
            )
        );


        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}

