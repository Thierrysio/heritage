<?php

namespace App\Controller;

use App\Entity\SimpleProductSTI;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

    #[Route('/products/create', name: 'app_products_create')]
    public function createProduct(EntityManagerInterface $em): Response
    {
        // Création d'un objet SimpleProductSTI
        $simpleProduct = new SimpleProductSTI();
        $simpleProduct->setName('Produit Simple Test');
        $simpleProduct->setPrice(100);
        $simpleProduct->setDescription('Un super produit de test');

        // Persistance et enregistrement en base de données
        $em->persist($simpleProduct);
        $em->flush();

        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
            'product' => $simpleProduct
        ]);
    }
}
