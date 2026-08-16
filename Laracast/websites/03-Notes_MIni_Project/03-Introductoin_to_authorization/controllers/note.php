<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 1; // 1 - hardcoded user_id

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->fetch();

// $note=false, coulde be due to:
// 1) note does not exist - if there is no note with such ID, call abort();
if (!$note) {
    abort();
}

//2) trying to access a note id created from a different user, call 'abort()' with 403(forbidden)
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN); // Response::FORBIDDEN - part of a class in 'Response.php'
}

require 'views/note.view.php';
