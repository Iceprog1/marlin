<?php
session_start();
include './functions.php';
$email = $_POST['email'];
$password = $_POST['password'];

$user = get_user_by_email($email);


if (empty($user)){
    set_flash_message('danger', 'Неверный логин или пароль');
    redirect_to('Location: ../page_login.php');
    exit();
}

if (!password_verify($password, $user['password'])){
    set_flash_message('danger', 'Неверный логин или пароль');
    redirect_to('Location: ../page_login.php');
    exit();
}

$_SESSION['user'] = $user;
redirect_to('Location: ../users.php');