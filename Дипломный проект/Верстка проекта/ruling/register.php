<?php
include 'functions.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$result = get_user_by_email($email);

if (!empty($result)){
    set_flash_message('danger', '<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем.');
    redirect_to('Location: ../page_register.php');
    exit();
}

add_user($email, $password);

set_flash_message('success', 'Регистрация успешна');
redirect_to('Location: ../page_login.php');
