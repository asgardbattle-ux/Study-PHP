<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loops</title>
</head>

<body>
    <?php
    /** LOOP TYPES:
     * while - loops through a block of code as long as the specified condition is true
     * do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
     * for - loops through a block of code a specified number of times
     * foreach - loops through a block of code for each element in an array
     */

    // WHILE LOOP
    $index = 6;
    while ($index <= 5) {
        // echo $index . "<br />";
        echo "$index <br />";
        $index++;
    }

    /// BREAK
    /* DESC: With the break statement we can stop the loop even if the condition is still true: */
    $i = 1;
    while ($i < 6) {
        if ($i == 3) break;
        echo $i . " ";
        $i++;
    }
    /* Prints: 1 2*/

    /// CONTINUE
    /* DESC: With the continue statement we can skip the current iteration, and continue with the next:*/
    $i = 0;

    while ($i < 6) {
        $i++;
        if ($i == 3) continue;
        echo $i . " ";
    }
    /* Prints: 1 2 4 5 6*/

    /// ALTERNATIVE SYNTAX: ENDWHILE
    /* DESC: The while loop syntax can also be written with the endwhile statement like this */
    $i = 1;
    while ($i < 6):
        echo $i . " ";
        $i++;
    endwhile;
    /* Prints: 1 2 3 4 5 */

    /// EXAMPLE: STEP BY 10
    /* DESC: If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration: */
    $i = 0;
    while ($i < 100) {
        $i += 10;
        echo $i . "<br>";
    }

    /* ================================== */

    // DO WHILE LOOPS
    /* Desc: first, execute loop body, then check the condition. The PHP do...while loop - Loops through a block of code at least once, and then repeats the loop as long as the specified condition is true. */
    do {
        // echo $index . "<br />";
        echo "$index <br />";
        $index++;
    } while ($index <= 5);

    /// E.g.
    /* Set $i = 1, then print $i as long as $i is less than 6: */
    $i = 1;
    do {
        echo $i . " ";
        $i++;
    } while ($i < 6);
    /* Prints 1 2 3 4 5*/

    /* Here, we set the variable $i to 8 instead of 1, and execute the same do...while loop again. Set $i = 8, then print $i as long as $i is less than 6:*/
    $i = 8;
    do {
        echo $i;
        $i++;
    } while ($i < 6);
    /* Prints: 8 - as first itterations is executing loop body and then start checking for the condition */

    /// BREAK STATEMENT
    /* With the break statement we can stop the loop even if the condition is still true:*/
    $i = 1;
    do {
        if ($i == 3) break;
        echo $i . " ";
        $i++;
    } while ($i < 6);
    /* Prints: 1 2*/

    /// CONTINUE STATEMENT
    /* With the continue statement we can skip the current iteration, and continue with the next: */
    $i = 0;
    do {
        $i++;
        if ($i == 3) continue;
        echo $i . " ";
    } while ($i < 6);
    /* Prints: 1 2 4 5 6*/

    /* ================================== */

    // FOR LOOP
    /* DESC: The PHP for loop - Loops through a block of code a specified number of times. The for loop is used when you know how many times the script should run.*/
    /** FLOW
     * initialization - is evaluated once (typically sets a counter variable
     * condition - is evaluated before each iteration (if true - continue loop
     * increment - is evaluated after each iteration (typically used to increase/decrease the counter variable). By: 1, 2, ..., n.
     */
    /* Example loop that prints the numbers from 0 to 10 */
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    /** Example explanation:
     * $x = 0;, is evaluated once, and sets the counter variable to 0.
     * $x <= 10;, is evaluated before each iteration, and the loop continues if this expression evaluates to true. Here, the expression is true as long as $x is less than, or equal to 10.
     * $x++;, is evaluated after each iteration, and it increases the counter variable $x by one.
     */

    /* Example 2 - shows a for loop that prints the numbers from 10 to 0, by decreasing the counter variable: */
    for ($x = 10; $x >= 0; $x--) {
        echo "The number is: $x <br>";
    }

    /// BREAK STATEMENT
    /* DESC: With the break statement we can stop the loop even if the condition is still true: */
    /* Stop the loop when $x is 3 */
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "$x ";
    }
    /* Prints: 0 1 2*/

    /// CONTINUTE STATEMENT
    /* DESC: With the continue statement we can skip the current iteration, and continue with the next: */
    /* Skip, and move to the next iteration if $x is 3: */
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "$x ";
    }
    /* Prints: 0 1 2 4 5 6 7 8 9 10 */

    for ($i = 1; $i <= 5; $i++) {
        echo "$i <br />";
    }

    // Going over an array elements
    $luckyNumbers = [4, 8, 14, 16, 23, 42];
    for ($i = 0; $i < count($luckyNumbers); $i++) {
        echo "$luckyNumbers[$i] <br />";
    }

    /* ================================== */

    // FOREACH
    /* DESC: The PHP foreach loop - Loops through a block of code for each element in an array or each property in an object. */
    /* Example: The following example loops through all the items of an indexed array: */
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value ";
    }
    /* Prints: red green blue yellow */
    /* Explanation: For each loop iteration, the value of the current array element is assigned to the variable $value. The iteration continues until it reaches the last array element. */

    /// FOREACH on Associative Arrays
    /* DESC: The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
    Associative arrays are different, associative arrays use named keys, and when looping through them, you might also want to keep the key name as well as the value.
    This is done by specifying both the key and value in the foreach loop, like this: */
    /* Print both the key and the value from the $members array: */
    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $key => $value) {
        echo "<br />";
        echo "$key: $value";
    }
    /** Prints:
     * Peter: 35
     * Ben: 37
     * Joe: 43    
     */

    /* EXPERIMENT START */
    /* In ass array, if only 1 value initiated in the foreach loop, it will be the value of the key:value pair per each ass array element. Ex.: */
    foreach ($members as $test) {
        echo "<br />";
        echo "$test";
    }
    /** Prints:
     * 35
     * 37
     * 43    
     */
    /* EXPERIMENT END */

    /// FOREACH on Objects
    /* DESC: The foreach loop can also be used to loop through properties of an object: */
    class Car
    {
        public string $color;
        public string $model;
        public function __construct(string $color, string $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    echo "<br>";
    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
    }
    /** Prints:
     * color: Red
     * model: Volvo
     */

    /* EXPERIMENT START */
    /* similar to ass arrays(line39), if only 1 value is initiated in the foreach loop, it will be the value of the object key:value pair. Eg.: */
    echo "<br>";
    foreach ($myCar as $x) {
        echo "$x <br>";
    }
    /** Prints:
     * red
     * Volvo
     */
    /* EXPERIMENT END */

    /// BREAK STATEMENT
    /* DESC: With the break statement we can stop the loop even if it has not reached the end:*/
    /* Stop the loop if $x is "blue": */
    $colors = array("red", "green", "blue", "yellow");

    echo "<br>";
    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }
    /** Prints:
     * red
     * green
     */

    // CONTINUE STATEMENT
    /* DESC: With the continue statement we can skip the current iteration, and continue with the next:*/
    /* Skip, and move to the next iteration if $x is "blue": */

    $color2 = array("red", "green", "blue", "yellow");

    echo "<br>";
    foreach ($color2 as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }
    /** Prints:
     * red
     * green
     * yellow
     */

    /// BYREF ( by reference )
    /* DESC: When looping through the array items, any changes done to the array item will, by default, NOT affect the original array: */
    /* By default, changing an array item will not affect the original array: */
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") $x = "pink";
    }

    echo "<br>";
    var_dump($colors);
    /* Prints: array(4) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" [3]=> string(6) "yellow" } */

    /* BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array: */
    /* By assigning the array items by reference, changes will affect the original array: */
    foreach ($colors as &$x) {
        if ($x == "blue") $x = "pink";
    }

    echo "<br><br>";
    var_dump($colors);
    /* Prints: array(4) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "pink" [3]=> &string(6) "yellow" } */

    /// ALTERNATIVE SYNTAX
    /* The foreach loop syntax can also be written with the endforeach statement like this */
    /* Loop through the items of an indexed array: */
    $colors = array("red", "green", "blue", "yellow");

    echo "<br><br>";
    foreach ($colors as $x) :
        echo "$x ";
    endforeach;
    /* Prints: red green blue yellow */
    ?>
</body>

</html>