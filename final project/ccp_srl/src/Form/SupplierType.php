<?php

namespace App\Form;

use App\Entity\Supplier;
use App\Entity\Tag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SupplierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameCompany', null, [
                'label' => 'Company Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter company name',
                ],
            ])
            ->add('link', null, [
                'label' => 'Link',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter company link',
                ],
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Supplier::class,
            'csrf_protection' => true, // Abilita il token CSRF
            'csrf_field_name' => '_token', // Nome del campo token
            'csrf_token_id'   => 'supplier', // ID del token CSRF
        ]);
    }
}
