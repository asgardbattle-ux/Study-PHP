<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>
    <?php
    echo "Inheritance ;)<br><br>";
    // INHERITANCE
    /* DESC: class to inherit attributes and functionalities of another class. Inheritance in PHP OOP allows a child class to inherit all the public and protected properties and methods from a parent class. In addition, the child class can have its own properties and methods. */
    /* NOTE: Private methods of a parent class are not accessible to a child class. */
    /* DEFINITION: An inherited class is defined with the 'extends' keyword.*/

    /* YouTube Course example
    class Chef
    {
        function makeChicken()
        {
            echo "The chef makes chiken <br>";
        }
        function makeSalad()
        {
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish()
        {
            echo "The chef makes bbq ribs <br>";
        }
    }

    class ItalianChef extends Chef
    {
        function makePasta()
        {
            echo "The chef makes pasta <br>";
        }
        // Ovveride an inherited function - basically write the function again with it's new functionalities
        function makeSpecialDish() {
            echo "The chef makes cihcken parm <br>";
        }
    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();

    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    $italianChef->makePasta();
    $italianChef->makeSpecialDish();
    */

    // Inheritance and the Protected Access Modifier
    /* Look 26-b-acccess-modifiers.php -> PROTECTED */

    // Overriding Inherited Methods
    /**
     * Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
     * Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit):
     */
    class Fruit
    {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "The fruit is $this->name and the color is $this->color.";
        }
    }

    class Strawberry extends Fruit
    {
        public $weight;

        public function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro()
        {
            echo "A $this->name is $this->color, and the weight is $this->weight gram.";
        }
    }

    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->intro();
    var_dump($strawberry);

    // The final Keyword
    /**
     * The final keyword can be used to prevent class inheritance or to prevent method overriding.
     * The following example shows how to prevent class inheritance:
     */
    /* Example: */
    final class Fruit1
    {
        // some code
    }

    // will result in error as Fruit1 is 'final'
    class Strawberry1 extends Fruit1
    {
        // some code
    }

    /* The following example shows how to prevent method overriding:*/
    class Fruit2
    {
        final public function intro()
        {
            // some code
        }
    }

    class Strawberry2 extends Fruit2
    {
        // will result in error
        public function intro()
        {
            // some code
        }
    }

    ?>
</body>

</html>