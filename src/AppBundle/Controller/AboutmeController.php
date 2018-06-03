<?php

// src/AppBundle/Controller/AboutmeController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutmeController extends Controller
{
   /**
    * @Route("/about")
    */

   public function About()
   {
        $me = array(
            "Name" => "Mikhail",
            "Sername" => "Filippov",
            "Birthday" => "26.08.1999(dd.mm.yyyy)",
            "Education" => "SGU faculty CSIT",
        );
        $family = array(
            "Father" => "Dad",
            "Mother" => "Mom",
            "Brother" => "Bro",
        );
       return $this->render('about.html.twig', array(
           'me' => $me, 'family'=>$family,
       ));
   }


}