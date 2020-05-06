<?php

namespace App\Form;

use App\Entity\Reservation;
use Doctrine\DBAL\Types\TimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         //   ->add('heureDebut',TimeType::class,$this->getConfiguration("heure de d'arrivee","l'heure à laquelle vous comptez louer la salle"))
          //  ->add('heureFin',TimeType::class,$this->getConfiguration("heure de depart","heure a laquelle vous comptez partir"))
            ->add('dateDebut',DateTimeType::class,$this->getConfiguration("date d'arrivée","date à laquelle vous comptez louer la salle",["widget"=>"single_text"]))
            ->add('dateFin',DateTimeType::class,$this->getConfiguration("date de depart","date à laquelle vous comptez quitter la salle",["widget"=>"single_text"]))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
