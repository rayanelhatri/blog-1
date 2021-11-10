<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact/{city}", name="contact")
     */
    public function index(Request $request , String $city = ""): Response
    {
        $name = $request->query->get('name');

        return $this->render('contact/index.html.twig', [
            'city' => $city,
            'name' => $name
        ]);
        }
}
    /**
     * @Route("/contact/{city}", name="contact")
     */

  /*  public function contactCity(string $city):Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'bfosbjfjf',
            'city' => $city
        ]);
    }
} */
