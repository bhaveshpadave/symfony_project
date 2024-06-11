<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BooksRepository;

class BooksController extends AbstractController{

    #[Route(path:'/books/{id<\d+>}', name:'app-first')]
    public function showBook(int $id, BooksRepository $repository) : Response {

        $book = $repository->getBookById($id);

        if(!$book) {
            throw $this->createNotFoundException(sprintf('No book found for id %s', $id));
        }
        
        return $this->render('books/show.html.twig', [
            'book' => $book,
        ]);

        //return new Response(sprintf('Hello %s', $id));

        //return $this->render('books/show.html.twig', [
        //    'id' => $id,
        //]);

        //return $this->render('books/show.html.twig', [
        //    'id' => $id,
        //]);

        //return $this->render('books/show.html.twig', [
        //    'id' => $id,
        //]);

        //return $this->render('books/show.html.twig', [
        //    'id' => $id,
        //]);

        //return $this->render('books/show.html.twig', [
        //    'id' => $id,

    }

}