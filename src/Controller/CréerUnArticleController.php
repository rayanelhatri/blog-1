<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrÃ©erUnArticleController extends AbstractController
{
    /**
     * @Route("/créerunarticle", name="créerunarticle")
     */
    public function index(): Response
    {
        return $this->render('créerUnArtcile/index.html.twig', [
            'controller_name' => 'CréerUnArticleController',
        ]);
    }
}
