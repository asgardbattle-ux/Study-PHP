<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

// Option 1
/*
$id = $_GET['id'];

$note = $db->query('select * from notes where user_id = :id', ['id' => $id])->fetch();
*/

// Option 2 - if a variable is going to be used only once, inline it to the place of usage - here it is $id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

/* Wildcards comment
They are passed as a 2nd argument - might be an array. If >1 wildcards, then those are automatically filled in by PHP in the sequence of showing into the array
*/

require 'views/note.view.php';
