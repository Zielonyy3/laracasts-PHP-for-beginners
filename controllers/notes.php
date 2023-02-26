<?php


$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My notes';

$query = 'select * from notes where user_id = :id';
$notes = $db->query($query, ['id' => 1])->fetchAll();

require 'views/notes.view.php';