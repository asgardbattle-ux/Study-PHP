<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object functions</title>
</head>

<body>
    <?php
    class Student
    {
        public $name;
        public $major;
        public $gpa;

        function __construct($aName, $aMajor, $aGpa)
        {
            $this->name = $aName;
            $this->major = $aMajor;
            $this->gpa = $aGpa;
        }

        function hasHonors()
        {
            if ($this->gpa >= 3.5) {
                return "true"; // using string, in order to be able to print it directly down in the echo statement. In general, boolean is used.
            } else {
                return "false"; // using string, in order to be able to print it directly down in the echo statement. In general, boolean is used.
            }
        }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo $student1->hasHonors();
    echo "<br>";
    echo $student2->hasHonors();
    ?>
</body>

</html>