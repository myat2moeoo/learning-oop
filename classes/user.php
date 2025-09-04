<?php
require_once "Book.php";

class User {
    public $name;
    private $borrowedBooks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrow(Book $book) {
        if($book->isAvailable()){
            $book->borrowBook();
            $this->borrowedBooks[] = $book;
            return "You borrowed '{$book->title}'";
        }else{
            return "Sorry, '{$book->title}' is not available";
        }
    }

    public function returnBook(Book $book) {
        $book->returnBook();

        foreach($this->borrowedBooks as $index => $b){
            if($b === $book){
                unset($this->borrowedBooks[$index]);
            }
        }
        $this->borrowedBooks = array_values($this->borrowedBooks);

        return "You returned '{$book->title}'";
    }
    public function listBorrowed(){
        if (empty($this->borrowedBooks)){
            echo "No borrowed books.<br>";
            return;
        }
        foreach($this->borrowedBooks as $b){
            echo $b->title . " by " . $b->author . "<br>";
        }
    }
}
