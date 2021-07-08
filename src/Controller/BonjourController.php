<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour/michel", name="bonjour")
     */
    public function index(): Response
    {
        $secret = "les dauphins existent pour de vrai";

        $tableau = ['Michel', 'Pierre', 'Paul'];

        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
            'leSecret' => $secret,
            'leTableau' => $tableau
        ]);
    }
}
