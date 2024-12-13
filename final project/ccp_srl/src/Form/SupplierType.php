<?php

namespace App\Form;

use App\Entity\Supplier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\DataTransformer\TagsTransformer;

class SupplierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameCompany')
            ->add('link')
            ->add('tags', TextType::class, [
                'required' => false,
                'label' => 'Tags',
                'attr' => [
                    'placeholder' => 'Inserisci i tag separati da virgola',
                ],
            ]);

        // Aggiungi un trasformatore per gestire i tag come stringa
        $builder->get('tags')->addModelTransformer(new TagsTransformer());
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
