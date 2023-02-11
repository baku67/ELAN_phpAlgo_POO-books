<?php 

    require "Book.php";
    require "Author.php";

    $author1 = new Author("Guénolé", "De Montaigu");
    $book1 = new Book("The Birth of Constantinople", 210, 330, 80, "Seashells", $author1);
    $book2 = new Book("The Fall of Constantinople", 55, 1965, 125, "Gold", $author1);


    $author1->addBookToList($book1);
    // echo $author1->afficherBibliographie();
    // echo "<br><br><br>";


    echo $author1;
    echo "<br>";
    echo $book1;



?>