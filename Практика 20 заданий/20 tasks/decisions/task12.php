<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$serverDbname = "mysql:host=localhost;dbname=my_project"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$dbPassword = ""; // Пароль пользователя базы данных
$db = new PDO($serverDbname, $username, $dbPassword); // Подключение к базе данных

$sql = 'SELECT * FROM users WHERE email=:email';
$state = $db->prepare($sql);
$state->execute(['email' => $email]);
$task = $state->fetch(PDO::FETCH_ASSOC);

if (!empty($task)){
    $_SESSION['warning'] = 'Этот эл адрес уже занят другим пользователем';
    header('Location: ../task_12.php');
    exit();
}

$pass = password_hash($password, PASSWORD_DEFAULT);
$sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
$statement = $db->prepare($sql);
$statement->execute(['email' => $email, 'password' => $pass]);

header('Location: ../task_12.php');