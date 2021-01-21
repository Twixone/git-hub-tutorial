<?php
    // Подключение к БД
    $mysqli = new mysqli ("localhost", "root", "", "mybase");
    $mysqli -> query ("SET NAMES 'utf8"); // Установка кодиковки в таблице
    /*
        // Управление в БД
        // Добавление записи в users, внимательно с ковычками
        $success = $mysqli -> query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('userphp', '".md5(12345)."', '".time()."')");
        echo $success;

        // Добавление нескольких пользователей
        for ($i = 1; $i < 10; $i++){
            $mysqli -> query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('$i', '".md5("$i")."', '".time()."')");

        }

        // Изменение данных в таблице
        $mysqli -> query ("UPDATE `users` SET `reg_date` = '10' WHERE `login` = `user` OR (`id` > 4 AND `id` < 8)");

        // Удаление значения из таблички
        $mysqli -> query ("DELETE FROM `users` WHERE `id` > 4 AND `id` <7");
        */

    // Создание дополнительных пользователей
    for ($i = 0; $i < 10; $i++){
        $mysqli->query("INSERT INTO `users` (`login`,`password`, `reg_date`) VALUES ('User_$i', '".md5($i)."', '".time()."')");
    }


    //Выбор записей из БД
    function printResult ($result_set ){
        echo "Колличество записей равно - ".$result_set->num_rows."<br />";
        while (($row = $result_set->fetch_assoc()) !=false){
            print_r ($row);
            //echo $row ["login"];
            echo "<br />";

        }
        echo "<hr />";
    }

    $result_set = $mysqli  -> query("SELECT * FROM `users` ");
    printResult($result_set);

    // Вывод выборочных значений таблички
    $result_set = $mysqli  -> query("SELECT `id`, `login` FROM `users` WHERE `id` > 7 ");
    printResult($result_set);

    // Сотрировка
    $result_set = $mysqli  -> query("SELECT * FROM `users` WHERE `id` < 8 ORDER BY `id` ASC "); // ASC-возрастание DESC-убывание
    printResult($result_set);

    // Выбока данны, сколько показывать записей
    $result_set = $mysqli  -> query("SELECT * FROM `users` WHERE `id` < 8 ORDER BY `login` ASC LIMIT 0, 2 ");
    printResult($result_set);

    // Выбор пользователей по словосочетанию(поиск)
    $result_set = $mysqli  -> query("SELECT * FROM `users` WHERE `login` LIKE '%ser%'");
    printResult($result_set);

    // Счет колличества id
    $result_set = $mysqli  -> query("SELECT COUNT(`id`) FROM `users`");
    printResult($result_set);

    $mysqli -> close (); // Закрытие сессии пользователя





?>