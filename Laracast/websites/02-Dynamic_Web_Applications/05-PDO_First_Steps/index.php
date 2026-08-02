<?php

require 'functions.php';
// require 'router.php';

/* Classes 101 introduction :)
class Person
{
    public $name;
    public $age;
    
    public function breathe()
    {
        echo $this->name . ' is breathing';
        }
        }
        
        $person = new Person();
        $person->name = 'John Doe';
$person->age = 25;
$person->breathe();
*/

// connect to our MySQL database.
// 1) connection to DB
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
// 2) first instance of a PDO class
$pdo = new PDO($dsn); // create new 

// 3) Prepare a new query to be sent to MySQL
$statement = $pdo->prepare("select * from posts");
// 4) MySQL executes the query
$statement->execute();

// 5) Fetch the query information as an accossiative array 
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// 6) Display the results
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}