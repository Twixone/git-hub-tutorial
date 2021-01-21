<?php
//Значения константы нельзя изменить
echo PHP_VERSION;
define("PI", 3.14); //Задаем константу PI
echo "<br />";
echo PI; //Вывод PI
echo "<br />";
echo defined ("PI"); //Проверка если константа PI до этого
?>