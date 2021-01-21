<?php
$string = "Example";
$num = 0;

$bool_1 = $string == true;
echo "$bool_1 = $string == true;"; //Строчка заполнена

$bool_2 = $num == "";
echo "<br /> $bool_2 = $num == \"\";<hr />"; //Строчка пустая

$bool_3 = $string === true;
echo "$bool_3 = $string === true;"; //Строчка заполнена

$bool_4 = $num === "";
echo "<br /> $bool_4 = $num === \"\";<hr />"; //Строчка пустая



?>