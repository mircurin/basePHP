<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo 'this TITLE'?></title>
</head>
<body>
    <?php
        $a = 5;
        $b = '05';
        var_dump($a == $b);//Гибкое сравнение с помощью ==, $b поставил как число
        var_dump((int)'012345');//приведение к типу integer
        var_dump((float)123.0 === (int)123.0);//Жесткое сравнение с помощью ===, не совпадение типов
        var_dump((int)0 === (int)'hello, world');//Жесткое сравнение с помощью ===, hello, world даст 0
    ?>
    <br>
    <?php
        $aa = 1;
        $bb = 2;
        echo 'a = ' . $aa;
        ?>
    <br>
    <?php
        echo 'b = ' . $bb;
        $aa= ($bb + $bb) - ++$aa;
        $bb = --$bb;
        ?>
    <br>
    <?php
        echo 'a = ' . $aa;
        ?>
    <br>
    <?php
        echo 'b = ' . $bb;
        ?>
</body>
</html>