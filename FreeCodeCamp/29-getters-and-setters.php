<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>

<body>
    <?php
    echo "Getters and Setters ;)<br><br>";
    // DESC: Getters and setters are special functions created in PHP classes, that controls the access that people have to the attributes of those classes.

    class Movie
    {
        public $title;
        private $rating;

        function __construct($aTitle, $aRating)
        {
            $this->title = $aTitle;
            $this->setRating($aRating); // result of the setter will be placed as an object property. This way, we are using the validation logic described in the setter with the if statements
        }

        // GETTER
        function getRating()
        {
            return $this->rating;
        }

        // SETTER
        function setRating($aRating)
        {
            // check if new passed rating is amongst valid ones
            if ($aRating === "G" || $aRating === "PG" || $aRating === "PG-13" || $aRating === "R" || $aRating === "NR") {
                $this->rating = $aRating;
            } else {
                // if not, update the rating to "NR"
                $this->rating = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "PG-13");
    // Valid movie ratings: G, PG, PG-13, R, NR

    /* echo $avengers->rating; // not accessible, as $rating in the class is private */
    $rating = $avengers->getRating(); // get value
    echo $rating; // print;

    $avengers->setRating("check"); // set(modify) value
    echo "<br>";
    $rating = $avengers->getRating(); // get(update) value
    echo $rating; // print
    echo "<br>";
    var_dump($avengers);

    /** Visibility modifiers - they are defining whether parts of the object, properties, functions, are accessible from the other code to be used
     * public - accessible to be used from outside the class code;
     * private - accessible directly only within the class;
     */
    /* GETTERS and SETTERS - allow outside code to indirectly set and get private class attributes */
    ?>
</body>

</html>