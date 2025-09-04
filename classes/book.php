<?php
class Book
{
    public $title;
    public $author;
    private $isAvailable = true;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    public function borrowBook()
    {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true;
        } else {
            return false;
        }
    }
    public function returnBook()
    {
        $this->isAvailable = true;
    }
    public function isAvailable(){
        return $this->isAvailable;
    }
}
