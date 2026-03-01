<?php

require "functions.php";
require 'Database.php';

// require 'Router.php';

// connect to MySQL Database and execute a query.

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);


/*
foreach ($posts as $post) {
    echo "<li>" . $post['id'] . ": " . $post['title'] . "</li>";
    echo "<p>" . $post['text'] . "</p>";
}
*/

