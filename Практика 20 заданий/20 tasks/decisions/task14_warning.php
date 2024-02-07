<?php
session_start();
unset($_SESSION['count']);
header('Location: ../task_14.php');
exit;