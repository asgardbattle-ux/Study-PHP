<?php

// Connect to the database, and execute a query
class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}"; // initial value: "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); // ($dsn, username, password, options) - part of PDO construct PHP element, Ctrl+click on PDO and search for __construct
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // return $statement->fetchAll(PDO::FETCH_ASSOC); // fetchAll returns assocciative array - list of lists
        // return $statement->fetch(PDO::FETCH_ASSOC); // fetch returns array with single element

        return $statement;
    }
}
