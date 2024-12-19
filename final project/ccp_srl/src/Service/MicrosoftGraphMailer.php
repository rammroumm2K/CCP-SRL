<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class MicrosoftGraphMailer
{
    private HttpClientInterface $httpClient;
    private string $tenantId;
    private string $clientId;
    private string $clientSecret;
    private string $scope;

    public function __construct(HttpClientInterface $httpClient, string $tenantId, string $clientId, string $clientSecret, string $scope)
    {
        $this->httpClient = $httpClient;
        $this->tenantId = $tenantId;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->scope = $scope;
    }

    public function getAccessToken(): string
    {
        $url = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";

        $response = $this->httpClient->request('POST', $url, [
            'body' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'scope' => $this->scope,
            ],
        ]);

        $data = $response->toArray();
        return $data['access_token'] ?? throw new \Exception('Impossibile ottenere il token di accesso.');
    }

    public function sendEmail(string $from, string $to, string $subject, string $body): void
    {
        $accessToken = $this->getAccessToken();

        $emailData = [
            'message' => [
                'subject' => $subject,
                'body' => [
                    'contentType' => 'Text',
                    'content' => $body,
                ],
                'toRecipients' => [
                    ['emailAddress' => ['address' => $to]],
                ],
            ],
            'saveToSentItems' => 'true',
        ];

        $url = "https://graph.microsoft.com/v1.0/users/$from/sendMail";

        $response = $this->httpClient->request('POST', $url, [
            'headers' => [
                'Authorization' => "Bearer $accessToken",
                'Content-Type' => 'application/json',
            ],
            'json' => $emailData,
        ]);

        if ($response->getStatusCode() !== 202) {
            throw new \Exception("Errore nell'invio dell'email: " . $response->getContent(false));
        }
    }
}
