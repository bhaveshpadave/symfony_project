<?php
// src/Controller/FirstController.php
namespace App\Controller;

use App\Repository\BooksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route('/firstcontroller')]
    public function controller(BooksRepository $repo): Response {

        $allBooks = $repo->getAllBooks();
        $numberOfBooks = count($allBooks);
        $book = $allBooks[array_rand($allBooks)];


        return $this->render('first/first.html.twig', [
            'numberOfBooks' => $numberOfBooks,
            'book' => $book,
        ]);

    }
}