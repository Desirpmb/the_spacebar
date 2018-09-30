<?php
/**
 * Created by PhpStorm.
 * User: dezman
 * Date: 28/09/18
 * Time: 22:20
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {

        return new Response('OMG! My first page already! WOOO !');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {

        #return new Response(sprintf(
            #'Future page to show the article : %s',
            #$slug
        #));
        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('_',' ',$slug)),
        ]);
    }
}