<?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Porject Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ]
];

// Anonymous functions
// - could be assigned to a variable;
// - could be passed to another function.

// As filterByAuthor kind of locks us to use the function exactly for filtering by author. If another filter is required, e.g. by year, we would copy the function, name it filterByYear, substitute here and there variable names and voilda. BUT, that is a lot of unnecessary code. That is why, we are creating 1 'main' function

// COMPARE WITH "06-3-lambda-functions.php" to check what we are substuting with array_filter() below
// array_filter() does the job we were described in "06-3-lambda-functions.php", lines 39-50

$filteredBooks = array_filter(
    $books,
    /* anonymous(lambda) function */
    function ($book) {
        return $book['releaseYear'] >= 2000;
    }
);

require "index.view.php"; // require serves as load the view