<?php
session_start();
if(isset($_POST["send"])) {
    //print_r ($_POST); //Проверка работоспособности
    $from = htmlspecialchars($_POST ["from"]);
    $to = htmlspecialchars($_POST ["to"]);
    $subject = htmlspecialchars($_POST ["subject"]);
    $massage = htmlspecialchars($_POST ["massage"]);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["massage"] = $massage;

    //Проверка на ошибки
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_massage = "";
    $error = false;
    if ($from == "" || !preg_match("/@/", $from)) {
        $error_from = "Введите корректный email";
        $error = true;
    }
    if ($to == "" || !preg_match("/@/", $to)) {
        $error_to = "Введите корректный email";
        $error = true;
    }
    if (strlen($subject) == 0) {
        $error_subject = "Введите тему сообещения";
        $error = true;
    }
    if (strlen($massage) == 0) {
        $error_massage = "Введите сообщение";
        $error = true;
    }
    if (!$error) {
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\n Reply=to: $from\r\n\ Content-type: text/plain; charset=utf-8\r\n";
        mail ($to, $subject, $massage, $headers);
        header ("Location: success.php?send=1");
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Обратная связь</title>
    <meta http-equiv="Content-Type" content="text/html charset=utf-8">
</head>
<body>
<h2>Форма обратной связи</h2>
<form name=="feedback action="" method="post">
    <lable>От кого:</lable> <br />
    <input type="text" name="from" value="<?= $_SESSION ["from"] ?>" />
    <span style="color:red"><?=$error_from?></span> <br /> <!-- Ошибка в веденных полях -->
    <lable>Кому:</lable> <br />
    <input type="text" name="to" value="<?= $_SESSION ["to"]?>" />
    <span style="color:red"><?=$error_to?></span> <br /> <!-- Ошибка в веденных полях -->
    <lable>Тема:</lable> <br />
    <input type="text" name="subject" value="<?= $_SESSION ["subject"]?>" />
    <span style="color:red"><?=$error_subject?></span> <br /> <!-- Ошибка в веденных полях -->
    <lable>Сообщение:</lable> <br />
    <textarea name="massage" cols="30" rows="10"><?= $_SESSION ["massage"]?></textarea>
    <span style="color:red"><?=$error_massage?></span> <br /> <!-- Ошибка в веденных полях -->
    <input type="submit" name="send" value="Отправить" /><br />
</form>
</body>
</html>