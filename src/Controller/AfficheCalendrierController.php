<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AfficheCalendrierController extends AbstractController
{
    /**
     * @Route("/affiche/calendrier", name="affiche_calendrier")
     */
    public function index()
    {
        return $this->render('affiche_calendrier/index.html.twig', [
            'controller_name' => 'AfficheCalendrierController',
        ]);
    }
}
