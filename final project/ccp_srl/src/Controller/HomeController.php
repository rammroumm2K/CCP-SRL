<?php
namespace App\Controller;

use App\Form\ContactFormType;
use GuzzleHttp\Client;
use ReCaptcha\ReCaptcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Psr\Log\LoggerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        Request $request,
        RateLimiterFactory $contactFormLimiter,
        LoggerInterface $logger
    ): Response {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        $modalData = $this->createModal();

        // Applica il limite di richieste
        $limiter = $contactFormLimiter->create($request->getClientIp());
        if (!$limiter->consume(1)->isAccepted()) {
            $modalData = $this->createModal('Too Many Requests', 'Please try again later.', 'error');
            return $this->renderResponse($form, $modalData);
        }

        // Gestione del form
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $captchaToken = $request->request->get('g-recaptcha-response');

            // Verifica reCAPTCHA
            if (!$captchaToken || !$this->verifyRecaptcha($captchaToken, $request->getClientIp())) {
                $modalData = $this->createModal('Invalid reCAPTCHA', 'Please try again.', 'error');
            } else {
                try {
                    // Invio email tramite Symfony Mailer con OAuth2
                    $this->sendEmailWithOauth2($data);
                    $modalData = $this->createModal('Success', 'Your message has been sent!', 'success');
                } catch (\Exception $e) {
                    $logger->error('Mailer Error: ' . $e->getMessage());
                    $modalData = $this->createModal('Error', 'Failed to send your message.', 'error');
                }
            }
        } elseif ($form->isSubmitted()) {
            $modalData = $this->createModal('Form Errors', $this->getFormErrors($form), 'error');
        }

        return $this->renderResponse($form, $modalData);
    }

    /**
     * Invia un'email utilizzando Symfony Mailer con OAuth2
     */
    private function sendEmailWithOauth2(array $data): void
    {
        // Configura il DSN SMTP con OAuth2
        $accessToken = $this->getOAuthToken();

        $dsn = sprintf(
            'smtp://%s:%s@smtp.office365.com:587?auth_mode=xoauth2',
            urlencode('info@ccp.be'),  // Usa il tuo indirizzo email
            urlencode($accessToken)    // Token OAuth2
        );

        $transport = Transport::fromDsn($dsn);
        $mailer = new Mailer($transport);

        // Crea l'email
        $email = (new Email())
            ->from('info@ccp.be')
            ->to('recipient@example.com') // Puoi usare $_ENV['MAILER_TO'] se preferisci
            ->subject('New Contact Form Submission')
            ->text(sprintf(
                "Name: %s\nEmail: %s\nSubject: %s\nMessage:\n%s",
                htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8'),
                htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8'),
                htmlspecialchars($data['subject'], ENT_QUOTES, 'UTF-8'),
                htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8')
            ));

        // Invia l'email
        $mailer->send($email);
    }

    /**
     * Ottieni il token OAuth2 tramite Guzzle HTTP Client
     */
    private function getOAuthToken(): string
    {
        $client = new Client();
        $tokenUrl = "https://login.microsoftonline.com/{$_ENV['OAUTH2_TENANT_ID']}/oauth2/v2.0/token";

        $response = $client->post($tokenUrl, [
            'form_params' => [
                'grant_type'    => 'client_credentials',
                'client_id'     => $_ENV['OAUTH2_CLIENT_ID'],
                'client_secret' => $_ENV['OAUTH2_CLIENT_SECRET'],
                'scope'         => 'https://outlook.office365.com/.default',
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        if (!isset($data['access_token'])) {
            throw new \RuntimeException('Failed to retrieve OAuth2 access token.');
        }

        return $data['access_token'];
    }

    // Metodi ausiliari (senza modifiche)
    private function verifyRecaptcha(string $captchaToken, string $clientIp): bool
    {
        $recaptcha = new ReCaptcha($_ENV['GOOGLE_RECAPTCHA_SECRET_KEY']);
        $response = $recaptcha->verify($captchaToken, $clientIp);
        return $response->isSuccess();
    }

    private function createModal(string $title = '', string $message = '', string $type = ''): array
    {
        return [
            'show' => !empty($title) && !empty($message),
            'title' => $title,
            'message' => $message,
            'type' => $type,
        ];
    }

    private function getFormErrors($form): string
    {
        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = htmlspecialchars($error->getMessage(), ENT_QUOTES, 'UTF-8');
        }
        return implode('<br>', $errors);
    }

    private function renderResponse($form, array $modalData): Response
    {
        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'modal' => $modalData,
            'site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
        ]);
    }
}
