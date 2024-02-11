<?php
include 'functions.php';
session_start();

$id = $_POST['id'];
status($_POST['status'], $id);

set_flash_message('success', 'Статус изменен');
redirect_to("Location: ../status.php?id=$id");