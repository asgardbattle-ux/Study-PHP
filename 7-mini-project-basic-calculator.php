<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-P: Basic calculator</title>
</head>

<body>
    <form action="./7-mini-project-basic-calculator.php" method="get">
        <input type="number" id="num1" name="num1"></input>
        <br />
        <input type="number" id="num2" name="num2"></input>
        <br />
        <input type="submit">
        <br /><br />
        
        Answer: <?php 
        echo $_GET["num1"] + $_GET["num2"];
        /* WITH VARIABLES
        $number1 = $_GET["num1"];
        $number2 = $_GET["num2"];
        $result = $number1 + $number2;
        echo $result;
        */
        ?>
    </form>
</body>

</html>