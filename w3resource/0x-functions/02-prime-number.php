<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number checker ;)</title>
</head>

<body>
    <div id="own-solution">
        <?php
        // Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.
        $num = 37;
        $zeroDivisors = [];

        function primeCheck(float $input, array &$array)
        {
            $divisorsCount = 0;

            for ($i = 1; $i <= $input; $i++) {
                $result = $input % $i;

                if ($result === 0) {
                    $divisorsCount++;
                    $array[] = $i;
                }

                // echo "$input % $i = $result <br/>";
            }

            if ($divisorsCount === 2) {
                return true;
            } else {
                return false;
            }
        };

        $check = primeCheck($num, $zeroDivisors);

        if ($check) {
            echo "$num is PRIME<br/>";
            echo 'Divisors by zero list: ';
            var_dump($zeroDivisors);
        } else {
            echo "$num is NOT PRIME <br/>";
            echo 'Divisors by zero list: ';
            var_dump($zeroDivisors);
        }
        ?>
    </div>

    <div id="school-solution">
        <?php
        // Function to check if a number is prime
        function IsPrime($n)
        {
            // Loop through all numbers from 2 to n-1
            for ($x = 2; $x < $n; $x++) {
                // If n is divisible by any number other than 1 and itself,
                // it's not prime, so return 0
                if ($n % $x == 0) {
                    return 0;
                }
            }
            // If no divisor found, n is prime, so return 1
            return 1;
        }

        // Call the IsPrime function to check if 3 is prime
        $a = IsPrime(37);

        // Check the return value and print the result
        if ($a == 0)
            echo 'This is not a Prime Number.....' . "\n";
        else
            echo 'This is a Prime Number..' . "\n";
        ?>

    </div>
</body>

</html>