<?php

$text = $_POST['text'];

$pdo = new PDO('mysql:host=localhost;dbname=database;', 'root', '');
$sql = 'INSERT INTO text (text) VALUES (:text)';
$state = $pdo->prepare($sql);
$state->execute(['text' => $text]);

header('location: ./task_10.php');

