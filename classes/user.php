<?php
require_once "Book.php";

class User {
    public $name;
    private $borrowedBooks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrow(Book $book) {
        $message = $book->borrowBook();
        if (strpos($message, "borrowed") !== false) {
            $this->borrowedBooks[] = $book;
        }
        return $message;
    }

    public function returnBook(Book $book) {
        $message = $book->returnBook();
        foreach ($this->borrowedBooks as $index => $b) {
            if ($b === $book) {
                unset($this->borrowedBooks[$index]);
            }
        }
        return $message;
    }
}
