<?php
require_once 'classes.php';

$book1 = new Book('A volta dos que não fora', 'Diego Tesch');
$book2 = new Book('A volta dos que não fora 2', 'Diego Tesch');
$book3 = new Book('A volta dos que não fora 3', 'Diego Tesch');
$book4 = new Book('A volta dos que não fora 4', 'Diego Tesch');
$book5 = new Book('O iluminado', 'Stephen King');

$lib = new BookList();
$lib->addBook($book1);
$lib->addBook($book2);
$lib->addBook($book3);
$lib->addBook($book4);
$lib->addBook($book5);

while($lib->valid()){
  $livro = $lib->current();
  echo "Titulo: ".$livro->getTitle();
  echo "<br>Autor: ".$livro->getAuthor();
  echo "<br><br>";
  $lib->next();
}

// $lib->removeBook($book2);

// echo $lib->count();
