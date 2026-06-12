<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    echo $friends[0]; // Kevin
    echo "<br />";
    echo $friends[1]; // Karen
    echo "<br />";
    echo $friends["2"]; // Oscar
    echo "<br />";
    $index = 3;
    echo $friends[$index]; // Jim
    echo "<br />";

    // ARRAY LENGTH
    echo count($friends);

    // MODIFY ARRAY ELEMENT
    $friends[1] = "Dwight";
    echo $friends[1]; // Dwight
    echo "<br />";

    // ADD ARRAY ITEMS
    /*
     * [] - adds a single item to the end of an array
     * array_push() - adds one or more items to the end of an array
     * array_unshift() - adds one or more items to the beginning of an array
     * array_splice() - removes a portion of an array and replaces it with new elements
     * array_merge() - merges two or more arrays
    */
    // - by index
    $friends[4] = "Angela";
    echo $friends[4];
    echo "<br />";

    // - by [] - indexed array
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits[] = "Orange";
    echo $fruits[3]; // Orange

    // - by [] - associative array
    $cars = array("brand" => "Ford", "model" => "Mustang");
    $cars["color"] = "Red";
    var_dump($cars); // array(3) { ["brand"]=> string(4) "Ford" ["model"]=> string(7) "Mustang" ["color"]=> string(3) "Red" }

    // - by array_push()
    $fruits = array("Apple", "Banana", "Cherry");
    array_push($fruits, "Orange", "Kiwi", "Lemon");
    echo $fruits[5]; // Lemon

    // - add multiple items to an associative array
    // NOTE: To add multiple items to an existing associative array, you can use the += operator
    $cars = array("brand" => "Ford", "model" => "Mustang");
    $cars += ["color" => "red", "year" => 1964];
    var_dump($cars);

    // - by array_unshift()
    // NOTE: The array_unshift() function is used to add one or more array items to the beginning of an existing array.
    $fruits = array("Apple", "Banana", "Cherry");
    array_unshift($fruits, "Orange", "Kiwi", "Lemon");
    var_dump($fruits);

    // - by array_splice()
    // NOTE: The array_splice() function is used remove a portion of an array and replace it with new items.
    // NOTE2: If you specify an offset and a length of 0 (nothing to remove), you can insert an item at that position.
    /* Insert a new array item at index 1 of the $fruits array: */
    $fruits = array("Apple", "Banana", "Cherry");
    $new_fruit = "Orange";
    array_splice($fruits, 1, 0, $new_fruit); // insert "Orange" at index 1
    var_dump($fruits);

    // by array_merge()
    // NOTE: The array_merge() function is used to merge two or more arrays.
    $fruits1 = array("Apple", "Banana");
    $fruits2 = array("Cherry", "Orange");
    $result = array_merge($fruits1, $fruits2);
    var_dump($result);

    // REMOVE ARRAY ITEMS
    /**
     * array_splice() - removes a portion of the array starting from a start position and length
     * unset() - removes the element associated with a specific key
     * array_diff() - remove items from an associative array
     * array_pop() - removes the last array item
     * array_shift() - removes the first array item
     */

    // by array_splice()
    /* Remove the second item: */
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);
    var_dump($cars);

    /* Remove Multiple Array Items */
    /* *To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete. */
    /* Remove 2 items, starting a the second item (index 1): */
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 2);
    var_dump($cars);

    // - by unset()
    // NOTE: You can also use the unset() function to delete existing array items.
    // NOTE2 IMPORTANT: The unset() function does not re-index the array. So, if you remove an element at index 1, the other elements (e.g., at index 0, 2, 3, etc.) will keep their original indices, leading to a "gap" in the sequence of indices.
    /* Remove the second item */
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[1]);
    var_dump($cars);

    // Remove Multiple Array Items
    // NOTE: The unset() function takes a unlimited number of arguments, and can therefore be used to delete multiple array items:
    /* Remove the first and the second items */
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[0], $cars[1]);
    var_dump($cars);

    // Remove Item From an Associative Array
    /// By unset()
    // NOTE: Specify the key of the item you want to delete.
    /* Remove the model */
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    unset($cars["model"]);
    var_dump($cars);
    /// By array_diff()
    // NOTE: This function returns a new array, without the specified items.
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $newarray = array_diff($cars, ["Mustang", 1964]);
    var_dump($newarray);

    // - by array_pop()
    // NOTE: The array_pop() function removes the last item of an array.
    $cars = array("Volvo", "BMW", "Toyota");
    array_pop($cars);
    var_dump($cars); // "Volvo", "BMW"

    // - by array_shift()
    // NOTE: The array_shift() function removes the first item of an array.
    $cars = array("Volvo", "BMW", "Toyota");
    array_shift($cars);
    var_dump($cars);

    // SORTING
    
    ?>

</body>

</html>