<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les2</title>
</head>
<body>
<!--1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:-->
    <?php
        $a = 5;
        $b = 8;
        if($a > 0 & $b > 0) {
            echo $a - $b;
        }
    ?>
    <?php
        $a = -5;
        $b = -8;
        if($a < 0 & $b < 0) {
            echo $a * $b;
        }
    ?>

    <?php
        $a = -5;
        $b = -8;
        if(($a < 0 || $a > 0) & ($b < 0 || $b >0)) {
            echo $a + $b;
        }
    ?>

<!--2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.-->

    <?php
        $a = 5;
        switch ($a) {
            case 0:
                echo 0;
            case 1:
                echo 1;
            case 2:
                echo 2;
            case 3:
                echo 3;
            case 4:
                echo 4;
            case 5:
                echo 5;
            case 6:
                echo 6;
            case 7:
                echo 7;
            case 8:
                echo 8;
            case 9:
                echo 9;
            case 10:
                echo 10;
            case 11:
                echo 11;
            case 12:
                echo 12;
            case 13:
                echo 13;
            case 14:
                echo 14;
            case 15:
                echo 15;
        }
    ?>

<!--3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.-->
<!--4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
$operation – строка с названием операции. В зависимости от переданного значения операции
выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).-->
    <?php
        echo forOperations(5, 3, '+');

        function forOperations ($operator1, $operator2, $arithmeticSign) {
            switch ($arithmeticSign) {
                case '-': {
                    return $operator1 - $operator2;
                    break;
                }
                case '+': {
                    return $operator1 + $operator2;
                    break;
                }
                case '*': {
                    return $operator1 * $operator2;
                    break;
                }
                case '/': {
                    return $operator1 / $operator2;
                    break;
                }
            }
        }
    ?>

<!--5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.-->

    <?php
        echo date('Y');
    ?>
</body>
</html>