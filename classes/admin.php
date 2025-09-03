<?php
require_once "User.php";

class Admin extends User {
    public function addBook($title, $author) {
        return new Book($title, $author);
    }
}
