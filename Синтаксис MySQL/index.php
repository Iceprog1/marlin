<?php

//Запрос INSERT

//INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);

//table_name - имя таблицы, в которую вы хотите вставить данные.
//column1, column2, column3, ... - имена столбцов таблицы, в которые вы хотите вставить значения.
//value1, value2, value3, ... - значения, которые вы хотите вставить в соответствующие столбцы таблицы.

//Пример использования запроса INSERT:
//INSERT INTO users (id, name, age)
//VALUES (1, 'John Doe', 25);

//Вы также можете вставить несколько записей с помощью одного запроса INSERT.

//INSERT INTO users (id, name, age)
//VALUES (1, 'John Doe', 25),
//       (2, 'Jane Smith', 30),
//       (3, 'Bob Johnson', 35);

//Если вы хотите вставить значения во все столбцы таблицы, вы можете опустить список столбцов после INSERT INTO table_name

//INSERT INTO users
//VALUES (1, 'John Doe', 25);

//Запрос insert. А теперь, давайте выполним запрос insert и добавим нового пользователя:

//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Создание нового объекта PDO для подключения к базе данных
//$query = "INSERT INTO users (ID, username, email, profession, last_login, status) VALUES (7, 'Николай', 'nikolay@example.com', 'Аналитик', '2023-05-18 16:30:00', 'active')"; // Запрос INSERT
//$conn->exec($query); // Выполнение запроса
//echo "Данные успешно добавлены";

//------------------------------------------------------------------------------------------------------------------------//

//Запрос SELECT

//Запрос SELECT в MySQL используется для выборки данных из таблицы или нескольких таблиц базы данных.
//Он имеет следующий синтаксис:

//SELECT column1, column2, ...
//FROM table_name;

//column1, column2, ... - имена столбцов, которые вы хотите выбрать из таблицы. Вы можете указать "*" для выбора всех столбцов.
//table_name - имя таблицы, из которой вы хотите выбрать данные.

//Результаты выполнения запросов SELECT:

// 1. Получить все записи из таблицы "users":
//SELECT * FROM users;

// 2. Получить имена и возраст пользователей:
//SELECT Name, Age FROM users;

// 3. Получить пользователей старше 30 лет:
//SELECT * FROM users WHERE Age > 30;

// 4. Получить пользователей с зарплатой больше $6000:
//SELECT * FROM users WHERE Salary > '$6000';

// 5. Получить имена и возраст пользователей, у которых профессия "Software Engineer":
//SELECT Name, Age FROM employees WHERE Profession = 'Software Engineer';

// 6. Получить продукты с ценой выше 1000:
//SELECT * FROM products WHERE Price > 1000;

// 7. Получить продукты типа "Phone" с ценой меньше 1000:
//SELECT * FROM products WHERE Type = 'Phone' AND Price < 1000;

// 8. Получить продукты типа "Phone" или ценой выше 1500:
//SELECT * FROM products WHERE Type = 'Phone' OR Price > 1500;

//Запрос select.Давайте выполним запрос select и выведем всех активных пользователей:

//$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Создание нового объекта PDO для подключения к базе данных

//// Выполнение запроса
//$query = "SELECT * FROM users WHERE status = 'active'";
//$stmt = $db->query($query);
//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Запрос select с выводом определенного пользователя.

//$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//$stmt = $db->prepare("SELECT * FROM users WHERE ID = :id");
//$stmt->bindParam(':id', $id);
//$id = 5;
//$stmt->execute();
//$user = $stmt->fetch(PDO::FETCH_ASSOC);

//------------------------------------------------------------------------------------------------------------------------//

//Запрос UPDATE
// UPDATE используется чтобы загрузить данные в таблицу

// В таблицу users, в ключ password поставить пароль pass пользователю с id равным 1
// UPDATE users SET 'password' = 'pass' WHERE 'id' = 1

//Запрос update. Теперь обновим данные пользователя под айдишником 3

//// Создаем объект PDO
//$pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
//// Изменяем данные записи с ID 3
//$sql = "UPDATE users SET profession = 'Web-дизайнер', status = 'active' WHERE id = 3";
//$pdo->exec($sql);

//------------------------------------------------------------------------------------------------------------------------//

//Запрос DELETE
// DELETE используется чтобы удалить данные из таблицы

// Так мы удалим все записи из таблицы users
// DELETE FROM users;

// Так мы удалим все записи у пользователя с id = 2 из таблицы users
// DELETE FROM users WHERE id = 2;

//Запрос delete . Теперь удалим пользователя под айдишником 1

// Подключение к базе данных
//$db = new PDO($dsn, $username, $password);
//// Запрос на удаление пользователя с ID 1
//$query = "DELETE FROM users WHERE ID = :id";
//// Подготовка запроса
//$statement = $db->prepare($query);
//// Привязка значения параметра
//$statement->bindParam(':id', $id);
//// Установка значения параметра
//$id = 1;
//// Выполнение запроса
//$statement->execute();



//Чтобы сделать запрос безопасным, рекомендуется использовать привязку параметров с помощью подготовленных запросов.
// Вот пример модифицированного кода с использованием привязки параметров:

//// Создаем объект PDO
//$pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
//
//// Изменяем данные записи с ID 3 с использованием привязки параметров
//$sql = "UPDATE users SET profession = :profession, status = :status WHERE id = :id";
//$stmt = $pdo->prepare($sql);
//
//$profession = 'Web-дизайнер';
//$status = 'active';
//$id = 3;
//
//$stmt->bindParam(':profession', $profession);
//$stmt->bindParam(':status', $status);
//$stmt->bindParam(':id', $id);
//$stmt->execute();

//Основные методы в PDO

//Один из основных методов PDO - это метод query().
//Он выполняет запрос к базе данных и возвращает объект PDOStatement, который можно использовать для получения результатов.
//Для примера, рассмотрим следующий код:

//$sql = "SELECT * FROM users";
//$stmt = $pdo->query($sql);

//foreach ($stmt as $row) {
//    echo $row['username'];
//}

//Еще одним полезным методом является prepare().
//Он позволяет подготовить SQL-запрос с параметрами для выполнения.
//Например:

//$sql = "SELECT * FROM users WHERE id = :id";
//$stmt = $pdo->prepare($sql);
//$stmt->bindValue(':id', 1);
//$stmt->execute();
//
//$user = $stmt->fetch(PDO::FETCH_ASSOC);
//echo $user['username'];

//Метод execute() используется для выполнения подготовленного запроса с переданными значениями параметров.
//Пример:

//$sql = "INSERT INTO users (username, email) VALUES (?, ?)";
//$stmt = $pdo->prepare($sql);
//$username = 'john';
//$email = 'john@example.com';
//$stmt->execute([$username, $email]);


