<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var text = "Число PI = " + Math.PI;
    text += "\nЧисло E = " + Math.E;
    text += "\nМодуль -7 = " + Math.abs(-7);
    text += "\nСинус 0.3 = " + Math.sin(0.3);
    text += "\nСлучайное число = " + Math.random();
    text += "\nСлучайное чсило т 0 до 10 =" + Math.floor(Math.random() * 11);

    //Math.floor(5.3); // floor округление до меньшего числа
    //Math.ceil(5.6); // ceil округление до большего числа

    alert(text);

</script>
</body>
</html>