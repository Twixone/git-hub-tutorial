<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var date = new Date();
    text = "Год сейчас - " + date.getFullYear();
    text += "<br />Месяц сейчас - " + date.getMonth();
    text += "<br />День сейчас - " + date.getDate();
    text += "<br />Часов сейчас - " + date.getHours();
    text += "<br />Минут сейчас - " + date.getMinutes();
    text += "<br />Секунд сейчас - " + date.getSeconds();
    //document.write(text);

    var date = new Date(2000, 0, 12, 14, 23, 43);
    date.setMinutes(42);
    text = "Год сейчас - " + date.getFullYear();
    text += "<br />Месяц сейчас - " + date.getMonth();
    text += "<br />День сейчас - " + date.getDate();
    text += "<br />Часов сейчас - " + date.getHours();
    text += "<br />Минут сейчас - " + date.getMinutes();
    text += "<br />Секунд сейчас - " + date.getSeconds();
    document.write(text);

</script>
</body>
</html>