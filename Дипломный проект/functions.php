<?php


use JetBrains\PhpStorm\NoReturn;

function get_user_by_email($email)
{
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    $sql = 'SELECT * FROM diplom WHERE email=:email';
    $state = $pdo->prepare($sql);
    $state->execute(['email' => $email]);
    $user = $state->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function set_flash_message(string $name, string $message): void
{
    $_SESSION[$name] = $message;
}

#[NoReturn]
function redirect_to(string $path): void
{
    header("Location: $path");
    exit();
}

function add_user(string $email, string $password): void
{
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    $sql = 'INSERT INTO diplom (email, password) VALUES (:email, :password)';
    $state = $pdo->prepare($sql);
    $state->execute(['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
}

function display_flash_message( string $name): void
{
    if (isset($_SESSION[$name])) {
        echo "<div class=\"alert alert-$name text-dark\" role=\"alert\"> $_SESSION[$name]</div>";
        unset($_SESSION[$name]);
    }
}




// users

function logged_in(string $name): void
{
    if (!isset($_SESSION[$name])){
        redirect_to('./page_login.php');
    }
}


