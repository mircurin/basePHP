<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.-->
    <?php
        $a = 0;
        while ($a++<= 100) {
            if ($a%3 == 0) echo ' ' . $a;
        }
    ?>

    <!--2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:-->
    <?php
        $a = -1;

        do {
            $a++;

            if($a === 0) {
                echo $a . ' – это ноль';
            } elseif($a%2==0){
                echo $a . ' – четное число.';
            } elseif ($a%2!==0){
                echo $a . ' – нечетное число.';
            }
        } while($a <= 10);
    ?>

<!--3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,
а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:-->
    <?php
    $arrayObl = [
        'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
        'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск', 'Иловля']
    ];
    function displayCity($arrayObl)
    {
        if (!is_array($arrayObl)) {
            return print "incorrect argument '{$arrayObl}'";
        }
        foreach ($arrayObl as $key => $value) {
            echo $key . '<br>';
            for ($i = 0; $i < $arrayLength = count($arrayObl[$key]); $i++) {
                //находим последний элемент вложенного массива для переноса строки
                if ($i == $arrayLength - 1) {
                    echo $arrayObl[$key][$i] . '.' . '<br>';
                } else {
                    //если не последний, ставим запятую
                    echo $arrayObl[$key][$i] . ', ';
                }
            }
        }
    }
    displayCity($arrayObl);
    ?>

<!--4. Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).-->
    <?php
        function translit($string)
        {
            if (!is_string($string)) {
                return 'incorrect argument';
            }
            $ruChars = 'А	Б	В	Г	Д	Е	Ё	Ж	З	И	Й	К	Л	М	Н	О	П	Р	С	Т	У	Ф	Х	Ц	Ч	Ш	Щ	Ъ	Ы	Ь	Э	Ю	Я';
            $enChars = 'A	B	V	G	D	E	E	ZH	Z	I	Y	K	L	M	N	O	P	R	S	T	U	F	KH	TS	CH	SH	SCH	’ 	Y	’ 	E	YU	YA';
            //совмещенный массив
            $tranArr = array_combine(explode('	', mb_strtolower($ruChars)), explode('	', strtolower($enChars)));
            //преобразуем аргумент (строку) в массив
            $stringArr = preg_split('//u', mb_strtolower($string), 0, PREG_SPLIT_NO_EMPTY);
            $requestedArr = [];
            //перебираем строку и для каждой буквы ищем совпадение в массиве транслита
            for ($i = 0; $i < count($stringArr); $i++) {
                foreach ($tranArr as $key => $value) {
                    //если находим, добавляем в новый массив
                    if ($stringArr[$i] == $key) {
                        array_push($requestedArr, $value);
                        break;
                        //если встречаются знаки пунктуации или пробелы, добавляем без обработки
                    } elseif (preg_match('/[[:punct:]]|\s/', $stringArr[$i])) {
                        array_push($requestedArr, $stringArr[$i]);
                        break;
                    }
                }
            }
            //выводим на экран
            return implode($requestedArr);
        }
        echo translit('Ехал Грека через реку. 
                            Видит Грека в реке рак. 
                            Сунул в реку руку Грека. 
                            Рак за руку Греку - цап.');
    ?>

<!--5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.-->
    <?php
        function replaceSpace($string)
        {
            if (!is_string($string)) {
                return "incorrect argument {$string}";
            }
            return preg_replace('/\s/', '_', $string);
        }
        echo replaceSpace('Ехал Грека через реку. Видит Грека в реке рак. Сунул в реку руку Грека. Рак за руку Греку - цап.');
    ?>

<!--6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать,
как можно реализовать меню с вложенными подменю? Попробовать его реализовать.-->

</body>
</html>