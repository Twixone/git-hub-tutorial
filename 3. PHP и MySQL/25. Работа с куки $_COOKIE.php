<?php
/*
setcookie ("num", 10, time() + 7 ); // Сохраняет авторизацию на сайте до закрытия страницы или браузера
                                                        // time удаляет куки через учазанное время в секундах
if (isset ($_COOKIE ["num"]))
    echo "Куки установлено";
else
    echo "Куки не установлено";
echo "<hr />";
*/

    // Сколько разпользователь обновил страницу
    $num = (isset ($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
    $num++;
    setcookie ("num", $num, time () + 4);
    echo "Пользователь обновил страницу $num раз";
?>