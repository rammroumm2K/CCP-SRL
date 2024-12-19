<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

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
                    // Invio email tramite Microsoft Graph API
                    $this->sendEmailWithGraphAPI($data);
                    $modalData = $this->createModal('Success', 'Your message has been sent!', 'success');
                } catch (\Exception $e) {
                    $logger->error('Graph API Error: ' . $e->getMessage());
                    $modalData = $this->createModal('Error', 'Failed to send your message.', 'error');
                }
            }
        } elseif ($form->isSubmitted()) {
            $modalData = $this->createModal('Form Errors', $this->getFormErrors($form), 'error');
        }

        return $this->renderResponse($form, $modalData);
    }

    /**
     * Invia un'email utilizzando Microsoft Graph API
     */
    private function sendEmailWithGraphAPI(array $data): void
    {
        $accessToken = $this->getOAuthToken();

        $emailData = [
            'message' => [
                'subject' => htmlspecialchars($data['subject'], ENT_QUOTES, 'UTF-8'),
                'body' => [
                    'contentType' => 'Text',
                    'content' => sprintf(
                        "Name: %s\nEmail: %s\nMessage:\n%s",
                        htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8'),
                        htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8'),
                        htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8')
                    ),
                ],
                'toRecipients' => [
                    ['emailAddress' => ['address' => 'info@ccp.be']], // Destinatario
                ],
            ],
            'saveToSentItems' => 'true',
        ];

        $response = $this->httpClient->request('POST', 'https://graph.microsoft.com/v1.0/users/info@ccp.be/sendMail', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ],
            'json' => $emailData,
        ]);

        if ($response->getStatusCode() !== 202) {
            throw new \Exception("Errore nell'invio dell'email: " . $response->getContent(false));
        }
    }

    /**
     * Ottieni il token OAuth2 tramite Microsoft Graph API
     */
    private function getOAuthToken(): string
    {
        $response = $this->httpClient->request('POST', sprintf(
            'https://login.microsoftonline.com/%s/oauth2/v2.0/token',
            $_ENV['OAUTH2_TENANT_ID']
        ), [
            'body' => [
                'grant_type' => 'client_credentials',
                'client_id' => $_ENV['OAUTH2_CLIENT_ID'],
                'client_secret' => $_ENV['OAUTH2_CLIENT_SECRET'],
                'scope' => 'https://graph.microsoft.com/.default',
            ],
        ]);

        $data = $response->toArray();

        if (!isset($data['access_token'])) {
            throw new \RuntimeException('Failed to retrieve OAuth2 access token.');
        }

        return $data['access_token'];
    }

    private function verifyRecaptcha(string $captchaToken, string $clientIp): bool
    {
        $recaptcha = new \ReCaptcha\ReCaptcha($_ENV['GOOGLE_RECAPTCHA_SECRET_KEY']);
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

    #[Route('/privacy', name: 'app_privacy')]
    public function privacy(): Response
    {
        $email = 'info@ccp.be';
        return $this->render('home/privacy.html.twig', [
            'email' => $email,
        ]);
    }

    #[Route('/terms', name: 'app_terms')]
    public function terms(): Response
    {
        $email = 'info@ccp.be'; 
        return $this->render('home/terms.html.twig', [
            'email' => $email,
        ]);
    }
}
