<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var string = "Небольшая строка";

    var text = "Длина строки равна - " + string.length;
    text += "\nСтрока в верхнем регистре - " + string.toUpperCase();
    text += "\nСтрока в нижнем регистре - " + string.toLowerCase();
    text += "\nОбрезанная строка - " + string.substring(0, 5);
    text += "\n3-й симов это - " + string.charAt(3);
    text += "\n'Строк' начинается с индекса - " + string.indexOf("строк");

    alert(text);

</script>
</body>
</html>