<?php
class Book {
    public $title;
    public $author;
    private $isAvailable = true;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function borrowBook() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return "You borrowed '{$this->title}'";
        } else {
            return "Sorry, '{$this->title}' is not available.";
        }
    }

    public function returnBook() {
        $this->isAvailable = true;
        return "You returned '{$this->title}'";
    }
}
