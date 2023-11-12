<?php

//Урок 1 - Переменные

//Суть переменной это хранение информации в себе, переменная как коробка или как мусорный бак
// В переменной можно хранить любые типы данных
//$a = 'Address';
//$b = 20;
//$c = true;
//$d = [1, 2, 3, 4];

// Отсюда и название переменная, от того что она переменчива
// Переменная начинается со знака $
// Мы присвоили ей значение Adam
//$name = 'Adam';

// У переменных есть правила:
// 1. Переменная чувствительна к регистру
// 2. Переменная не может начинаться с цифр
// 3. Называть переменные понятно и на английском языке

//Задание: Сложи 2 числа и выведи результат.
//$a = 10;
//$b = 20;
//echo $a + $b;

// Результат: 30

// Конкатенация переменных

// В данном примере мы конкатенировали Привет и восклицательный знак с переменной $name.
//$name = "Дима";
//echo "Привет, " . $name . "!";

// В данном примере мы конкатенировали My name is и переменную $name.
//echo "My name is " . $name;


//Урок 2 - Типы данных

//В PHP есть несколько разных типов данных:

//Строки (strings) - это последовательность символов, которые можно использовать для представления текста. Например, "Привет, мир!" или "12345".

//Целые числа (integers) - это положительные или отрицательные числа без дробной части. Например, -10, 0, 42.

//Дробные числа (floats) - это числа с дробной частью. Например, 3.14 или -2.5.

//Булевые значения (booleans) - это значения true (истина) или false (ложь). Например, true или false.
//Массивы (arrays) - это наборы данных, которые можно хранить в одной переменной. Например, ["яблоко", "банан", "апельсин"].

//Объекты (objects) - это специальные структуры данных, которые позволяют хранить данные в определенном формате. Например, объект "автомобиль" может иметь свойства, такие как "марка", "модель", "год выпуска".

//NULL - это специальное значение, которое означает "ничего". Например, если переменная еще не имеет значения, ее можно установить в NULL.

//Так что, когда ты создаешь переменную в PHP, ты можешь выбрать тип данных, который ты хочешь использовать, чтобы определить, какие виды информации ты можешь хранить в этой переменной.
//Например, если ты хочешь хранить возраст в переменной, ты можешь использовать тип данных integer (целое число).

//Урок 3 - Массивы

//Массивы - это как коробка со множеством карманов, в которых можно хранить много разных вещей.
//В PHP массивы нужны, чтобы хранить много данных одновременно и работать с ними.

// ------------------------------------------------------------------------------------------------

//Чтобы объявить массив в PHP, нужно использовать специальный синтаксис с квадратными скобками:
//$my_array = [1, 2, 3];

// ------------------------------------------------------------------------------------------------

//Чтобы добавить новый элемент в массив, нужно использовать функцию array_push:

//$my_array = [1, 2, 3];
//array_push($my_array, 4);

//Теперь в массиве $my_array будет четыре элемента: 1, 2, 3 и 4.

// ------------------------------------------------------------------------------------------------

//Чтобы удалить элемент из массива, нужно использовать ключевое слово unset:

//$my_array = [1, 2, 3];
//unset($my_array[1]);

//В этом примере мы удалили второй элемент массива (который имел индекс 1).
//Теперь массив $my_array содержит только два элемента: 1 и 3.

// ------------------------------------------------------------------------------------------------

//В PHP unset используется для удаления переменных, массивов или элементов массива.
//Оператор unset позволяет освободить память, занимаемую переменной, и, при необходимости, изменить содержимое массива.

//$variable = "Hello";
//unset($variable);
// $variable больше не существует

// ------------------------------------------------------------------------------------------------

//Чтобы изменить значение элемента массива, нужно обратиться к нему по его индексу и присвоить ему новое значение:

//$my_array = [1, 2, 3];
//$my_array[1] = 4;

//В этом примере мы изменили второй элемент массива (который имел индекс 1) на 4.

// ------------------------------------------------------------------------------------------------

//Чтобы обращаться к элементам массива с помощью ключей, нужно использовать ассоциативные массивы. Например:

//$my_array = ['apple' => 'red', 'banana' => 'yellow'];
//echo $my_array['apple']; // выведет 'red'

