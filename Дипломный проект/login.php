<?php

session_start();
require 'functions.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = get_user_by_email($email);

if (!empty($user)){
    set_flash_message('danger', 'Неверный логин или пароль' );
    redirect_to('./page_login.php');
    exit();

}
if (password_verify($password, $user['password'])){
    set_flash_message('danger', 'Неверный логин или пароль' );
    redirect_to('./page_login.php');
    exit();
}

user_in_session('user', $user);
redirect_to('./users.php');
