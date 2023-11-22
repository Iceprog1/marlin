<?php

$images = $_FILES;

for ($i = 0;$i < count($images['images']['name']);$i++){

$uniq = uniqid();
$path = pathinfo($images['images']['name'][$i], PATHINFO_EXTENSION);

$img = $uniq . '.' . $path;

$targetDirectory = "upload/"; // Папка для загрузки файлов
$targetFile = $targetDirectory . basename($img);

    if (move_uploaded_file($images['images']['tmp_name'][$i], $targetFile)) {
        echo "Файл успешно загружен.";
    } else {
        echo "Произошла ошибка при загрузке файла.";
    }

$pdo = new PDO('mysql:host=localhost;dbname=database', 'root', '');
$sql = 'INSERT INTO images (img) VALUES (:img)';
$state = $pdo->prepare($sql);
$state->execute(['img' => $img]);

}

header('Location: ./task_17.php');

