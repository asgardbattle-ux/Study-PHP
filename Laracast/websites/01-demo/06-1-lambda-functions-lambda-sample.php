<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Functions</title>
</head>

<body>
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

    // LABMDA(anonymous) function
    $filterByAuthor = function (array $booksArray, string $bookAuthor) {
        $filteredBooks = [];

        foreach ($booksArray as $book) {
            if ($book['author'] === $bookAuthor) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    };

    $filteredBooks = $filterByAuthor($books, 'Philip K. Dick');
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>