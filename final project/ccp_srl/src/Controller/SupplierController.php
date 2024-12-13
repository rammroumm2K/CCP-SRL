<?php

namespace App\Controller;

use App\Entity\Supplier;
use App\Entity\Tag;
use App\Form\SupplierType;
use App\Repository\SupplierRepository;
use App\Repository\TagRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/supplier')]
final class SupplierController extends AbstractController
{
    #[Route(name: 'app_supplier_index', methods: ['GET'])]
    public function index(SupplierRepository $supplierRepository): Response
    {
        $admin = $this->getUser();

        if (!$admin) {
            throw $this->createAccessDeniedException('You must be logged in to access this page.');
        }

        return $this->render('supplier/index.html.twig', [
            'suppliers' => $supplierRepository->findAll(),
            'admin_name' => $admin->getName(),
        ]);
    }

    #[Route('/new', name: 'app_supplier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, TagRepository $tagRepository): Response
    {
        $supplier = new Supplier();
        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tags = $request->request->all('tags'); // Recupera i tag selezionati
            foreach ($tags as $tagId) {
                $tag = $tagRepository->find($tagId);
                if ($tag) {
                    $supplier->addTag($tag); // Associa i tag al fornitore
                }
            }

            $entityManager->persist($supplier);
            $entityManager->flush();

            return $this->redirectToRoute('app_supplier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('supplier/new.html.twig', [
            'supplier' => $supplier,
            'form' => $form->createView(),
            'tags' => $tagRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_supplier_show', methods: ['GET'])]
    public function show(Supplier $supplier): Response
    {
        return $this->render('supplier/show.html.twig', [
            'supplier' => $supplier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_supplier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Supplier $supplier, EntityManagerInterface $entityManager, TagRepository $tagRepository): Response
    {
        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tags = $request->request->all('tags'); // Recupera i tag selezionati
            $supplier->getTags()->clear(); // Rimuovi tutti i tag esistenti
            foreach ($tags as $tagId) {
                $tag = $tagRepository->find($tagId);
                if ($tag) {
                    $supplier->addTag($tag); // Associa i nuovi tag selezionati
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_supplier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('supplier/edit.html.twig', [
            'supplier' => $supplier,
            'form' => $form->createView(),
            'tags' => $tagRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_supplier_delete', methods: ['POST'])]
    public function delete(Request $request, Supplier $supplier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $supplier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($supplier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_supplier_index', [], Response::HTTP_SEE_OTHER);
    }
}
