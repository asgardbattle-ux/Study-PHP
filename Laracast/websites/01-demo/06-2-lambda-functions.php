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

    // As filterByAuthor kind of locks us to use the function exactly for filtering by author. If another filter is required, e.g. by year, we would copy the function, name it filterByYear, substitute here and there variable names and voilda. BUT, that is a lot of unnecessary code. That is why, we are creating 1 'main' function

    function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredBooks = filter(
        $books,
        /* anonymous(lambda) function */
        function ($book) {
            return $book['releaseYear'] >= 2000;
        }
    ); /* (array, key, value of the key) */;
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