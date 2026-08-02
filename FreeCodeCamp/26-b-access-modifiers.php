<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifiers</title>
</head>

<body>
    <?php
    // PUBLIC
    /** DESC:
     * The 'public' keyword is an access modifier. It marks a property or method as public.
     * Public properties and methods can be used by any code that can access the object. */
    /* Example: Use public to declare a property that can be modified by any code */
    class MyClass
    {
        public $number = 0;
    }

    $obj = new MyClass();
    $obj->number = 5;
    echo "The number is " . $obj->number; // The number is 5

    // PROTECTED
    /** DESC:
     * The 'protected' keyword is an access modifier. It marks a property or method as protected.
     * Protected properties and methods can only be used by the class in which the property or method was defined and any classes that derive from it. Any other code cannot use them.
     */

    /// START
    class MyClass3
    {
        protected $number = 0;
    }

    class AnotherClass extends MyClass3
    {
        public function add1()
        {
            $this->number++;
        }

        public function getNumber()
        {
            return $this->number;
        }
    }

    $obj = new AnotherClass();
    $obj->add1();
    echo "<br>The number is " . $obj->getNumber(); // The number is 1
    /// END
    /// START
    class Fruit
    {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro()
        {
            echo "The fruit is $this->name and the color is $this->color.";
        }
    }

    class Strawberry extends Fruit
    {
        public function message()
        {
            echo "Am I a fruit or a berry? ";
        }
    }

    // Try to call all three methods from outside class
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
    $strawberry->message(); // OK. message() is public
    $strawberry->intro(); // ERROR. intro() is protected
    /**
     * In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error.
     * The public method will work fine!
     */

    /* Let's look at another example:*/
    class Fruit2
    {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro()
        {
            echo "The fruit is $this->name and the color is $this->color.";
        }
    }

    class Strawberry2 extends Fruit2
    {
        public function message()
        {
            echo "Am I a fruit or a berry? ";
            // Call protected method from within derived class - OK
            $this->intro();
        }
    }

    $strawberry = new Strawberry2("Strawberry", "red"); // OK. __construct() is public
    $strawberry->message(); // OK. message() is public and calls intro() (which is protected) from within the derived class
    /// END

    // PRIVATE
    /** DESC:
     * The 'private' keyword is an access modifier. It marks a property or method as private.
     * Private properties and methods can only be used by the class in which the property or method was defined. Derived classes and outside code cannot use them.
     */
    /* Example: Use private to prevent outside code or derived classes from modifying a property: */
    class MyClass2
    {
        private $number = 0;

        public function add1()
        {
            $this->number++;
        }

        public function getNumber()
        {
            return $this->number;
        }
    }

    $obj = new MyClass2();
    // $obj->number = 5; // can't modify $number as it's 'private'. If public, following the code below, print result would be: The number is 6 - updating the value to 5 + $obj->add1() adds 5 + 1 = 6
    $obj->add1();
    echo "<br>The number is " . $obj->getNumber(); // The number is 1
    ?>
</body>

</html>