//В этом примере мы создали ассоциативный массив с двумя элементами: 'apple' со значением 'red' и 'banana' со значением 'yellow'.
//Затем мы обратились к элементу массива с ключом 'apple' и вывели его значение.

// ------------------------------------------------------------------------------------------------

//Чтобы перебрать элементы массива, можно использовать цикл foreach. Например:

//$my_array = [1, 2, 3];
//foreach ($my_array as $value) {
//    echo $value;
//}

// ------------------------------------------------------------------------------------------------

//Многомерные массивы - это массивы, которые содержат другие массивы в качестве своих элементов.
//Они используются, когда нужно хранить и обрабатывать большое количество данных, организованных в виде таблицы или матрицы.

//Например, мы можем создать многомерный массив, который содержит информацию о нескольких студентах:

//$students = [
//    ['name' => 'John', 'age' => 20, 'grades' => [5, 4, 4]],
//    ['name' => 'Alice', 'age' => 19, 'grades' => [4, 5, 3]],
//    ['name' => 'Bob', 'age' => 21, 'grades' => [3, 4, 5]],
//];

// ------------------------------------------------------------------------------------------------

//Ассоциативные массивы - это массивы, которые используют строки в качестве индексов, вместо целых чисел, как в обычных массивах.
//Они позволяют хранить и обрабатывать данные в виде пар "ключ-значение".

//$fruits = [
//    'apple' => 'red',
//    'banana' => 'yellow',
//    'orange' => 'orange',
//];

//В PHP есть множество функций, которые помогают работать с массивами. Например:

//array_map - применяет заданную функцию ко всем элементам массива и возвращает новый массив с результатами;

//Пример:
//$numbers = [1, 2, 3];
//$numbers_plus_one = array_map(function($x) {
//    return $x + 1;
//}, $numbers);

// $numbers_plus_one содержит теперь [2, 3, 4]

// ------------------------------------------------------------------------------------------------

//array_reduce - сводит массив к единственному значению, используя заданную функцию;

// Пример:
//$numbers = [1, 2, 3];
//$sum = array_reduce($numbers, function($acc, $x) {
//    return $acc + $x;
//}, 0);

// $sum содержит теперь 6

// ------------------------------------------------------------------------------------------------

//array_walk - применяет заданную функцию ко всем элементам массива вместе с их индексами;

// Пример:
//$numbers = [1, 2, 3];
//array_walk($numbers, function($value, $key) {
//    echo "[$key] => $value\n";
//});

// выводит:
// [0] => 1
// [1] => 2
// [2] => 3


//Урок 3 - Циклы

//Циклы - это инструменты, которые позволяют повторять один и тот же код несколько раз.
//Например, если вы хотите напечатать числа от 1 до 10 или запросить у пользователя ввод до тех пор, пока он не введет правильный ответ.

// ------------------------------------------------------------------------------------------------

// Типы циклов:

//В PHP есть несколько типов циклов, вот некоторые из них:

//Цикл for: используется, когда вы знаете, сколько раз вы хотите повторить код.
//Например, если вы хотите напечатать числа от 1 до 10. То есть, код повторяется определенное количество раз.

//for ($i = 1; $i <= 10; $i++) {
//    echo $i;
//}
//Этот код будет выводить числа от 1 до 10. В первой строке мы создаем переменную $i и присваиваем ей значение 1.
//Во второй строке мы проверяем, не больше ли $i чем 10, и если это так, то продолжаем выполнение цикла.
//В третьей строке мы выводим значение $i на экран, а в четвертой строке мы увеличиваем значение переменной $i на 1.

// ------------------------------------------------------------------------------------------------

//Цикл while: используется, когда вы хотите повторять код, пока условие истинно.
//Например, если вы хотите, чтобы программа продолжала запрашивать у пользователя ввод, пока он не введет правильный ответ.
//То есть, код будет повторяться, пока условие не перестанет быть истинным.

//$answer = '';
//while ($answer != 'yes') {
//    echo 'Do you want to continue?';
//    $answer = readline();
//}
//Этот код будет запрашивать у пользователя ввод, пока он не введет "yes".
//В первой строке мы создаем переменную $answer и присваиваем ей пустое значение.
//Во второй строке мы говорим, что мы хотим повторять код, пока $answer не равно "yes".
//В третьей строке мы выводим сообщение на экран, запрашивая у пользователя ввод.
//В четвертой строке мы записываем введенный пользователем текст в переменную $answer.

