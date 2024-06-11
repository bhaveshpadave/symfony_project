<?php

namespace App\Controller;

use App\Repository\BooksRepository;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Models\Books;

#[Route('/api/books')]
class BooksApiController extends AbstractController {
    
    #[Route('', methods: ['GET'])]
    public function getBooks(BooksRepository $repository) : Response {
        $books = $repository->getAllBooks();
        $numberOfBooks = count($books);
        return $this->json($books);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function getBook(int $id, BooksRepository $repository) : Response {

        $book = $repository->getBookById($id); 

        return $this->json($book);
    }

    #[Route('/random', methods: ['GET'])]
    public function getRandomBook(BooksRepository $repository) : Response {

        $book = $repository->getRandomBook(); 

        return $this->json($book);
    }



}