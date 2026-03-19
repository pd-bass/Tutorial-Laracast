<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => 'Create Note',
        'errors' => $errors,
    ]);
}

$db->query('INSERT INTO notes (title, body, user_id) VALUES(:title, :body, :user_id )', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => 1
]);

header('location: /notes');
die();

