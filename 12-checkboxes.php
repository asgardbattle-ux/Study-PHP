<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>

<body>
    <form action="./12-checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br />
        Oranges<input type="checkbox" name="fruits[]" value="oranges"><br />
        Pairs: <input type="checkbox" name="fruits[]" value="pairs"><br />
        <input type="submit">

        <!-- "name" of the checkbox is used for the checkoxes to be related to each other. When we put sqare brackets next to the name ( e.g. name="fruits[]" ), we're telling it is capable of storing multiple checkbox choices into an array  -->
    </form>

    <?php
    $fruits = $_POST["fruits"];
    var_dump($fruits); // print array, when checkboxes were clicked. If no checkbox selected: Warning: Undefined array key "fruits" in C:\Users\asgar\www\12-checkboxes.php on line 21
NULL
    ?>
</body>

</html>