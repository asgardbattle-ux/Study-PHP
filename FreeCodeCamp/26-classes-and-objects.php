<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>

<body>
    <?php
    echo "Classes and object ;)<br>";
    // CLASS
    /* DESC: A class is a template for objects, and it defines the structure (properties) and behavior (methods) of an object. Specification for custom data type. For example: to represent: mobile phone, PC with its' specs, keyboard, car, etc. */
    /* DEFINE: A class is defined with the 'class' keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces. */

    class Book
    {
        /* Define series of attributes that represents a book */
        public $title;
        public $author;
        public $pages;
    }

    // OBJECT
    /* DESC: An object is an individual instance of a class. Each object inherits all the properties and methods defined in the class, but each object will have their own property values. */
    /* DEFINE: Objects of a class are created with the 'new' keyword. */

    // INSTANCEOF
    /* DESC: Use 'instanceof' keyword to check if an object belongs to a specific class */
    /* Example */
    $testBook = new Book();
    var_dump($testBook instanceof Book); // bool(true)

    $book1 = new Book; /* object - an instance of a Book */
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book; /* object - an instance of a Book */
    $book2->title = "Lord of The Rings";
    $book2->author = "Tolken";
    $book2->pages = 700;

    echo $book1->author;
    echo "<br>";
    echo $book2->author;

    ?>
</body>

</html>