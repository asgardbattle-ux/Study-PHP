<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>
    <?php
    $characterName = "Tom";
    $characterAge = 28;

    echo "There once was a man named $characterName <br>";
    echo "He was $characterAge years old <br>";

    $characterName = "Mike";

    echo "He really liked the name $characterName <br>";
    echo "$characterName didn't like being $characterAge <br>";

    // VARIABLE SCOPE START
    /* GLOBAL
    A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
    */
    $x = 5; // global scope

    function myTest()
    {
        // using x inside this function will not work
        echo "Variable x inside function is: $x";
    }
    myTest();

    echo "Variable x outside function is: $x";

    /* LOCAL
    A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.

    Local variables are created when the function is called and are destroyed when the function finishes executing.
    */
    function myTest2()
    {
        $x = 5; // local scope
        echo "Variable x inside function is: $x";
    }
    myTest2();

    // using x outside the function will not work
    echo "Variable x outside function is: $x";

    /* STATIC
    Normally, when a function finishes executing, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To achieve this, use the static keyword when you first declare the variable.

    Then, each time the function is called, that variable will have the value from the last time the function was called.

    Note: The variable is still local to the function.
    */
    function myTest3()
    {
        static $x = 0; // static scope
        echo $x;
        $x++;
    }

    myTest3(); // 0
    myTest3(); // 1
    myTest3(); // 2

    /* PHP global Keyword
    The global keyword is used to access a global variable from within a function.

    To do this, use the global keyword before the variables (inside the function).
    */
    $x = 5;
    $y = 10;

    function myTest4()
    {
        global $x, $y;
        $y = $x + $y;
    }

    myTest4();
    echo $y; // outputs 15

    /* PHP $GLOBALS Superglobals
    PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

    The example above can be rewritten like this.
    */
    $x = 5;
    $y = 10;

    function myTest5()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest5();
    echo $y; // outputs 15
    
    // VARIABLE SCOPE END
    ?>
</body>

</html>