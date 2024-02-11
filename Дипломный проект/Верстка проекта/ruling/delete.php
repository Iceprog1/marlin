<?php
require "./functions.php";
session_start();

if (is_not_logged_in('user')) {
    redirect_to('Location: ../page_login.php');
}

if (is_not_admin()) {
    if (!is_author('user', 'id')) {
        redirect_to('Location: ../users.php');
    }
}

$id = $_GET['id'];

delete_user($id);

set_flash_message('success', 'Профиль успешно удален');
redirect_to("Location: ../users.php");
