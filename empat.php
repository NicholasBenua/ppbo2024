<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author('Miguel de Cervantes', 'Miguel de Cervantes Saavedra is a Spanish novelist, poet and dramatic. 
His name is best known through his novel Don Quixote de la Mancha, which is considered by many to be the first modern novel,
one of the greatest works in Western Literature, and the largest in Spanish.');
$book = new Book(727272, 'Don Quixote', 'blablabla', 'Novel', 'English', 10000, $author->name, 'MnC');
$publisher = new Publisher('Miguel de Cervantes', 'Madrin, Spain', '12345678');
echo "Author\n";
print_r($author->show('Author Bio'));
echo "\n";
echo "Book Details\n";
print_r($book->showAll());
print_r($book->detail(1234567));
echo "\n";
echo "Publisher Contact\n";
print_r($publisher->getPhone());