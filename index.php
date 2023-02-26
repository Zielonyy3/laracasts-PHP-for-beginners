<?php

require 'functions.php';

//require 'router.php';

// connect to our MySQL database

$dsn = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";

$pdo = new PDO($dsn, 'root');
$statement = $pdo->prepare('select * from posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
