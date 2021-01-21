<?php
    $start = microtime(true);

    echo time()."<br />"; // Прошло с 01.01.1970 секунд, с момента создания скрипта

    echo microtime (true)."<br />"; //  До милисекунд

    echo "Время работы скрипта: ".(microtime(true) - $start)." секунд <br />";

    $time = mktime (12,35,23, 12,7,2007);
    echo date ("Y-m-d H:i:s", $time)."<hr />";

    $array = getdate ($time); //  Массив из даты
    print_r ($array);

    echo "<hr />".checkdate (2, 28,2012); // Проверка существует такая дата или нет


?>