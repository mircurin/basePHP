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

    <?php
        $a = 5;
        switch (true){
            
        }
    ?>
</body>
</html>