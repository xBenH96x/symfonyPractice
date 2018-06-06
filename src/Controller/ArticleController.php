<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route() ("/")
     */

    public function homepage()
    {
        return new Response("Hello World");
    }

    /**
     * @Route("/news/{slug}")
     */


    public function show($slug){


        $comments = [
            'I ate something',
            'I like pears, man',
            'I love TURTLES',
            ];


        dump($slug, $this);

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-',' ', $slug)),
            'comments'=> $comments
            ]);


    }
}