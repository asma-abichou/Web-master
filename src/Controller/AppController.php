<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{
    /**
     * @return Response
     * @Route("/", name="index")
     */
    public function index()
    {
        return new Response('welcome to our first page');

    }

}