// ------------------------------------------------------------------------------------------------

//Цикл do-while: похож на цикл while, но он гарантирует, что код выполнится хотя бы один раз.
//Например, если вы хотите, чтобы программа сначала выполнила какой-то код, а потом продолжила запрашивать у пользователя ввод до тех пор, пока он не введет правильный ответ.

//$answer = '';
//do {
//    echo 'Do you want to continue?';
//    $answer = readline();
//} while ($answer != 'yes');

//Этот код будет запрашивать у пользователя ввод хотя бы один раз и будет продолжать запрашивать, пока он не введет "yes".
//В первой строке мы создаем переменную $answer и присваиваем ей пустое значение.
//Во второй строке мы говорим, что мы хотим повторять код, пока $answer не равно "yes".
//В третьей строке мы выводим сообщение на экран, запрашивая у пользователя ввод.
//В четвертой строке мы записываем введенный пользователем текст в переменную $answer.

// ------------------------------------------------------------------------------------------------

//Цикл foreach: используется для перебора элементов в массиве.
//Например, если вы хотите вывести список фруктов, которые хранятся в массиве $fruits.

//$fruits = array('apple', 'banana', 'orange');
//foreach ($fruits as $fruit) {
//    echo $fruit;
//}

//Этот код будет выводить элементы в массиве $fruits. В первой строке мы создаем массив $fruits и заполняем его фруктами.
//Во второй строке мы используем цикл foreach для перебора элементов в массиве.
//Мы говорим, что мы хотим перебрать каждый элемент в массиве $fruits, и для каждого элемента мы создаем переменную $fruit и выводим ее значение на экран.

// ------------------------------------------------------------------------------------------------

// Как использовать операторы continue и break в циклах

//Операторы continue и break помогают управлять поведением циклов.
//Оператор continue позволяет пропустить текущую итерацию цикла и перейти к следующей.
//Оператор break позволяет выйти из цикла полностью.

//Например, представьте, что у нас есть массив фруктов, но мы хотим вывести только яблоки.
//Мы можем использовать оператор continue для пропуска всех других фруктов:

//foreach ($fruits as $fruit) {
//    if ($fruit != 'apple') {
//        continue;
//    }
//    echo $fruit;
//}

//И это выведет только яблоки:
//apple
//apple
//apple

// ------------------------------------------------------------------------------------------------

//Теперь представим, что мы хотим выйти из цикла, как только мы найдем первое яблоко. Мы можем использовать оператор break:

//foreach ($fruits as $fruit) {
//    if ($fruit == 'apple') {
//        echo $fruit;
//        break;
//    }
//}

//И это выведет только одно яблоко:
//apple

// ------------------------------------------------------------------------------------------------

// Как обрабатывать строки в циклах

//Строки - это просто текст. Например, строка может быть именем человека или адресом электронной почты.
// В PHP вы можете использовать цикл for для перебора всех символов в строке. Вот пример:

//$name = 'John';
//for ($i = 0; $i < strlen($name); $i++) {
//    echo $name[$i];
//}

//Это выведет каждый символ в строке:
//J
//o
//h
//n

// ------------------------------------------------------------------------------------------------

//Как создавать и использовать пользовательские функции в циклах

//Пользовательские функции - это фрагменты кода, которые вы можете написать один раз и затем использовать много раз.
//Например, если вы хотите проверить, является ли число четным или нечетным, вы можете написать функцию:

//function is_even($number) {
//    if ($number % 2 == 0) {
//        return true;
//    } else {
//        return false;
//    }
//}

// ------------------------------------------------------------------------------------------------

//Какие ошибки могут возникать при использовании циклов в PHP и как их избежать

//При использовании циклов в PHP могут возникать различные ошибки, но наиболее частые из них - это бесконечные циклы и выход за пределы массива.

//Бесконечный цикл возникает, когда условие цикла никогда не становится ложным, поэтому цикл продолжает работать бесконечно.

//Например:

//$i = 0;
//while ($i < 10) {
//    echo $i;
//}

//В этом примере цикл будет работать бесконечно, так как $i никогда не станет больше или равно 10.
//Чтобы избежать этой ошибки, нужно убедиться, что условие цикла станет ложным в какой-то момент.

