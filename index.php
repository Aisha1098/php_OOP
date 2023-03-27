<?php


//Suppose you are building a web application for a library system. You need to create a Book class that represents a book in the library. Each Book object should have the following properties:    

class Book{
// ISBN (a unique identifier for the book)
    public $isbn;
// Title
    public $title;
// Author
    public $author;
// Publication Date
    public $publicationDate;
// Publisher
    public $publisher;
// Number of Pages
    public $noOfPages;
// Genre
    public $genre;
// Availability (whether the book is available for borrowing or not)
    public $available=true;

    public function __construct($isbn, $title, $author, $publicationDate, $publisher, $noOfPages, $genre){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->publicationDate = $publicationDate;
        $this->publisher = $publisher;
        $this->noOfPages = $noOfPages;
        $this->genre = $genre;
    }

    public function isbn(){
        return $this->isbn;
    }

    public function title(){
        return $this->title();
    }

    public function author(){
        return $this->author;
    }

    public function publicationDate(){
        return $this->publicationDate();
    }

    public function publisher(){
        return $this->publisher;
    }

    public function noOfPages(){
        return $this->noOfPages;
    }

    public function genre(){
        return $this->genre;
    }
    
    public function isAvailable(){
        return $this->available;
    }

}

// You also need to create a Library class that represents the library. The Library class should have the following functionalities:
class Library{
    public $books = [];
// Add a book to the library.
public function add($isbn, $title, $author, $publicationDate, $publisher, $noOfPages, $genre){
    $this->books[] = new Book($isbn, $title, $author, $publicationDate, $publisher, $noOfPages, $genre);
}

// Search for a book by title, author, genre, or ISBN.
public function search($key){
    foreach( $this->books as $idx){
        foreach($idx as $property => $value){
            if($value === $key){
                return key($this->books);
            }
        }
    }
    return false;
}

// Remove a book from the library.
public function remove($key){
    $found = search($key);
    if(array_key_exists($found, $this->books[]))
}



// Borrow a book (change its availability to "not available").
public function borrow(){

}
// Return a book (change its availability to "available").
public function return(){

}
// Get a list of all books in the library.
public function listBooks(){

}
// Get a list of all available books in the library.
public function listAvailable(){

}
// Get a list of all books borrowed by a specific user.
public function borrowed(){

}

}

$lib = new Library();
$lib->add(123, 'Tilte', 'Somebody', 65-9-2000, 'Nobody', 98, 'Thriller');
$lib->add(1234, 'Tilte', 'Somebody', 65-9-2000, 'Nobody', 98, 'Thriller');
//var_dump($lib);
var_dump($lib->search(123));