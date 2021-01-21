<?php
function printWords ($sum, $x, $y) {
    // Тело функции
    $sum = math ($x, $y);
    echo "$sum";
}

function math ($first, $second) {
    $summa = $first + $second;
    return $summa;
}

$x = 12;
$y = 35;

printWords ($sum, $x, $y);


echo "<hr />";
function cook ($ingredients, $meal) {
    //echo "Беру $ingredients <br/>";
    //echo "Готовлю... <br />";
    return "Блюдо $meal готово";

}

$meal = cook ("мясо, тесто, яйца, сыр", "Суп");
var_dump($meal);
?>