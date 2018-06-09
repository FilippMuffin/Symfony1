<?php

// src/AppBundle/Controller/AboutmeController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Student;
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
        $student = new Student('Ivan', 'Petrov', '21');
        $student->setSername('Ivanov');
        $em = $this->getDoctrine()->getManager();
        $em->persist($student);
        $em->flush();
       return $this->render('about.html.twig', array(
           'me' => $me, 'family'=>$family, 'student'=>$student,
       ));
   }


}