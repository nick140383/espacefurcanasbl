<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class SessionController extends AbstractController
{
    /**
     * @Route("/session", name="session")
     */
    public function index()
    {

        $utilisateur = new Utilisateur();
        $this->addFlash('success',
            "Bravo <strong class='text-danger'>{$utilisateur->getPseudo()}</strong> Inscription reussie");
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
        ]);

    }
    /**
     *
     * @Route("/register",name="account_register")
     *
     * @return Response
     */
    public function register(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $utilisateur = new Utilisateur();

        $form = $this->createForm(RegistrationType::class, $utilisateur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $hash = $encoder->encodePassword($utilisateur, $utilisateur->getPassword());

            $utilisateur->setPassword($hash);
            $manager->persist($utilisateur);
            $manager->flush();
            $this->addFlash('success',
                "Bravo <strong class='text-danger'>{$utilisateur->getPseudo()}</strong> Inscription reussie"

            );

            return $this->redirectToRoute('authentication_user');
        }

        return $this->render('account/inscription.html.twig', [
            'form'=> $form->createView()
        ]);
    }

    /**
     * @Route("/connecter", name="authentication_user")
     */
    public function login(AuthenticationUtils $utils)
    {
        $error=$utils->getLastAuthenticationError();
        return $this->render('account/login.html.twig',['hasError'=>$error!==null]);
        return $this->redirectToRoute('reservation');
    }

    /**
     * @Route("/signout", name="authentication_logout")
     */
    public function logout(){}
    /**
     * @return Response
     *
     * @Route("/login_ok",name="login_ok")
     *
     * @Security("has_role('ROLE_USER')")
     */

    public function login_ok()
    {
        return $this->render('login_success.html.twig');
    }
}
