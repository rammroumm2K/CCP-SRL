<?php

namespace App\Form;

use App\Entity\Tag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Tag Name',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter tag name',
                    'maxlength' => 255, // Limite massimo coerente con il database
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'The tag name cannot be empty.',
                    ]),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'The tag name cannot exceed {{ limit }} characters.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tag::class,
            'csrf_protection' => true, // Abilita la protezione CSRF
            'csrf_field_name' => '_token', // Nome del campo nel form
            'csrf_token_id'   => 'tag',   // Identificativo per il token
        ]);
    }
}
