<?php

// Крутим все прилетевшие фотографии
for ($i = 0; $i < count($_FILES['image']['name']); $i++){
    upload($_FILES['image']['name'][$i],$_FILES['image']['tmp_name'][$i]);
}

// Функция загрузки фотографии в базу данных и в папку.
function upload($fileName, $tmpName){
$extension = pathinfo($fileName, PATHINFO_EXTENSION); // Получаем только расширение файла

$int = uniqid(); // Создаем уникальный номер
$pictureName = $int . '.' . $extension; // Конкатенируем уникальный номер, точку и расширение файла

$uploadDirectory = '../decisions/upload/'; // Папка для загрузки файлов на сервер
$targetPath = $uploadDirectory . $pictureName; // Полный путь для сохранения файла на сервере

// Перемещает загруженный файл в новое место move_uploaded_file
move_uploaded_file($tmpName, $targetPath);

$serverDbname = "mysql:host=localhost;dbname=my_project"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$dbPassword = ""; // Пароль пользователя базы данных
$db = new PDO($serverDbname, $username, $dbPassword); // Подключение к базе данных
$sql = 'INSERT INTO images (image) VALUES (:image)';
$state = $db->prepare($sql);
$state->execute(['image' => $pictureName]);
}

header('Location: ../task_17.php');