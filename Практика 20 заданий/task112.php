<?php
//session_start();
//$email = $_POST['email'];
//$password = $_POST['password'];
//
//$pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
//$sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
//$state = $pdo->prepare($sql);
//$state->execute(['email' => $email, 'password' => $password]);
//$user = $state->fetch(PDO::FETCH_ASSOC);
//
//if (!empty($user)){
//    $danger = 'Этот эл адрес уже занят другим пользователем';
//    $_SESSION['danger'] = $danger;
//
//    header('location: ./task_12.php');
//    exit;
//}
//
//
//$hash = password_hash($password, PASSWORD_DEFAULT);
//$sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
//$state = $pdo->prepare($sql);
//$state->execute(['email' => $email, 'password' => $hash]);
//
//$success = 'Вы успешно зарегистрированы';
//$_SESSION['success'] = $success;
//
//header('location: ./task_12.php');
