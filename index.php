<?php
require_once 'classes/Admin.php';

$admin = new Admin("Librarian");
$book1 = $admin->addBook("Brave New World", "Aldous Huxley");
$book2 = $admin->addBook("The Frozen River", "Ariel Lawhon");

$user = new User("Eric");

echo $user->borrow($book1) . "<br>";
echo $user->borrow($book2) . "<br>";

echo "<strong>Currently borrowed:</strong><br>";
$user->listBorrowed();

echo $user->returnBook($book2) . "<br>";

echo "<strong>After return:</strong><br>";
$user->listBorrowed();
