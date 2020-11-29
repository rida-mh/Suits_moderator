<?php

namespace App\Form;

use App\Entity\Model;
use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class ModelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num_model')
            ->add('color')
            ->add('quantity')
            ->add('companies',EntityType::class,['class' => Company::class,
                'choice_label' => 'name',
                'label' => 'companies'])
            ->add('Create_date',DateType::class,array(
                'required' => false,
                'widget' => 'single_text',
                'empty_data' =>''
            ))
            ->add('images', FileType::class,[
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Model::class,
        ]);
    }
}
