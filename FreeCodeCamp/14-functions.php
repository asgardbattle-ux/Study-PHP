<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <form action="./14-functions.php" method="post">
        Name: <input type="text" name="name_of_user">
        <br />
        Age: <input type="text" name="age_of_user">
        <input type="submit">
    </form>

    <?php
    // FUNCTION DECLARATION
    function sayHi(string $name, int $age) // declaring variable types in here, in order to avoid Intelliphense warning that the param has no type
    {
        echo "Hello, my name is: $name and I'm $age years old ;)<br />";
    }

    // FUNCTION INVOKE ( call the function )
    sayHi($_POST["name_of_user"], $_POST["age_of_user"]);
    sayHi("Jake", 35);
    sayHi("Tom", 12);

    // PHP Default Parameter Value
    /*
    The following example shows how to use a default parameter.
    If we call the function setHeight() without a parameter, it will take the default value:
    */
    function setHeight($height = 50)
    {
        echo "The height is : $height <br>";
    }

    setHeight(350);
    setHeight(); // will take the default value of 50

    // PHP Functions - Returning values
    /*
    The return statement immediately ends the execution of a function, and returns a value back to the line of code that called it:
    */
    function sum(int $x, int $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>"; // return -> 15
    echo "7 + 13 = " . sum(7, 13) . "<br>"; // return -> 20
    echo "2 + 4 = " . sum(2, 4); // return -> 6

    // NO return function
    function sayString(string $name): void
    {
        echo "Hello $name";
    }
    /**
     * string $name → параметърът трябва да е string
     * : void → функцията не връща стойност
     */

    // PASSING ARGUMENTS BY REFERENCE
    /*
    Arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
    
    When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, use the & operator in front of the argument/parameter:
    */
    echo strtoupper("<br /><br />Passing Arguments by Reference:<br />");
    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    // if add_five($value) -> $num = 2
    // if aadd_five(&$value) -> $num = 7

    // VARIABLE NUMBER OF PARAMETERS
    /*
    By using the ... operator in front of the function parameter, the function accepts an unknown number of parameters. This is also called a variadic function.
    
    The variadic function argument becomes an array.
    */
    echo strtoupper("<br /><br />Variable Number of Parameters:<br />");

    function sumMyNumbers(int ...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;

    /* You can only have one argument with variable length, and it has to be the last argument */

    /* The variadic argument must be the last argument: */
    function myFamily(string $lastname, string ...$firstname)
    {
        $txt = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++) {
            $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
    }

    $a = myFamily("Doe", "Jane", "John", "Joey");
    echo $a;

    /* IMPORTANT: If the variadic argument is not the last argument, you will get an error. */

    // PHP IS A LOOSELY TYPED LANGUAGE - strict
    /*
    In the examples above, notice that we did not have to tell PHP which data type the variable is.
    
    PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set, you can do things like adding a string to an integer without causing an error.
    
    From PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
    
    To specify strict mode, we need to set declare(strict_types=1);. THIS MUST BE ON THE VERY FIRST LINE OF THE PHP FILE.
    
    In the following example we send both a number and a string to the function, but here we have added the strict declaration:
    echo strtoupper("<br /><br />PHP is a Loosely Typed Language:<br />");
    */

    // declare(strict_types=1); // strict requirement. COMMENTED to avoid errors in this example file. strict declaration is ALWAYS IN THE BEGINNING of the PHP code block

    function addNums(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNums(5, "5 days");

    // PHP RETURN TYPE DECLARATIONS
    echo strtoupper("<br /><br />PHP Return Type Declarations:<br />");
    /*
    PHP also supports Type Declarations for the return statement.
    
    To declare a data type for the function return, add a colon ( : ) and the data type right before the opening curly ( { ) bracket when declaring the function.
    
    In the following example we specify the return type (float) for the function:
    */
    // declare(strict_types=1); // commented on purpose, see row 138

    function addNums2(float $a, float $b): float
    {
        return $a + $b;
    }
    echo addNums2(1.2, 5.2);

    /* You can also specify a different return type, than the argument types, but make sure the return is the correct type: */
    // declare(strict_types=1); // commented on purpose, see row 138

    function addNums3(float $a, float $b): int
    {
        return (int)($a + $b);
    }
    echo addNums3(1.2, 5.2);

    ?>


</body>

</html>