<?php
session_start();
require "./functions.php";
$create = $_POST;
$user = get_user_by_email($create['email']);

// Проверка на совпадение почты
if (!empty($user)){
    set_flash_message('danger', 'Этот эл. адрес уже занят другим пользователем.');
    redirect_to('Location: ../create_user.php');
    exit();
}

// Получаем ID только что созданной записи
$user = add_new_user($create['email'], $create['password']);

// Записываем данные из форм, в базу данных
edit($create['name'], $create['job'], $create['number'], $create['adress'], $user['id']);

// Статус пользователя
status($create['status'], $user['id']);

// Добавить логотип пользователя в базу данных
add_logo($_FILES['image']['name'], $_FILES['image']['tmp_name'], $user['id']);

// Вывести флеш сообщение
set_flash_message('success', 'Пользователь успешно добавлен');

// Перенаправить на страницу пользователей
redirect_to('Location: ../users.php');


