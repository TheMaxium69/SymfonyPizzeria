<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour", name="bonjour")
     */
    public function index(): Response
    {
        $secret = "les dauphins existent pour de vrai";

        $tableau = ['Michel', 1, 'Paul'];

        $JeSuisUnInt = 2;

        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
            'leSecret' => $secret,
            'leTableau' => $tableau,
            'leInt' => $JeSuisUnInt
        ]);
    }

    /**
     * @Route("/salut/{name}", name="salut")
     */
    public function salut(string $name = "default"): Response
    {

        if (!empty($_POST['route'])){

            $postName = $_POST['route'];

            return $this->redirect('/salut/'.$postName);
        }



        return $this->render('bonjour/salut.html.twig', [
            'controller_name' => 'je suis la page salut',
            'leNom' => $name
        ]);
    }
}
