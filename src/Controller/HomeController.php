<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormView;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/aide-et-conseil-1", name="aid_con")
     */

    public function aideconseil()
    {
        return $this->render('home/aide_conseil.html.twig');
    }

    /**
     * @Route("/formations-et-stages-2", name="form_stag")
     */
    public function formations_et_stages()
    {
        return $this->render('home/formation_stage.html.twig');
    }

    /**
     * @Route("/soutien-scolaire-3", name="sout_scol")
     */
    public function soutien_scolaire()
    {
        return $this->render('home/soutien_scolaire.html.twig');
    }

    /**
     * @Route("/aide-logement-et-emploi-4", name="aide_log")
     */
    public function aide_logement_emploi()
    {
        return $this->render('home/aide_logement_emploi.html.twig');
    }

    /**
     * @Route("/activites-socioculturelles-5", name="act_socio_cul")
     */
    public function activite_socio_culturel()
    {
        return $this->render('home/activite_socio_cult.html.twig', ['controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/activites-de-loisirs-6", name="act_loisir")
     */

    public function activite_loisir()
    {
        return $this->render('home/activite_loisir.html.twig');

    }

    /**
     * @Route("/vente-et-achat-7", name="vente_achat")
     */

    public function vente_achat()
    {
        return $this->render('home/vente_achat.html.twig');
    }
    /**
     * @Route("home/location-et-cyber-8", name="locat_cyber")
     */

    public function locationcyber()
    {
        return $this->render('home/location_cyber.html.twig');
    }
    /**
     * @Route("/reparation-9", name="reparation")
     */

    public function reparation()
    {
        return $this->render('home/Reparation.html.twig');
    }
    /**
     * @Route("/maintenance-10", name="maint")
     */

    public function maintenance()
    {
        return $this->render('home/maintenance.html.twig');
    }
    /**
     * @Route("/a-propos", name="apropos")
     */

    public function a_propos()
    {
        return $this->render('home/a_propos.html.twig');
    }
    /**
     * @Route("/galerie", name="galerie")
     */

    public function galeries()
    {
        return $this->render('home/galerie.html.twig');
    }
    /**
     * @Route("/nous-soutenir", name="soutien")
     */

    public function nous_soutenir()
    {
        return $this->render('home/nous_soutenir.html.twig');
    }
    /**
     * @Route("/contact", name="cont")
     */

    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }
    /**
     * @Route("/nous-trouver", name="reserv_calend")
     */

    public function nous_trouver()
    {
        return $this->render('home/nous_trouver.html.twig');
    }

    /**
     * @Route("/calendar", name="calendrier")
     */

    public function calendrier()
    {

        return $this->render('home/resrv_calendrier.html.twig');
    }

}
