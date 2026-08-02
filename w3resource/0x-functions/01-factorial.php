<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial number ;)</title>
</head>

<body>
    <div id="own-solution">
        <!-- <?php
                function factCalc($num)
                {
                    $result = 1;

                    if ($num === 0) {
                        return 1; // factorial of 0 is 1
                    } else {
                        for ($i = 1; $i <= $num; $i++) {
                            $result *= $i;
                        }
                    }

                    return $result;
                }

                $factorialNumber = factCalc(4);
                ?> -->

        <!-- <p>Factorial is : <?= $factorialNumber ?></p> -->
    </div>

    <div id="school-solution">
        <?php
        function factorial_of_a_number($n)
        {
            // Base case: if n is 0, return 1 (factorial of 0 is 1)
            if ($n == 0) {
                return 1;
            } else {
                // Recursive call: calculate factorial by multiplying n with factorial of (n-1)
                echo "$n<br>";
                return $n * factorial_of_a_number($n - 1);
            }
        }

        // Call the function and print the result
        echo (factorial_of_a_number(4) . "\n");
        ?>
    </div>
</body>

</html>