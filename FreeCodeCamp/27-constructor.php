<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>

<body>
    <?php
    echo "Constructor ;)";
    // CONSTRUCTOR
    /* DESC: The PHP __construct() function is a special method within a class that is automatically called each time a new object is created from a class (with the new keyword). */
    /**
     * The __construct() function accept arguments, which are passed upon object creation (e.g., $apple = new Fruit("Apple", "Red");). This allows for dynamic initialization (reduces code).
     * Notice that the __construct() function starts with two underscores (__)!
     */
    /* Example - we use the __construct() function (that is automatically called each time a new object is created from a class), which saves us from calling the set_details() method (which reduces the amount of code): */

    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Constructor
        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        // Get method - print in the example
        function get_details()
        {
            echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
        }
    }

    $apple = new Fruit('Apple', 'Red'); // initialize new object with properties
    $apple->get_details(); // print

    $banana = new Fruit('Banana', 'Yellow'); // init another object with properties
    $banana->get_details(); // print

    /** Example explained:
     * The Fruit class is defined with two properties: $name and $color.
     * The __construct() method initializes the properties when a new object of the Fruit class is created, using the provided values.
     * The get_details() method is defined to print out the fruit's name and color.
     *A new object $apple is created from the Fruit class, and values ("Apple", "Red") are passed to the constructor.
     * A new object $banana is created from the Fruit class, and values ("Banana", "Yellow") are passed to the constructor.
     * The get_details() method is called on the $apple and $banana objects to display the details of the fruit.
    */


    // Example with set method instead of constructor
    class Car
    {
        // Properties
        public $name;
        public $color;

        // Method to set the properties - instead of constructor
        function just_set($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        // Method to display the properties
        function just_get()
        {
            echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
        }
    }

    $volvo = new Car;
    $volvo->just_set('Volvo', 'Black'); // as we don't use a constructor into the class, we have to set the object properties after it has been initialized
    ?>
</body>

</html>