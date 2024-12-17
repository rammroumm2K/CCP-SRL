<?php
namespace App\Mailer;

use GuzzleHttp\Client;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class MicrosoftOAuthProvider
{
    private string $clientId;
    private string $clientSecret;
    private string $tenantId;

    public function __construct(string $clientId, string $clientSecret, string $tenantId)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->tenantId = $tenantId;
    }

    /**
     * Crea un'istanza di Mailer con autenticazione OAuth2.
     */
    public function createMailer(): Mailer
    {
        // Ottieni il token OAuth2
        $accessToken = $this->getAccessToken();

        // Configura il DSN SMTP con OAuth2
        $dsn = sprintf(
            'smtp://%s:%s@smtp.office365.com:587?auth_mode=xoauth2',
            urlencode($_ENV['MAILER_FROM']), // Email di invio
            urlencode($accessToken)         // Token di accesso
        );

        $transport = Transport::fromDsn($dsn);
        return new Mailer($transport);
    }

    /**
     * Ottieni il token OAuth2 tramite client Guzzle.
     */
    private function getAccessToken(): string
    {
        $tokenUrl = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";
        $client = new Client();

        $response = $client->post($tokenUrl, [
            'form_params' => [
                'grant_type'    => 'client_credentials',
                'client_id'     => $this->clientId,
                'client_secret' => $this->clientSecret,
                'scope'         => 'https://outlook.office365.com/.default',
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        if (!isset($data['access_token'])) {
            throw new \RuntimeException('Unable to retrieve access token from Azure.');
        }

        return $data['access_token'];
    }
}
