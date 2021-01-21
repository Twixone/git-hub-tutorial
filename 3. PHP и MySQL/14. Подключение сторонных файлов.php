<?php
    // require Подключает документы, если документа не существует, то компиляция остановится
    // include Подключает документы, если документа нет, то продолжает

    $title = "Главная страница";
    include_once "header.php";
    echo "Тело документа";
    include_once "footer.php";

    include_once  "page.php";


?>