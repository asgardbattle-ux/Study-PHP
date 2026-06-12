<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loops</title>
</head>

<body>
    <?php
    $index = 6;

    // // WHILE LOOP
    while ($index <= 5) {
        // echo $index . "<br />";
        echo "$index <br />";
        $index++;
    }

    // DO WHILE LOOPS
    // Desc: first, execute loop body, then check the condition  
    do {
        // echo $index . "<br />";
        echo "$index <br />";
        $index++;
    } while ($index <= 5)

    ?>
</body>

</html>