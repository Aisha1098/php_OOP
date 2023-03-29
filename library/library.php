<?php
require ('user.php');
require('book.php');

class Library{
    public $books = [];
    public $users = [];

public function addBook($isbn, $title, $author, $publicationDate, $publisher, $noOfPages, $genre){
    $this->books[] = new Book($isbn, $title, $author, $publicationDate, $publisher, $noOfPages, $genre);
}

public function addUser($userid){
    if(! empty($this->users)){
        foreach ($this->users as $user){
            if($user->user_id() === $userid){
                return "The userid is already in use";
            }
        }
    }
    $this->users[] = new User($userid);
    return 'User is created';
}
// public static function findKey($key, $books){
//     foreach($books as $book){
//         $idx = array_search($book, $books);
//         foreach($book as $property => $value){
//             if($value === $key){
//                 return $idx;
//             }
//         }
//     }
//     return false;
// }
// Search for a book by title, author, genre, or ISBN.
public function search($key){
    $searchedBooks = [];
    foreach($this->books as $book){
        if($book->isbn() === $key){
            $searchedBooks[] = $book;
        }
        elseif($book->title() === $key){
            $searchedBooks[] = $book;
        }
        elseif($book->author() === $key){
            $searchedBooks[] = $book;
        }
        elseif($book->genre() === $key){
            $searchedBooks[] = $book;
        }
    }
    if(! empty($searchedBooks)){
        return $searchedBooks;
    }
    return 'There is no book with the same isbn, title, author or genre you searched for';
}

// Remove a book from the library.
public function remove($deleteisbn){
    foreach($this->books as $book){
        if($deleteisbn === $book->isbn()){
            unset($$this->books[$book]);
            return 'deleted';
        }
    }
    return "Book not found";
}



// Borrow a book (change its availability to "not available").
public function borrow($borrowisbn, $userid){
    foreach($this->books as $book){
        if($borrowisbn === $book->isbn() && $book->isAvailable()){
            $book->notAvailable();
            $book->borrowedUser = $userid;
            
            return 'You have borrowed the book with isbn: '.$book->isbn();
        }
        if($borrowisbn === $book->isbn() && ! $book->isAvailable()){
            return 'The book with isbn: '.$book->isbn().'is not available';
        }
    }
    return "Book with isbn: {$borrowisbn} not found";
}
// Return a book (change its availability to "available").
public function return($returnisbn){
    foreach($this->books as $book){
        if($returnisbn === $book->isbn() && ! $book->isAvailable()){
            $book-> Available();
            $book->borrowedUser = 0;
            return 'You have returned the book with isbn: '.$book->isbn();
        }
        if($returnisbn === $book->isbn() && $book->isAvailable()){
            return 'The book with isbn: '.$book->isbn().'is not borrowed';
        }
    }
    return "Book with isbn: {$returnisbn} not found";
}
// Get a list of all books in the library.
public function listBooks(){
    print_r($this->books);
}
// Get a list of all available books in the library.
public function listAvailable(){
    foreach($this->books as $book){
        if($book->isAvailable()){
            print_r($book);
        }
    }
}
// Get a list of all books borrowed by a specific user.
public function borrowed($userid){
    $list = [];
    foreach($this->books as $book){
        if($book->borrowedUser === $userid){
            $list[] = $book;
        }
    }
    if(! empty($list)){
        return $list;
    }
    return "No books borrowed";
}

}

