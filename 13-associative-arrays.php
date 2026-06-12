<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>

    <form action="./13-associative-arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
    $grades = array("Jim" => "6", "Pam" => "4", "John" => "5");
    echo $grades["John"];
    echo "<br />";
    /*
    In associative array we are accessing values by their key names
    */

    // Modify ass array element
    $grades["John"] = "6";
    var_dump($grades["John"]);
    echo "<br />";
    echo count($grades);
    echo "<br />";

    // access user input info
    // - print a student grade, based on it's name as an input
    echo $grades[$_POST["student"]];
    ?>
</body>

</html>