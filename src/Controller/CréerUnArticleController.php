<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CréerUnArticleController extends AbstractController
{
    /**
     * @Route("/cr�erunarticle", name="cr�erunarticle")
     */
    public function index(): Response
    {
        return $this->render('cr�erUnArtcile/index.html.twig', [
            'controller_name' => 'Cr�erUnArticleController',
        ]);
    }
}
