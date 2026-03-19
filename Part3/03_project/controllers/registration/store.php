<?php

use Core\Validator;
$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];
if(!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password of at least 7 characters.';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}
// check if the account already exists
    // if yes, redirect to a login page
    // if not, save one to the database, and then log the user in, and redirect

