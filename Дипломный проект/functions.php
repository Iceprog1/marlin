<?php


function get_user_by_email($email){
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    $sql = 'SELECT * FROM diplom WHERE email=:email';
    $state = $pdo->prepare($sql);
    $state->execute(['email' => $email]);
    $user = $state->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function set_flash_message($name, $message){
    $_SESSION[$name] = $message;
}

function redirect_to($path){
    header("Location: {$path}");
    exit();
}

function add_user($email, $password){
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    $sql = 'INSERT INTO diplom (email, password) VALUES (:email, :password)';
    $state = $pdo->prepare($sql);
    $state->execute(['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
}

function display_flash_message($name){
    if (isset($_SESSION[$name])){
        echo "<div class=\"alert alert-{$name} text-dark\" role=\"alert\"> {$_SESSION[$name]}</div>";
        unset($_SESSION[$name]);
    }
}

function user_in_session($name, $user){
    $_SESSION[$name] = $user;
}