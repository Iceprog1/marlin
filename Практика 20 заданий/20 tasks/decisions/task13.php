<?php

session_start();
$text = $_POST['text'];

if (!empty($text)){
    $_SESSION['text'] = $text;
    header('Location: ../task_13.php');
    exit();
}

header('Location: ../task_13.php');
