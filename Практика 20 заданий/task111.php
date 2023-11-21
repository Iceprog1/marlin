<?php
session_start();
$text = $_POST['text'];

$pdo = new PDO ('mysql:host=localhost;dbname=database', 'root', '');
$sql = 'SELECT * FROM text WHERE text=:text';
$state = $pdo->prepare($sql);
$state->execute(['text' => $text]);
$user = $state->fetch(PDO::FETCH_ASSOC);

if (!empty($user)){
    $danger = 'Введенная запись уже есть в базе';
    $_SESSION['danger'] = $danger;

    header('Location: ./task_11.php');
    exit;
};



$sql = 'INSERT INTO text (text) VALUES (:text)';
$state = $pdo->prepare($sql);
$state->execute(['text' => $text]);

$success = 'Спасибо что ввели данные';
$_SESSION['success'] = $success;

header('Location: ./task_11.php');