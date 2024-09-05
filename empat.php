<?php

use function PHPSTORM_META\type;

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        return array(
            'type' => $type,
            'name' => $this->name,
            'description' => $this->description
        );
    }
}

class Book
{
  public $ISBN;
  public $title;
  public $description;
  public $category;
  public $language;
  public $numberOfPage;
  public $author;
  public $publisher;

  public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
  {
    $this->ISBN = $ISBN;
    $this->title = $title;
    $this->description = $description;
    $this->category = $category;
    $this->language = $language;
    $this->numberOfPage = $numberOfPage;
    $this->author = $author;
    $this->publisher = $publisher;
  }

  public function showAll()
  {
    return array (
        'ISBN' => $this->ISBN,
        'title' => $this->title,
        'description' => $this->description,
        'category' => $this->category,
        'language' => $this->language,
        'numberOfPage' => $this->numberOfPage,
        'author' => $this->author,
        'publisher' => $this->publisher,
    );
  }
  public function detail($ISBN)
  {
    if($this->ISBN == $ISBN){
        return $this->showAll();
    }
    else{
        return array();
    }
  }
}
    
    class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) 
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
}
 
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