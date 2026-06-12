<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="./18-calculator.php" method="post">
        First number: <input type="number" step="0.1" name="num1"><br />
        Operator: <input type="text" name="op"><br />
        Second number: <input type="number" step="0.1" name="num2"><br />
        <!--
        step="0.1" - defines the input to accept decimals
        -->
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["op"];

    if ($operator === "+") {
        echo $num1 + $num2;
    } elseif ($operator === "-") {
        echo $num1 - $num2;
    } elseif ($operator === "*") {
        echo $num1 * $num2;
    } elseif ($operator === "/") {
        echo $num1 / $num2;
    } else {
        echo "Invalid operator written ;)";
    }
    ?>
</body>

</html>