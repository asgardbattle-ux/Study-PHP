<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional IF Statements - 2</title>
</head>

<body>
    <?php
    /* Sample 1 - with 2 numbers
    function getMax(int $num1, int $num2,)
    {
        if ($num1 > $num2) {
            return $num1;
        } else {
            return $num2;
        }
    }

    echo getMax(6, 6) . "<br />";
    echo getMax(300, 6) . "<br />";
    echo getMax(700, 1250) . "<br />";
    */

    /* Sample 2 - with 3 numbers */
    function getMax(int $num1, int $num2, int $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }

    echo getMax(6, 6, 17) . "<br />";
    echo getMax(300, 6, 17) . "<br />";
    echo getMax(700, 1250, 17) . "<br />";
    ?>
</body>

</html>