<?php
session_start();
$text = $_POST['text'];

$serverDbname = "mysql:host=localhost;dbname=my_project"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
// Подключение к базе данных
$db = new PDO($serverDbname, $username, $password); //

$sql = "SELECT * FROM task10 WHERE text=:text";
$statement = $db->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)){
    $_SESSION['task11'] = 'Такой текст уже есть в базе';
    header('Location: ../task_11.php');
    exit();
}

// Запрос на добавление записи в столбец таблицы с именем text
// Плейсхолдер :text, который будет заменен на реальное значение при выполнении запроса.
$sql = "INSERT INTO task10 (text) VALUES (:text)";
// Подготавливает запрос к выполнению с помощью метода prepare() объекта PDO.
// Подготовка запроса позволяет использовать плейсхолдеры и обеспечивает защиту от SQL-инъекций.
$statement = $db->prepare($sql);
// Выполняет запрос на удаление с помощью метода execute().
// Значение плейсхолдера :text будет заменено на фактическое значение, которое мы получили из массива POST.
$statement->execute(['text' => $text]);


header('Location: ../task_11.php');