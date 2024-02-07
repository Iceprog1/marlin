<?php

$text = $_POST['text'];

$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "my_project"; // Имя базы данных

$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //
// Пишем запрос к таблице
$sql = "INSERT INTO task10 (text) VALUES (:text)";
// Формируем
$statement = $db->prepare($sql);
// Делаем запрос
$statement->execute(['text' => $text]);



header('Location: ../task_10.php');