// ------------------------------------------------------------------------------------------------

//Выход за пределы массива возникает, когда вы пытаетесь обратиться к элементу массива, которого не существует. Например:

//$fruits = array('apple', 'banana', 'orange');
//echo $fruits[3];

//В этом примере мы пытаемся обратиться к четвертому элементу массива, который не существует, поэтому мы получим ошибку.
//Чтобы избежать этой ошибки, нужно убедиться, что вы обращаетесь только к существующим элементам массива.

//Урок 4 - Условия

//Операторы сравнения

// > (больше) - это означает, что одно число больше другого. Например, 10 > 5 - это правда, потому что 10 больше, чем 5.
// < (меньше) - это означает, что одно число меньше другого. Например, 5 < 10 - это правда, потому что 5 меньше, чем 10.
// >= (больше или равно) - это означает, что одно число больше или равно другому. Например, 10 >= 10 - это правда, потому что 10 равно 10.
// <= (меньше или равно) - это означает, что одно число меньше или равно другому. Например, 5 <= 10 - это правда, потому что 5 меньше, чем 10.
// == (равно) - это означает, что два значения равны друг другу. Например, 5 == 5 - это правда, потому что оба значения равны 5.
// != (не равно) - это означает, что два значения не равны друг другу. Например, 5 != 10 - это правда, потому что 5 не равно 10.

// ------------------------------------------------------------------------------------------------

//Оператор эквивалентности

//Оператор эквивалентности - это еще один способ сравнения значений. Он похож на оператор сравнения (==), но более строгий.
//Он проверяет не только равенство значений, но и их типы данных. В PHP мы используем ===, чтобы проверить, равняются ли два значения друг другу и имеют ли они одинаковый тип данных.
//Вот несколько примеров:
//
//5 === 5 - это правда, потому что оба значения равны 5 и имеют тип данных "integer".
//5 === "5" - это ложь, потому что хотя оба значения равны 5, они имеют разные типы данных - "integer" и "string".

// ------------------------------------------------------------------------------------------------

//Логические операторы в PHP

//И (&&)
//ИЛИ (||)
//НЕ (!)

// ------------------------------------------------------------------------------------------------

//Тернарный оператор
//Вот простой пример использования тернарного оператора в PHP:
//
// Проверяем, является ли число $x четным. Если да, то присваиваем $result значение "Четное", иначе "Нечетное"
//$x = 6;
//$result = ($x % 2 == 0) ? "Четное" : "Нечетное";
//echo $result; // выведет "Четное"

// ------------------------------------------------------------------------------------------------\

//Оператор switch

//Конструкция switch в PHP используется для проверки значения переменной на соответствие нескольким возможным вариантам и
//выполнения различных действий в зависимости от того, какое значение было найдено.

//$color = "red";
//switch ($color) {
//    case "red":
//        echo "Color is red";
//        break;
//    case "blue":
//        echo "Color is blue";
//        break;
//    case "green":
//        echo "Color is green";
//        break;
//    default:
//        echo "Color is not red, blue, or green";
//}

//В этом примере переменная $color содержит значение "red". Конструкция switch проверяет значение переменной $color на соответствие каждому case - в данном случае, на соответствие "red", "blue", или "green". Если значение переменной соответствует одному из вариантов, то будет выполнено соответствующее действие, и код продолжит выполняться до break.
//Если значение не соответствует ни одному из вариантов, то будет выполнено действие default.

//  Оператор switch можно использовать только с переменными, которые могут быть сравнены при помощи ==.
//  Выражения case могут содержать любое значение, которое может быть сравнено при помощи ==. Это могут быть целые числа, строки, константы и т.д.
//  Каждое выражение case должно заканчиваться оператором break, иначе будут выполняться все последующие case.
//  Если ни одно выражение case не соответствует значению переменной, будет выполнено действие default, если оно присутствует.
//  Можно объединять несколько выражений case при помощи оператора :. Например: case "red": case "orange": echo "Color is red or orange"; break;.
//  Можно использовать оператор switch без выражения default.
//  Порядок выражений case важен. Они проверяются сверху вниз, поэтому первое соответствие, которое будет найдено, будет выполнено.
//  Можно использовать оператор switch внутри цикла или функции.
//  Можно объединять несколько выражений case при помощи оператора :. Например: case "red": case "orange": echo "Color is red or orange"; break;.

