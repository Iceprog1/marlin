<?php

/**
 * Проверка на, существование сессии с таким именем
 *
 * @param string $name имя сессии
 * @return bool
 */
function is_logged(string $name): bool
{
    if (isset($_SESSION[$name])){
        return true;
    }
    return false;
}


/**
 * Если пользователя нет в сессии, вернет false
 *
 */
function is_not_logged_in(string $name): string|bool
{
    return !is_logged($name);
}


/**
 * Возвращает все поля из базы данных
 *
 * @return array
 */
function get_users(): array
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $state = $db->query('SELECT * FROM users');
    return $state->fetchAll(PDO::FETCH_ASSOC);
}


/**
 * Сравнение id Пользователя из сессии и id Пользователя из базы данных
 *
 * @param $user /Пользователь из сессии
 * @param $current_user /Пользователь из бд
 * @return string
 */
function is_equal($user, $current_user): string
{
   return $_SESSION[$user]['id'] === $current_user['id'];
}


/**
 * Сравнение роли, человека который залогинился
 *
 * @return string
 */
function is_admin(): string
{
    return $_SESSION['user']['role'] === 'admin';
}


/**
 * Получить пользователя по email
 *
 * @param string $email email из массива post
 */
function get_user_by_email(string $email): array|bool
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = 'SELECT * FROM users WHERE email=:email';
    $state = $db->prepare($sql);
    $state->execute(['email' => $email]);
    $result = $state->fetch(PDO::FETCH_ASSOC);
    return $result;
}


/**
 * Записать имя сессии и ее сообщение
 *
 * @param string $session имя сессии
 * @param string $message вложенное сообщение в сессию
 * @return void
 */
function set_flash_message(string $session, string $message): void
{
    $_SESSION[$session] = $message;
}


/**
 * Перенаправит на страницу
 *
 * @param string $location вернуть на страницу
 * @return void
 */
function redirect_to(string $location): void
{
    header($location);
}


/**
 * Добавить пользователя в базу данных
 *
 * @param string $email передаем email из post
 * @param string $password передаем password из post
 * @return void
 */
function add_user(string $email, string $password): void
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
    $state = $db->prepare($sql);
    $state->execute(['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
}


/**
 * Показать сообщение из определенной сессии, введя имя сессии
 *
 * @param string $name имя сессии
 * @return void
 */
function display_flash_message(string $name): void
{
    if (isset($_SESSION[$name])){
        echo "<div class=\"alert alert-{$name} text-dark\" role=\"alert\">{$_SESSION[$name]}</div>";
        unset($_SESSION[$name]);
    }
}