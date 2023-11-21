<?php
session_start();

$_SESSION['yes'] = $_POST['text'];
header('Location: ./task_13.php');
