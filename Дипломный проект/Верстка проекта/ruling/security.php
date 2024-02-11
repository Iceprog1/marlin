<?php
require "./functions.php";
session_start();

$password = password_hash($_POST['password'], PASSWORD_DEFAULT );
$id = $_POST['id'];
edit_credentials($_POST['id'], $_POST['email'], $password);

set_flash_message('success', 'Email и пароль успешно изменены');
redirect_to("Location: ../security.php?id=$id");
