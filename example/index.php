<?php

   // require_once("product.php");
    require_once("book.php");
    require_once("cd.php");


    $product = new Product(1, "Facewash", 150);
    $product->showInfo();

    $book = new Book(2,"php oop", 450, "45392135", "march 2020");
    $book->showInfo();


    $cd = new CD(3,"Enigma", 450, "12", "60");
    $cd->showInfo();






?>