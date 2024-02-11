<?php
require "./functions.php";
session_start();

$id = $_POST['id'];
edit($_POST['username'], $_POST['job'], $_POST['number'], $_POST['adress'], $_POST['id']);

set_flash_message('success', 'Профиль успешно обновлен');
redirect_to("Location: ../edit.php?id=$id");

