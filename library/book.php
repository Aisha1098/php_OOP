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

    public $borrowedUser = 0;

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
        return $this->title;
    }

    public function author(){
        return $this->author;
    }

    public function publicationDate(){
        return $this->publicationDate;
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

    public function notAvailable(){
        $this->available = false;
    }

    public function Available(){
        $this->available = true;
    }

}

// You also need to create a Library class that represents the library. The Library class should have the following functionalities:
