<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {

        return new Response('Hello World!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new  Response(sprintf(
            'BS BS BS the article: %s',
            $slug
        ));
    }

}
