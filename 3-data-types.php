<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>

<body>
    <?
    // String
    $phrase = "To be or not to be";

    // Integer
    $age = 30;

    // Decimal number ( a.k.a floating point numbers, floats, etc. )
    $gpa = 123.456;

    // Boolean ( true OR flase )
    $isMale = true;

    // Null - no value
    /*
    * The null type is PHP's unit type, i.e. it has only one value: null
    * Undefined, and unset() variables will resolve to the value null.
    */
    $someVariable = null;

    echo "String <br/>";
    echo "$phrase <br/>";
    echo "$age <br/>";
    echo "$gpa <br/>";
    echo "$isMale <br/>";
    echo "$someVariable <br/>";
    echo "<hr>";

    # var_dump returns the data type and the value of a variable
    echo "<h3>var_dump</h3>";
    var_dump(5);
    echo "<br>";
    var_dump("John");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";

    /** SUPPORTED DATA TYPES
     * string (text values)
     * int (whole numbers)
     * float (decimal numbers)
     * bool (true or false)
     * array (multiple values)
     * object (stores data as objects)
     * null (empty variable, no assign value)
     * ** If a variable is created without a value, it is automatically assigned a value of NULL;
     * ** Variables can also be emptied by setting the value to NULL.
     * resource (references external resources)
     * mixed (any value)
     */
    ?>
</body>

</html>