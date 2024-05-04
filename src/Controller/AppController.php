<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('home.html.twig' );

    }
    /**
     * @return Response
     * @Route("/signup", name="sigup_page")
     */
    public function signUp()
    {
        return $this->render('signup.html.twig' );

    }

}