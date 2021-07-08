<?php

namespace App\Controller;

use PhpParser\Node\Expr\Cast\Object_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour", name="bonjourFunction")
     */
    public function index(): Response
    {
        if (!empty($_POST['route'])){
            $postName = $_POST['route'];

            return $this->redirect('/salut/'.$postName);
        }

        $secret = "les dauphins existent pour de vrai";

        $tableau = ['Michel', 'Pierre', 'Paul', 'lena', 'camille','juliette', 'chien', 'chat', 'cheval'];

        $JeSuisUnInt = 2;

        $tableau2 = [
            [
               "name" => "michel",
               "type" => "human",
                "age" => 63,
                "genre" => "male",
            ],
            [
                "name" => "Pierre",
                "type" => "human",
                "age" => 10,
                "genre" => "male",
            ],
            [
                "name" => "lena",
                "type" => "human",
                "age" => 19,
                "genre" => "female",
            ],
            [
                "name" => "camille",
                "type" => "human",
                "age" => 34,
                "genre" => "female",
            ],
            [
                "name" => "tic",
                "type" => "squirrel",
                "age" => 12,
                "genre" => "male",
            ],
            [
                "name" => "tac",
                "type" => "squirrel",
                "age" => 9,
                "genre" => "female",
            ],
        ];

        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
            'leSecret' => $secret,
            'leTableau' => $tableau,
            'leInt' => $JeSuisUnInt,
            'leTableauDetail' => $tableau2
        ]);
    }

    /**
     * @Route("/salut/{name}", name="salutFunction")
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
