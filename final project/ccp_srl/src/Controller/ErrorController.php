<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function show(\Throwable $exception): Response
    {
        $statusCode = $exception instanceof HttpExceptionInterface ? $exception->getStatusCode() : 500;

        if ($statusCode === 404) {
            return $this->render('error/404.html.twig', [
                'message' => $exception->getMessage(),
            ]);
        }

        return $this->render('error/404.html.twig', [
            'statusCode' => $statusCode,
            'message' => $exception->getMessage(),
        ]);
    }
}
