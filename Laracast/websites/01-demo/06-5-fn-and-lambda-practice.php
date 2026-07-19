<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice ;)</title>
    <style>
        #solution-1 {
            display: none;
        }

        #solution-2 {
            display: none;
        }

        #solution-3 {
            display: inline;
        }
    </style>
</head>

<body>
    <div id="solution-1">
        <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com',
                'category' => 'fantasy'
            ],
            [
                'name' => 'Porject Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com',
                'category' => 'crime'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com',
                'category' => 'mistery'
            ]
        ];

        function getBooksByAuthor(array $arrBooks, string $author)
        {
            $resultBooks = [];

            foreach ($arrBooks as $bookInfo) {
                if ($bookInfo['author'] === $author) {
                    array_push($resultBooks, $bookInfo);
                }
            }

            return $resultBooks;
        }

        function getBooksAfterYear(array $arrBooks, string $year)
        {
            $resultBooks = [];

            foreach ($arrBooks as $bookInfo) {
                if ($bookInfo['releaseYear'] > $year) {
                    array_push($resultBooks, $bookInfo);
                }
            }

            return $resultBooks;
        }

        function getBooksByCategory(array $arrBooks, string $category)
        {
            $resultBooks = [];

            foreach ($arrBooks as $bookInfo) {
                if ($bookInfo['category'] === $category) {
                    array_push($resultBooks, $bookInfo);
                }
            }

            return $resultBooks;
        }

        ?>
        <h1>Below is the result:</h1>
        <div>
            <ul>
                <?php foreach (getBooksByAuthor($books, 'Andy Weir') as $bookInfo) : ?>
                    <li>Book name is: "<?= $bookInfo['name'] ?>"</li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <p>Books in the list, released after 1969:</p>
            <ul>
                <?php foreach (getBooksAfterYear($books, '1969') as $bookInfo) : ?>
                    <li>Book name: <?= $bookInfo['name'] ?>, Author: <?= $bookInfo['author'] ?>, Release year: <?= $bookInfo['releaseYear'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <p>Books with 'mistery' in their soul:</p>
            <ul>
                <?php foreach (getBooksByCategory($books, 'mistery') as $bookInfo) : ?>
                    <li>Book "<strong><?= $bookInfo['name'] ?></strong>", by <?= $bookInfo['author'] ?>, released in <?= $bookInfo['releaseYear'] ?> year!</li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div id="solution-2">
        <?php
        function filterItems($items, $fn)
        {
            $resultArr = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    array_push($resultArr, $item);
                }
            }

            return $resultArr;
        }

        $resultItems = filterItems(
            $books,
            function ($array) {
                return $array['author'] === 'Andy Weir' && $array['releaseYear'] >= 2001;
            }
        );
        ?>

        <h1>Filtering result :):</h1>
        <ul>
            <?php foreach ($resultItems as $book) : ?>
                <li>Book: <?= $book['name'] ?>, written by: <?= $book['author'] ?>, released in: <?= $book['releaseYear'] ?></li>
            <?php endforeach; ?>
        </ul>

    </div>

    <div id="solution-3">
        <?php

        $resultItems = array_filter($books, function ($array) {
            return $array['author'] === 'Andy Weir' && $array['releaseYear'] >= 2001;
        });
        ?>

        <h1>Filtering result :):</h1>
        <ul>
            <?php foreach ($resultItems as $book) : ?>
                <li>Book: <?= $book['name'] ?>, written by: <?= $book['author'] ?>, released in: <?= $book['releaseYear'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>