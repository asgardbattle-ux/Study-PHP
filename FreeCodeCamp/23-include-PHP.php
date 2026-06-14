<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include PHP</title>
</head>

<body>
    <?php
    /* For work with article-header.php file
    $title = "My First Post";
    $author = "TS";
    $wordCount = 355;
    include "./24-article-header.php";
     */

    /* Using with 25-include-PHP-useful-tools.php */
    include "./25-include-PHP-useful-tools.php";
    echo $feetInMile;
    echo "<br>";
    sayHi("TS");
    ?>
</body>

</html>