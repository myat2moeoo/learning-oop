<?php
    require_once 'classes/admin.php';

    $admin = new Admin("Librarian");
    $book1 = $admin->addBook("Brave New World", "Aldous Huxley");
    $book2 = $admin->addBook("The Frozen River", "Ariel Lawhon");

    $user = new User("Eric");

    echo $user->borrow($book1) . "<br>";
    echo $user->borrow($book2) . "<br>";
    echo $user->returnBook($book2) . "<br>";
?>
