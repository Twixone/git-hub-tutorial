<?php
    $massage = "Это самое простое сообщение в  мире";
    $to = "kudryshov1997@mail.ru"; // Куда приходит сообщение
    $from = "kudryshov1997@gmail.com"; // Отправитель
    $subject = "Тема сообения";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\n Replay-to: $from\r\n Content-type: text/plain; charset = utf-8\r\n"; // Кнопка ответа на сообщение
    mail ($to, $subject, $massage, $headers);


?>