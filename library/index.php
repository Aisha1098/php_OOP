<?php
require('library.php');

$lib = new Library();

$lib->addBook(123, 'Tilte', 'Somebody', 15-4-2002, 'Nobody', 98, 'Thriller');
$lib->addBook(1234, 'Title', 'Somebody', 65-9-2000, 'Nobody', 98, 'Thriller');
echo $lib->addUser(1). "\n";
$id = 1;
echo "user id is 1 \n";
echo "Choose an option from below:\n 1 => Add a Book\n 2 => Borrow a Book\n 3 => Return a Book\n 4 => Remove a Book\n 5 => List of books available\n 6 => List of books\n 7 => Search for a book\n 8 => Add a user";
$num = (int)readline("Enter a number: ");
switch($num){
    case 1:
        $isbn = (int)readline('Enter the isbn of the book: ');
        $title = (string)readline('Enter the title of the book: ');
        $author = (string)readline('Enter the author of the book: ');
        $date = (string)readline('Enter the publication date of the book: ');
        $publisher = (string)readline('Enter the publisher of the book: ');
        $pages = (int)readline('Enter the number of pages of the book');
        $genre = (string)readline(('Enter the genre of the book'));
        $lib->addBook($isbn, $title, $author, $date, $publisher, $pages, $genre);
        break;
    case 2:
        $isbn = (int)readline('Enter the isbn number of the book to borrow');
        $userid = (int)readline('Enter user id that borrows this book: ');
        $lib->borrow($isbn, $userid);
        break;
    case 3:
        $lib->return($isbn);
        break;
    case 4:
        $lib->remove($isbn);
        break;
    case 5:
        $lib->listAvailable();
        break;
    case 6:
        $lib->listBooks();
        break;
    case 7:
        echo " 1 => by isbn\n 2 => by title\n 3 => by author \n 4 => by genre";
        $no = (int)readline('Choose from above (1-4): ');
        switch ($no){
            case 1 : 
                $lib->search((int)readline('Enter the isbn number')); break;
            case 2:
            case 3:
            case 4: $lib->search((string)readline('Enter: ')); break;
            default : echo "Please enter a number between 1 and 4"; break;
        }
        break;
    case 8:
        $id+=1;
        $lib->addUser($id);
        break;
    default:
        echo "Enter a number from the list above";
}