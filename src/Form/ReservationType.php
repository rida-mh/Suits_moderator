<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name_res')
            ->add('create_date')
            ->add('size')
            ->add('color')
            ->add('size_pants')
            ->add('length_pant')
            ->add('size_jacket')
            ->add('size_shoe')
            ->add('color_shoe')
            ->add('type_crav_pap')
            ->add('num_tele')
            ->add('name_client')
            ->add('id_cart')
            ->add('price')
            ->add('advanced')
            ->add('rest')
            ->add('note')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
