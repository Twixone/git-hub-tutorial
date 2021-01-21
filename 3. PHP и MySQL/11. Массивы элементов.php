<?php
// Счёт начинается с 0, а не с 1
$array = array (12, -3.25, "string", true);
echo $array[1];
$array[1] = "string"; // Замена первого эемента, но что было выше не меняется
$array[2] = 4.25;
echo "<br />". $array[1]."<br />".$array[2];
$array [] = "New Element"; // Создание нового элемента
echo "<br />". $array[4]."<hr />";

for ($i = 0; $i < count ($array); $i++) { // count - посчитать
    echo "Элемент массива с индексом $i = ".$array[$i]."<br />";
}
echo "<hr />";
/*
    // Ассоциативный массив
    $list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true);

    $list ["age"] = 10;
    $summa = 0;

    echo getAverage(array ("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));

    function getAverage ($array) {
        foreach ($array as $key => $value) {
            $summa += $value;
            echo $key."<br />";
        }
        return $summa / count ($array);
    }
    echo "<hr />";
*/
// Ассоциативный массив у другого автора

$name ["Ivanov"] = "Alex";
$name ["Wilshor"] = "Jeff";
$name ["Spectr"] = "Harvey";
echo $name ["Ivanov"]."<br />";

define ("masiv", ["Ivanova" => ["name" => "Elena", "born" => "12-03-1990"]]);
echo masiv ["Ivanova"]["name"];
echo "<br />";

$number = count ($name);
echo "Используется: ".$number." имен(и)"."<hr />";

$birth = [
    "Thomas" => "1980-11-18",
    "John" => "1992-04-28"
];
foreach ($birth as $k => $v)
    echo "$k родился $v <br />";
?>