<?php
    $string = "This is example!";

    echo strlen ($string)."<br />"; // Проверка сколько символов в стринг
    echo strpos ($string, "T", 4)."<br />"; // Проверка на совпадение символов, на каком начинается

    if (strpos($string, "T") === false) echo "T не найдено";
    else echo "T найдено";
    echo "<hr />";

    echo substr ($string, 3, 7)."<br />"; //  Начинает с 3(start) символа, удалил символы после 7(length)
    echo str_replace ("is", "abc", $string)."<br />"; // Удаление и замена символов
    echo str_replace (array("is", "ple"), array ("abc", "123"), $string)."<hr />"; // Удаление и замена символов массивом

    $str = "<b>XAXA, жирный шрифт</b>";
    echo htmlspecialchars($str); // Выводит на странице символы html без трансформированая, код
    echo "<hr />";

    echo strtolower($string)."<br />"; // Выводит все символы в нижнем регистре (маленькими буковками)
    echo strtoupper($string)."<br />"; // Выводит все символы в верхнем регистре (большими буковками)

    echo md5 ("123")."<br />"; // Кодировка  Для пароля

    echo trim ("   string    123   4567   ",); // Удаляет лишние пробелы


?>