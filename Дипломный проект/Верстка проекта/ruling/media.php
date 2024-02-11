<?php
require "./functions.php";
session_start();

$id = $_POST['id'];

add_logo($_FILES['image']['name'], $_FILES['image']['tmp_name'], $id);

set_flash_message('success', 'Фото успешно обновлено');
redirect_to("Location: ../media.php?id=$id");
