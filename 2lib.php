<?php

class Author {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Book {
    private $title;
    private $author;
    private $isAvailable;

    public function __construct($title, Author $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author->getName();
    }

    public function isAvailable() {
        return $this->isAvailable;
    }

    public function borrow() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true; // Book is successfully borrowed
        } else {
            return false; // Book is not available
        }
    }

    public function returnBook() {
        $this->isAvailable = true;
    }
}

class FictionBook extends Book {
    private $genre;

    public function __construct($title, Author $author, $genre) {
        parent::__construct($title, $author);
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }
}

class NonFictionBook extends Book {
    private $subject;

    public function __construct($title, Author $author, $subject) {
        parent::__construct($title, $author);
        $this->subject = $subject;
    }

    public function getSubject() {
        return $this->subject;
    }
}

class User {
    private $name;
    private $borrowedBooks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        if ($book->borrow()) {
            $this->borrowedBooks[] = $book;
            return true; // Book successfully borrowed
        } else {
            return false; // Book not available
        }
    }

    public function returnBook(Book $book) {
        $book->returnBook();
        $key = array_search($book, $this->borrowedBooks);
        if ($key !== false) {
            unset($this->borrowedBooks[$key]);
        }
    }

    public function getBorrowedBooks() {
        return $this->borrowedBooks;
    }
}

// Example usage:

$author1 = new Author("John Doe");

$fictionBook = new FictionBook("The Adventure", $author1, "Adventure");
$nonFictionBook = new NonFictionBook("History of Science", $author1, "Science");

$user = new User("Alice");

$user->borrowBook($fictionBook);
$user->borrowBook($nonFictionBook);

echo "Books borrowed by " . $user->getName() . ":\n";
foreach ($user->getBorrowedBooks() as $borrowedBook) {
    echo "- " . $borrowedBook->getTitle() . "\n";
}

// Assume the user returns one of the books
$user->returnBook($fictionBook);

echo "\nAfter returning a book:\n";
foreach ($user->getBorrowedBooks() as $borrowedBook) {
    echo "- " . $borrowedBook->getTitle() . "\n";
}
