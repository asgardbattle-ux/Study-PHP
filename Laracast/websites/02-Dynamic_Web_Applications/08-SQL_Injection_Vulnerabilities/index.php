<?php

require 'functions.php';
require 'database.php';

$config = require('config.php');
$db = new Database($config['database'], 'root', '');

$id = $_GET['id'];
// Option 1: $query = "select * from posts where id = ?";
// Option 2:
$query = "select * from posts where id = :id";

/*
With:
$query = "select * from posts where id = ?";
$db->query($query, [$id]);

the value is treated as data, not as part of the SQL command.
That's the basic defense against SQL injection.
*/

// Option 1: $posts = $db->query($query, [$id])->fetch();
// Optoin 2:
$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);

/*
    RULE: when accepting user input via user input or form, NEVER inline as a part of SQL query - allows SQL injections
*/