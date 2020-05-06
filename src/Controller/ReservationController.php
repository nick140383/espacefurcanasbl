<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Utilisateur;
use App\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservations", name="reservation")
     */
    public function reserver(){
    $reservation=new reservation;
    $form=$this->createForm(ReservationType::class,$reservation);

        return $this->render('reservation/index.html.twig', [

            'form'=>$form->createView()
        ]);
    }
}
