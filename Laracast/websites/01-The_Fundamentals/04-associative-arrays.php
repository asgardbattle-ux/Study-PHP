<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    // $books = [
    //     "Do Androids Dream of Electric Sheep",
    //     "The Langoliers",
    //     "Hail Mery"
    // ]
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Porject Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>

    <p>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>" target="_blank">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </p>

</body>

</html>