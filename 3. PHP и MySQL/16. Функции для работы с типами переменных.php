<?php
$x = 15;
if (isset ($x)) echo "Переменная существует";
else echo "Переменная не существует";
echo "<hr />";

unset ($x); // Удаление переменной
if (isset ($x)) echo "Переменная существует";
else echo "Переменная не существует";
echo "<hr />";

$x = "15";
$bool = false;
$null = NULL;
echo "Is Numeric - ".is_numeric($x)."<hr />"; // Проверка перенной, явзляется ли оно числом
echo "Is Integer - ".is_integer($x)."<hr />"; // Провека именно на целочисленный
echo "Is Double - ".is_double($x)."<hr />"; // Проверка на типо переменных float, любая переменная с точкой
echo "Is String - ".is_string($x)."<hr />"; // Проверка на строковую переменную
echo "Is Bullean - ".is_bool($bool)."<hr />"; // Правда или лож
echo "Is Scalar - ".is_scalar($bool)."<hr />"; // Проверка на переменную
echo "Is null - ".is_null($null)."<hr />"; // Проверка на значение
echo "Is array - ".is_array($x)."<hr />"; // Проверка на  массив
echo "Is Type - ".gettype($x)."<hr />"; // Какой тип у переменной
echo "Is Type - ".gettype($null)."<hr />";



?>