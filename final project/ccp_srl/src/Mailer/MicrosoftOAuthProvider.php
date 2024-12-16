<?php

namespace App\Mailer;

use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\Transport\Dsn;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\HttpFoundation\Response;
use League\OAuth2\Client\Provider\GenericProvider;

class MicrosoftOAuthProvider
{
    private $accessToken;

    public function __construct(string $clientId, string $clientSecret, string $tenantId)
    {
        $provider = new GenericProvider([
            'clientId'                => $clientId,
            'clientSecret'            => $clientSecret,
            'redirectUri'             => 'https://localhost/oauth/callback',
            'urlAuthorize'            => 'https://login.microsoftonline.com/'.$tenantId.'/oauth2/v2.0/authorize',
            'urlAccessToken'          => 'https://login.microsoftonline.com/'.$tenantId.'/oauth2/v2.0/token',
            'urlResourceOwnerDetails' => '',
        ]);

        $this->accessToken = $provider->getAccessToken('client_credentials', [
            'scope' => 'https://graph.microsoft.com/.default',
        ]);
    }

    public function createMailer(): MailerInterface
    {
        $dsn = sprintf(
            'smtp://%s@%s',
            $this->accessToken->getToken(),
            'smtp.office365.com'
        );

        return new EsmtpTransport(Dsn::fromString($dsn));
    }
}
