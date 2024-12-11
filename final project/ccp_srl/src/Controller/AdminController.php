<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_page')]
    public function index(UserRepository $userRepository): Response
    {
        // Recupera l'ID dell'utente loggato
        $admin = $this->getUser(); // Presuppone che tu abbia configurato il sistema di autenticazione

        // Verifica se l'utente è loggato
        if (!$admin) {
            throw $this->createAccessDeniedException('You must be logged in to access this page.');
        }

        // Recupera il nome dal repository (opzionale, se non usi direttamente l'oggetto User)
        $adminName = $admin->getName(); // Usa il metodo getName() direttamente dall'oggetto User

        return $this->render('admin/index.html.twig', [
            'admin_name' => $adminName,
        ]);
    }
}
