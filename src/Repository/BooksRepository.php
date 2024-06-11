<?php

namespace App\Repository;

use App\Models\Books;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BooksRepository {

    public function __construct() {
    }
    public function getAllBooks() : array {
        return [
            new Books (1,'Wings of fire'),
            new Books (2,'Atomic habbits'),
            new Books (3,'The shoedog'),
        ];
    }

    public function getBookById(int $bookId) : ?Books {

        $books = $this->getAllBooks();
        foreach ($books as $book) {

            if( $book->getId() === $bookId ) {
                return $book;
            }
        }
        return null;
    }

    public function getRandomBook() : Books {

        $allBooks = $this->getAllBooks();
        
        return $allBooks[array_rand($allBooks)];
    }
}