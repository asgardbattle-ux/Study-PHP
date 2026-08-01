<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>

<body>
    <?php

    /** NUMBER TYPES
     * Integer
     * Float
     * Numeric Strings
     * In addition, PHP has two more data types used for numbers:
     * ** Infinity
     * ** NaN
     */
    $num = 10;
    $num++; // + 1 = 11 ( increment )
    $num--; // -1 = 10

    echo 3.14 . "<br>";
    echo 5 + 8.33 . "<br>";
    echo 10 / 3 . "<br>";
    echo $num % 3 . "<br>";
    echo 4 + 5 * $num . "<br>"; // 54
    echo (4 + 5) * $num . "<br>"; // 90
    echo min(array(1.25, 2, 3)) . "<br>";

    // Math SHORTHAND syntax
    $num += 25; // add 25
    $num -= 25; // subtract 25
    $num *= 10; // multiply by 10
    $num /= 10; // divide by 10

    /** NUMBER FUNCTIONS
     * is_int() - checks if the type of a variable is integer. An integer is a number without any decimal part: 2, 256, -256, 10358, -179567 are all integers.
     * ** PREDEFINED CONSTANTS FOR INTEGERS
     * **** PHP_INT_MAX - The largest integer supported
     * **** PHP_INT_MIN - The smallest integer supported
     * **** PHP_INT_SIZE -  The size of an integer in bytes
     * ----------------------
     * is_float() - checks if the type of a variable is float. A float is a number with a decimal point or a number in exponential form: 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
     * ** PREDEFINED CONSTANTS FOR INTEGERS
     * ** PHP_FLOAT_MAX - The largest representable floating point number
     * ** PHP_FLOAT_MIN - The smallest representable positive floating point number
     * ** PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
     * ** PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
     * ----------------------
     * is_finite() | bool - checks whether a value is finite or not. A value is finite if it is within the allowed range for a PHP float on this platform
     * is_infinite() | bool - checks whether a value is infinite or not. A value is infinite if it is outside the allowed range for a PHP float on this platform
     * ----------------------
     * is_nan() | bool - is used to check if a value is "Not A Number" (NAN)
     * ----------------------
     * is_numeric() | bool - used to check whether a variable is a number or a numeric string. This function returns true if the variable is a number or a numeric string, false otherwise.
     * ** var_dump(is_numeric(5985)); | bool(true)
     * ** var_dump(is_numeric("5985")); | bool(true)
     * ** var_dump(is_numeric("59.85" + 100)); | bool(true)
     * ** var_dump(is_numeric("Hello World"); | bool(false)
     * ----------------------
     * intval() | int - used to get the integer value of a variable
     * ** echo intval(23456.78); | 23456
     * ** echo intval("23456.78"); | 23456
     * ----------------------
     * abs(num) - returns absolute value of a number;
     * pow(2, 5); - 2 raise to power of 5;
     * sqrt(144); - square root of a number;
     * max(1, 3); - returns max value;
     * min(1, 3); - returns min value;
     ** min, max - (num, num) | (num, nums(arr)) | (nums(arr));
     * round(num); - return rounded by rules number;
     * ceil(num) - returns round to nearest highets integer number;
     * floor(num) - returns round to nearest lower integer number.
     */

    ?>
</body>

</html>