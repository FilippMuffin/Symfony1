<?php
/**
 * Created by PhpStorm.
 * User: mihfil
 * Date: 09.06.18
 * Time: 21:43
 */

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\HttpFoundation\Response;


class StockController extends Controller
{
    /**
     * @Route("/stock", name="add")
     */
    public function create(Request $request)
    {

        $product = new Product();

        $form = $this->createFormBuilder($product)
            ->add('name', TextType::class)
            ->add('manufacturer', TextType::class)
            ->add('qty', IntegerType::class)
            ->add('price', MoneyType::class)
            ->add('save', SubmitType::class, array('label'=> 'Add'))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();


            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();


            }



        return $this->render('new.html.twig', array(
            'form' => $form->createView(), 'product' =>$product
        ));
    }


    /**
     * @Route("/ans", name ="all")
     */

        public function show()
    {

        $repository = $this->getDoctrine()->getRepository(Product::class);
        $product1 = $repository->findAll();

        return $this->render('stock.html.twig',array(
            'product' => $product1
        ));
    }





}