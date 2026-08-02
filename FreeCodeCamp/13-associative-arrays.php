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
    /* In associative array we are accessing values by their key names */

    // Arrays into array
    $grades = ["Jim" => "6", "Pam" => "4", "John" => "5"];
    $grades2 = [
        ["Jim" => "6"],
        ["Pam" => "4"],
        ["John" => "5"]
    ];
    var_dump($grades); // array(3) { ["Jim"]=> string(1) "6" ["Pam"]=> string(1) "4" ["John"]=> string(1) "5" }
    echo '<br/>';
    var_dump($grades2[1]['Pam']); // string(1) "4"

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