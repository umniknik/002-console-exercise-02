<html>

<head>
    <title>PHP Test</title>
</head>

<body>


    <?php

    echo 'Введите первое число -> ';

    $number1 = trim(fgets(STDIN));

    //Проверка, что введено целочисленное значени 
    if (!filter_var($number1, FILTER_VALIDATE_INT)) {
        fwrite(STDERR, 'Введите, пожалуйста, число');
        exit(1);
    }

    echo 'Введите второе число -> ';

    $number2 = trim(fgets(STDIN));

    //Проверка, что второе число не равно нулю
    if ($number2 === '0') {
        fwrite(STDERR, 'Делить на 0 нельзя');
        exit(1);
    }

    //Проверка, что введено целочисленное значени 
    if (!filter_var($number2, FILTER_VALIDATE_INT)) {
        fwrite(STDERR, 'Введите, пожалуйста, число');
        exit(1);
    }

    //Выводим результат деления первого числа на второе
    fwrite(STDOUT, $number1 . ':' . $number2 . '=' . $number1 / $number2);

    ?>

</body>


</html>