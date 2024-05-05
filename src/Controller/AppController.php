<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @return Response
     * @Route("/signin", name="signin_page")
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

    /**
     * @return Response
     * @Route("/post/{name}", name="post_page")
     */
    public function postSend(string $name)
    {
        $posts =[
            ['name'=>'lana','likes'=>10,'comments'=>66, 'shares'=>60],
            ['name'=>'mouna','likes'=>50,'comments'=>50, 'shares'=>40],
            ['name'=>'sonia','likes'=>60,'comments'=>30, 'shares'=>30],
        ];
        return $this->render('post.html.twig' , ['posts'=> $posts]);

    }
    /**
     * @return JsonResponse
     * @Route("/like/{count}", name="add_like_to_post", methods={"POST"})
     */
    public function like(int $count)
    {
        $this->addFlash("success", "Your Like Has Been Added succesfully");
        return $this->json(['totalLikesCount'=> $count + rand(10,100)]);
    }

}