<?php
namespace App\Controller;

use App\Form\ContactFormType;
use ReCaptcha\ReCaptcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\RateLimiter\RateLimiterFactory;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, MailerInterface $mailer, RateLimiterFactory $contactFormLimiter): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        $modalData = [
            'show' => false,
            'title' => '',
            'message' => '',
            'type' => '',
        ];

        // Applica il limite di richieste
        $limiter = $contactFormLimiter->create($request->getClientIp());
        if (!$limiter->consume(1)->isAccepted()) {
            $modalData = [
                'show' => true,
                'title' => 'Too Many Requests',
                'message' => 'You have exceeded the request limit. Please try again later.',
                'type' => 'error',
            ];
            return $this->render('home/index.html.twig', [
                'form' => $form->createView(),
                'modal' => $modalData,
                'site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
            ]);
        }

        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                // Colleziona errori
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = htmlspecialchars($error->getMessage(), ENT_QUOTES, 'UTF-8');
                }

                $modalData = [
                    'show' => true,
                    'title' => 'Form Errors',
                    'message' => implode('<br>', $errors),
                    'type' => 'error',
                ];
            } else {
                $data = $form->getData();

                // Verifica reCAPTCHA
                $captchaToken = $request->request->get('captcha');
                if (!$captchaToken) {
                    $modalData = [
                        'show' => true,
                        'title' => 'Invalid reCAPTCHA',
                        'message' => 'Token is missing or invalid. Please try again.',
                        'type' => 'error',
                    ];
                } else {
                    $recaptcha = new ReCaptcha($_ENV['GOOGLE_RECAPTCHA_SECRET_KEY']);
                    $response = $recaptcha->verify($captchaToken, $request->getClientIp());

                    if (!$response->isSuccess()) {
                        $modalData = [
                            'show' => true,
                            'title' => 'Invalid reCAPTCHA',
                            'message' => 'Verification failed. Please try again.',
                            'type' => 'error',
                        ];
                    } else {
                        // Invio email solo in caso di token valido
                        $email = (new Email())
                            ->from('your-email@gmail.com')
                            ->to('recipient@example.com')
                            ->subject('New Contact Form Submission')
                            ->text(sprintf(
                                "Name: %s\nEmail: %s\nSubject: %s\nMessage:\n%s",
                                htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8'),
                                htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8'),
                                htmlspecialchars($data['subject'], ENT_QUOTES, 'UTF-8'),
                                htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8')
                            ));

                        $mailer->send($email);

                        $modalData = [
                            'show' => true,
                            'title' => 'Success',
                            'message' => 'Your message has been sent successfully!',
                            'type' => 'success',
                        ];
                    }
                }
            }
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'modal' => $modalData,
            'site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
        ]);
    }
}
