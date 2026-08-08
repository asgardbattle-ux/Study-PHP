<?php

require 'functions.php';
require 'database.php';

$config = require('config.php');

$db = new Database($config['database'], 'root', '');
$posts = $db->query("select * from posts where id > 5")->fetchAll(PDO::FETCH_ASSOC); // move what type of info to be fetched outside the class, by stating it here

dd($posts);
