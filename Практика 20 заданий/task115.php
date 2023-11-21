<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
$sql = 'SELECT * FROM users WHERE email=:email';
$state = $pdo->prepare($sql);
$state->execute(['email' => $email]);
$user = $state->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
    $danger = 'Неверный логин или пароль';
    $_SESSION['danger'] = $danger;

    header('location: ./task_15.php');
    exit;
}

if (!password_verify($password, $user['password'])) {
    $danger = 'Неверный логин или пароль';
    $_SESSION['danger'] = $danger;

    header('location: ./task_15.php');
    exit;
}


//$hash = password_hash($password, PASSWORD_DEFAULT);
//$sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
//$state = $pdo->prepare($sql);
//$state->execute(['email' => $email, 'password' => $hash]);

$success = $user['email'];
$_SESSION['success'] = $success;

header('location: ./task_16.php');
