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
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mery"
    ]
    ?>

    <ul>
        <!-- Main syntax-->
        <?php foreach ($books as $book) {
            echo "<li>{$book}™️</li>";
        }
        // when adding a symbol PHP doesn't like while rendering, we could wrap the variable in {} - saying to PHP render this
        ?>

        <!-- Shorthand syntax-->
        <?php foreach ($books as $book) : ?>
            <!-- <li><?php echo $book ?></li> // main echo syntax -->
            <li><?= $book ?></li> <!-- shorthand echo syntax -->
        <?php endforeach ?>
    </ul>

</body>

</html>