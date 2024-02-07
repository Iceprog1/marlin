<?php

$id = $_GET['id'];

$serverDbname = "mysql:host=localhost;dbname=my_project"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$dbPassword = ""; // Пароль пользователя базы данных
$db = new PDO($serverDbname, $username, $dbPassword); // Подключение к базе данных

$sql = 'SELECT * FROM images';
$state = $db->prepare($sql);
$state->execute();
$result = $state->fetch(PDO::FETCH_ASSOC);

$filename = '../decisions/upload/' . $result['image'];
if (file_exists($filename)) {
    unlink($filename);
}

$sql = 'DELETE FROM `images` WHERE id=:id';
$state = $db->prepare($sql);
$state->execute(['id' => $id]);

header('Location: ../task_17.php');
