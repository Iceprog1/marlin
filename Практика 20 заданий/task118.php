<?php

$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
$sql = 'SELECT * FROM images';
$state = $pdo->prepare($sql);
$state->execute();
$images = $state->fetch(PDO::FETCH_ASSOC);

$targetFile = 'upload/' . $images['img'];
file_exists(unlink($targetFile));

$pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
$sql = 'DELETE FROM `images` WHERE id = :id';
$state = $pdo->prepare($sql);
$state->execute(['id' => $id]);
$images = $state->fetch(PDO::FETCH_ASSOC);

header('Location: ../task_17.php');

//echo '<pre>';
//print_r($images['img']);