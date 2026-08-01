<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return statements</title>
</head>

<body>
    <?php
    function cube($num)
    {
        return $num * $num * $num;
        echo "Hello"; // return stops the func from executing. Code below would not be reached
    }

    $cubeResult = cube(5);
    echo $cubeResult;
    ?>
</body>

</html>