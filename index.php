<?php 

    require "Book.php";
    require "Author.php";

    echo "<link rel='stylesheet' href='style.css'>";

    // Création des objets
    $author1 = new Author("Guénolé", "De Montaigu");
    $author2 = new Author("George", "Orwell");
    $book1 = new Book("The Birth of Constantinople", 210, 330, 80, "€", $author1);
    $book2 = new Book("The Fall of Constantinople", 55, 1965, 125, "€", $author1);
    $book3 = new Book("1984", 184, 1965, 1949, "Gold", $author2);

    // Affichage des objets
    echo $author1;
    echo $author2;
    echo "<br>";
    echo $book1;
    echo $book2;
    echo $book3;


    // Association Authors/Books
    $author1->addMultipleBooksToList([$book1, $book2]);
    $author2->addBookToList($book3);

    $author1->printBibliography();
    $author2->printBibliography();


    // echo $author1->afficherBibliographie();
    // echo "<br><br><br>";


?>