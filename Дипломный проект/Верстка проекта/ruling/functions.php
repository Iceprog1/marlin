<?php


/**
 * Функция для удобного вывода массива
 *
 * @param array $array массив данных
 * @return void
 */
function dd(array $array): void
{
    echo "<pre>";
    print_r($array);
    exit();
}


function edit_credentials($user_id, $email, $password): void
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = "UPDATE users SET email = :email, password = :password WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
}


function delete_user($user_id){
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = 'DELETE FROM users WHERE id=:id';
    $state = $db->prepare($sql);
    $state->execute(['id' => $user_id]);
}

function is_author($logged_user, $edit_user_id)
{
    if ($_SESSION[$logged_user]['id'] == $_GET[$edit_user_id]){
        return true;
    }
    return false;
}

function get_user_by_id($id)
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = 'SELECT * FROM users WHERE id=:id';
    $state = $db->prepare($sql);
    $state->execute(['id' => $id]);
    $result = $state->fetch(PDO::FETCH_ASSOC);
    return $result;
}


/**
 * Добавить пользователя в базу данных, через форму
 *
 * @param string $email почта пользователя
 * @param string $password пароль пользователя
 * @return void
 */
function add_new_user(string $email, string $password): array
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
    $state = $db->prepare($sql);
    $state->execute(['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);


    // Получение только что созданного пользователя
    $user = $db->query("SELECT * FROM users WHERE email = '$email'")->fetch(PDO::FETCH_ASSOC);
    return $user;
}

/**
 * Обновляет данные пользователя в БД
 *
 * @param string $name имя пользователя
 * @param string $job работа пользователя
 * @param string $number телефон пользователя
 * @param string $adress адрес пользователя
 * @param $user_id /созданный пользователь
 * @return void
 */
function edit(string $name, string $job, string $number, string $adress, $user_id): void
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = "UPDATE users SET name = :name, job = :job, number = :number, adress = :adress WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':job', $job);
    $stmt->bindParam(':number', $number);
    $stmt->bindParam(':adress', $adress);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
}

/**
 * Смена статуса пользователя
 *
 * @param string $status
 * @param $user
 * @return void
 */
function status(string $status, $user): void
{
    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = "UPDATE users SET status = :status  WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $user);
    $stmt->execute();
}

/**
 * Добавления логотипа пользователя
 *
 * @param string $logo имя фотографии
 * @param string $tmpName имя временного пути
 * @param int $user созданный пользователь
 * @return void
 */
function add_logo(string $logo, string $tmpName, $user): void
{
    $picture_name = uniqid() . '.' . pathinfo($logo, PATHINFO_EXTENSION);

    $uploadDirectory = '../img/demo/avatars/' . $picture_name;
    move_uploaded_file($tmpName, $uploadDirectory);

    $db = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
    $sql = "UPDATE users SET image = :image  WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':image', $picture_name);
    $stmt->bindParam(':id', $user);
    $stmt->execute();
}


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
 * Админ ли
 *
 */
function is_admin(): string|bool
{
    if ($_SESSION['user']['role'] === 'admin'){
        return true;
    }
    return false;
}

/**
 * Если пользователя не админ, вернет false
 *
 */
function is_not_admin(): bool
{
    return !is_admin();
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
 * @param string $email почта пользователя
 * @param string $password пароль пользователя
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