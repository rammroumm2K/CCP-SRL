<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\IsTrue;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Full Name',
                'constraints' => [
                    new NotBlank(['message' => 'Name is required.']),
                ],
                'attr' => [
                    'placeholder' => 'Enter your full name',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'constraints' => [
                    new NotBlank(['message' => 'Email is required.']),
                    new Email(['message' => 'Please enter a valid email address.']),
                ],
                'attr' => [
                    'placeholder' => 'Enter your email address',
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Subject',
                'constraints' => [
                    new NotBlank(['message' => 'Subject is required.']),
                ],
                'attr' => [
                    'placeholder' => 'Enter the subject',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'constraints' => [
                    new NotBlank(['message' => 'Message is required.']),
                ],
                'attr' => [
                    'placeholder' => 'Type your message here...',
                    'rows' => 5,
                ],
            ])
            ->add('consent', CheckboxType::class, [
                'label' => 'I agree to have my data collected and stored for the purpose of contacting me.',
                'mapped' => false,
                'constraints' => [
                    new IsTrue(['message' => 'You must agree before submitting.']),
                ],
            ]);
    }
}
