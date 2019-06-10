<!--1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:-->
<!--если $a и $b положительные, вывести их разность;-->
<!--если $а и $b отрицательные, вывести их произведение;-->
<!--если $а и $b разных знаков, вывести их сумму;-->
<!--Ноль можно считать положительным числом.-->
<h2>Задание 1</h2>
<?php

$a = 5;
$b = -3;

if ($a >= 0 && $b >= 0) echo $a - $b;
elseif ($a < 0 && $b < 0) echo $a * $b;
elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) echo $a + $b;

?>

<!--2. Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.-->
<h2>Задание 2</h2>
<?php

$a = rand(0, 15);
echo "$a<br/>";
switch ($a) {
    case 0:
        echo $a;
        $a++;
    case 1:
        echo $a;
        $a++;
    case 2:
        echo $a;
        $a++;
    case 3:
        echo $a;
        $a++;
    case 4:
        echo $a;
        $a++;
    case 5:
        echo $a;
        $a++;
    case 6:
        echo $a;
        $a++;
    case 7:
        echo $a;
        $a++;
    case 8:
        echo $a;
        $a++;
    case 9:
        echo $a;
        $a++;
    case 10:
        echo $a;
        $a++;
    case 11:
        echo $a;
        $a++;
    case 12:
        echo $a;
        $a++;
    case 13:
        echo $a;
        $a++;
    case 14:
        echo $a;
        $a++;
    case 15:
        echo $a;
}

?>

<!--3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.-->
<h2>Задание 3</h2>
<?php

function summa ($a, $b) {
    return $a + $b;
}

function raznica ($a, $b) {
    return $a - $b;
}

function umnozhenie ($a, $b) {
    return $a * $b;
}

function delenie ($a, $b) {
    return $a / $b;
}

echo summa(10, 5).'<br/>';
echo raznica(10, 5).'<br/>';
echo umnozhenie(10, 5).'<br/>';
echo delenie(10, 5);

?>


<!--4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).-->
<h2>Задание 4</h2>
<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'summa':
            return $arg1 + $arg2;
        case 'raznica':
            return $arg1 - $arg2;
        case 'umnozhenie':
            return $arg1 * $arg2;
        case 'delenie':
            return $arg1 / $arg2;
    }
}

echo mathOperation(10, 5, 'summa').'<br/>';
echo mathOperation(10, 5, 'raznica').'<br/>';
echo mathOperation(10, 5, 'umnozhenie').'<br/>';
echo mathOperation(10, 5, 'delenie');

?>

<!--5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
вывести текущий год в подвале при помощи встроенных функций PHP.-->
<h2>Задание 5</h2>
<html>
<head>
    <title><?=$title?></title>
</head>
<body>
    <footer>
        <div class="year"><?=date('Y')?></div>
    </footer>
</body>
</html>


<!--6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
где $val – заданное число, $pow – степень.-->
<h2>Задание 6</h2>
<?php

function power($val, $pow) {
    if ($pow > 1) {
        return $val * power($val, $pow - 1);
    } else {
        return $val;
    }
}

echo power(3, 3);

?>

<!--7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,
например:-->
<!--22 часа 15 минут-->
<!--21 час 43 минуты-->
<h2>Задание 7</h2>
<?php

function currentTime() {
    $time = getdate();
    $hours = $time['hours'];
    $minutes = $time['minutes'];

    if ($hours === 1 || $hours === 21) echo "$hours час";
    elseif ($hours % 10 >= 2 && $hours % 10 <= 4)  echo "$hours часа";
    else  echo "$hours часов";

    if ($minutes % 10 === 1 && $minutes !== 11) echo " $minutes минута";
    elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4)  echo " $minutes минуты";
    else  echo " $minutes минут";
}

currentTime();