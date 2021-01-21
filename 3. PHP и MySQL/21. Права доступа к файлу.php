<?php
    // Существуют на unix

    echo __File__; // Глобальная переменная нахождения файла
    echo "<hr />";
    fileperms(__FILE__);
    chmod (__FILE__, 0777);


?>