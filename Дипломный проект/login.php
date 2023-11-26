<?php

// Запускаем сессию
session_start();

// Подключаем файл с функциями
require 'functions.php';

// Проверяем, были ли отправлены email и пароль
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    // Если email или пароль не были отправлены, устанавливаем сообщение об ошибке и перенаправляем на страницу входа
    set_flash_message('danger', 'Email и пароль обязательны' );
    redirect_to('./page_login.php');
}

// Получаем email и пароль из POST-запроса
$email = $_POST['email'];
$password = $_POST['password'];

// Получаем пользователя по email
$user = get_user_by_email($email);

// Проверяем, существует ли пользователь и совпадает ли пароль
if (empty($user) || !password_verify($password, $user['password'])){
    // Если пользователь не существует или пароль не совпадает, устанавливаем сообщение об ошибке и перенаправляем на страницу входа
    set_flash_message('danger', 'Неверный логин или пароль' );
    redirect_to('./page_login.php');
}

if ($user['role'] == 'manager') {
    $_SESSION['manager'] = $user;
}

if (!empty($user)){
    $_SESSION['user'] = $user;
}

if ($user['role'] == 'admin') {
    $_SESSION['role'] = $user;
}
redirect_to('./users.php');