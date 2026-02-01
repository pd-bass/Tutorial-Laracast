<?php

require "functions.php";

// require 'router.php';

// connect to MySQL Database

$dsn = "mariadb:host=localhost;port=3306;dbname=my_first_db;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll();

dd($posts);
