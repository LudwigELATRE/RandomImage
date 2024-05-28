<?php

namespace App\Controller;

use Random\Randomizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RandomImageController extends AbstractController
{
    #[Route('/random-image', name: 'random_image')]
    public function index(): Response
    {
        $randomImages = [];
        for ($i=0; $i<12; $i++) {
            $random = new Randomizer();
            $randomImages[] .= $random->getInt(0, 100);
        }

        return $this->render('random_image/index.html.twig', [
            'randomImages' => $randomImages,
        ]);
    }
}