//Урок 5 - Ошибки

//В PHP существует множество типов ошибок, которые могут возникнуть в процессе написания и выполнения программ. Некоторые из наиболее распространенных ошибок в PHP включают:

//Синтаксические ошибки - возникают, когда вы нарушаете синтаксические правила языка PHP.
// Это может быть вызвано написанием неправильного синтаксиса или незакрытым блоком кода.
// Синтаксические ошибки обычно возникают во время выполнения скрипта и выдают сообщение об ошибке.

//Ошибки времени выполнения - возникают, когда программа пытается выполнить недопустимую операцию, например, деление на ноль или вызов несуществующей функции.
// Они также могут возникать из-за неправильной работы с памятью или других системных ресурсов.

//Ошибки логики - возникают, когда программа не работает так, как ожидалось, например, из-за неправильного алгоритма или неправильной логики.

//Ошибки доступа к файлам - возникают, когда программа пытается получить доступ к файлу или каталогу, к которому у нее нет прав.

//Ошибки базы данных - возникают, когда программа пытается выполнить недопустимую операцию с базой данных, например, запрос на несуществующую таблицу или неправильный синтаксис запроса.

//Урок 6 - Функции

// Type hinting (подсказка по типу) - это механизм в языках программирования,
// который позволяет указать ожидаемый тип данных для параметра функции или метода.
// Пример : int

// Внутри скобок данной функции указывается тип данных, который мы принимаем в параметр.
// Пример (int $a, int $b)
//function sum(int $a, int $b): int
//{
//    $result = $a + $b;
//    return $result;
//}

// С использованием именованных аргументов, мы можем обращаться к любому параметру, без очередности.
//$total = sum(a: 5, b: 7);
//print_r($total) ; // вывод результата на экран

// Полезные функции
// empty - проверяет, является ли переменная пустой или не пустой.

// Пример использования функций с помощью тернарного оператора
//$userName = '';
//$result = empty($userName) ? 'Пустота' : $userName;
//echo $result;

// Пример использования функции
//if (empty($userName)) {
//    echo "Пустота";
//    exit;
//}else {
//    echo $userName;
//}

// ------------------------------------------------------------------------------------------------\

// strlen - проверка длину строки.
// Пример использования функций
//$userName = $_POST['userName'];
//
//if (strlen($userName) < 3) {
//    echo "Имя пользователя слишком короткое.";
//    exit;
//}

//Урок 7 - Глобальные массивы

//$_GET, $_POST, $_SESSION и $_COOKIE - это глобальные массивы в PHP, которые используются для хранения различных типов данных.

//$_GET: массив, содержащий данные, отправленные на сервер через метод GET.
//Данные передаются в URL в виде параметров. Например, если на страницу index.php передать параметры ?name=John&age=30, то они будут доступны в массиве $_GET.
//Чтобы получить значение параметра, можно использовать конструкцию $_GET['name'].
//Важно отметить, что данные, передаваемые методом GET, ограничены по размеру и могут быть уязвимы для атак типа XSS.

// ------------------------------------------------------------------------------------------------\

//$_POST: массив, содержащий данные, отправленные на сервер через метод POST. Данные передаются в теле запроса и не видны в URL.
//Данные, отправленные методом POST, не имеют ограничений по размеру и обеспечивают более безопасную передачу данных, чем метод GET

// ------------------------------------------------------------------------------------------------\

//$_SESSION: массив, содержащий данные, сохраненные между различными запросами, связанными с одной и той же сессией.
//Сессия создается с помощью функции session_start(). Затем можно сохранять данные в массив $_SESSION, используя ключи и значения.
//Данные в массиве $_SESSION будут доступны на всех страницах, связанных с текущей сессией, пока сессия не будет уничтожена.

// ------------------------------------------------------------------------------------------------\

//$_COOKIE: массив, содержащий куки, сохраненные на компьютере пользователя
//Куки - это данные, отправляемые на сервер вместе с каждым запросом.
//Они могут использоваться для хранения информации о пользователе, такой как предпочтения, идентификаторы сессии и т.д.
//Данные в массиве $_COOKIE могут быть прочитаны и изменены только на стороне клиента.