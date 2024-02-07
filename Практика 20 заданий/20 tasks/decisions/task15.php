<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$serverDbname = "mysql:host=localhost;dbname=my_project"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$bdPassword = ""; // Пароль пользователя базы данных
$pdo = new PDO($serverDbname, $username, $bdPassword); // Подключение к базе данных

$sql = 'SELECT * FROM users WHERE email=:email';
$state = $pdo->prepare($sql);
$state->execute(['email' => $email]);
$result = $state->fetch(PDO::FETCH_ASSOC);

//Если пользователь с таким email не найден в базе данных, условие empty($result) будет истинным.
if (empty($result)){
    $_SESSION['warning'] = 'Неверный логин или пароль';
    header('Location: ../task_15.php');
    exit;
}

if (!password_verify($password, $result['password'])){
    $_SESSION['warning'] = 'Неверный логин или пароль';
    header('Location: ../task_15.php');
    exit;
}

$_SESSION['user'] = $result['email'];
header('Location: ../task_16.php');
