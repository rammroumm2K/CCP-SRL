<?php

namespace App\Controller;

use App\Form\ContactFormType;
use ReCaptcha\ReCaptcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
        ]);
    }

    #[Route('/submit-contact', name: 'submit_contact', methods: ['POST'])]
    public function submitContact(Request $request): JsonResponse
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            return new JsonResponse(['success' => false, 'message' => 'The form was not submitted.'], Response::HTTP_BAD_REQUEST);
        }

        if (!$form->isValid()) {
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }

            return new JsonResponse(['success' => false, 'errors' => $errors], Response::HTTP_BAD_REQUEST);
        }

        // Recupera il token captcha dal form
        $captchaToken = $request->request->get('captcha');
        if (!$captchaToken) {
            return new JsonResponse(['success' => false, 'message' => 'reCAPTCHA token missing.'], Response::HTTP_BAD_REQUEST);
        }

        // Verifica il token reCAPTCHA
        $recaptcha = new ReCaptcha($_ENV['GOOGLE_RECAPTCHA_SECRET_KEY']);
        $response = $recaptcha->verify($captchaToken, $request->getClientIp());

        if (!$response->isSuccess()) {
            return new JsonResponse(['success' => false, 'message' => 'Invalid reCAPTCHA. Please try again.'], Response::HTTP_BAD_REQUEST);
        }

        // Logica per gestire il form (es. invio email, salvataggio dati)
        return new JsonResponse(['success' => true, 'message' => 'Message sent successfully!']);
    }
}
